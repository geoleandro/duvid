<?php
/**
 * Duvid Notícias — API de notícias geográficas via RSS
 * Configuração em /config/noticias-config.json
 * Cache em /cache/noticias.json
 *
 * v3 — correções sobre a v2:
 *  - Corrige contador raw para respeitar exatamente max_itens_scan
 *    (antes contava 1 item a mais do que realmente processava).
 *  - Notícias sem data confiável ficam atrás de notícias com data real
 *    na ordenação (por fonte, geral e na seleção final), em vez de
 *    dependerem só do valor numérico da data estimada.
 *  - O filtro filtro_categoria.require_extra usa a descrição completa,
 *    e não apenas o resumo truncado para 140 caracteres — antes uma
 *    keyword que só aparecesse depois do caractere 140 fazia a notícia
 *    ser descartada por engano.
 *  - Detecção de estrutura RSS 2.0 / Atom / RSS 1.0 (RDF) explícita via
 *    isset(), com erro "feed_sem_itens" no debug quando nenhuma bate.
 *  - Extração de data cobre também <date>; descrição cobre também <content>.
 *  - Cache gravado com LOCK_EX (evita corrupção em escrita concorrente).
 *  - JSON de saída com JSON_UNESCAPED_SLASHES (mais legível).
 *  - Config carregada de forma mais defensiva (sem warning se o arquivo
 *    não puder ser lido).
 *
 *  NÃO adotado da v3 original: a ideia de trocar o fallback de categoria
 *  (quando nenhuma regex bate) por um rótulo genérico "Sem categoria" sem
 *  emoji/cor. Isso quebraria o catch-all intencional "Geografia" que já
 *  existe no config (categorias.Geografia, regex vazio, sempre a última
 *  do objeto) e que já está em produção com emoji/cor próprios. Mantido
 *  o comportamento da v2: sem match específico → cai na última categoria
 *  do config.
 *
 *  Mantidos da v2: fallbacks fixos removidos, RSS 2.0/Atom/RDF,
 *  content:encoded e dc:date, dedup por URL+título normalizados, cURL
 *  com fallback SSL relaxado só para erro de certificado, ?debug=1 com
 *  contadores por motivo de descarte.
 *
 *  v3.1 — o pós-filtro require_extra (contexto geográfico/temático por
 *  categoria) deixou de ter isenção para fontes com categoria_forcada.
 *  Antes, qualquer notícia de uma fonte "dedicada" (Ag. Brasil Geral,
 *  G1 Tecnologia, G1 Agronegócios) entrava direto na categoria, mesmo
 *  sem relação nenhuma com geografia — caso real: show do Caetano Veloso
 *  entrou como "Brasil" via Ag. Brasil Geral. Agora toda notícia precisa
 *  do contexto exigido em filtro_categoria, veio de fonte forçada ou não.
 *  Trade-off aceito: Brasil/Tecnologia/Espaço Rural podem ficar sem card
 *  em alguns ciclos, em vez de mostrar conteúdo fora do tema.
 */

// ── Carregar config primeiro ───────────────────────────────────────────────

$configFile = __DIR__ . '/../config/noticias-config.json';

$configRaw = @file_get_contents($configFile);
$cfg = $configRaw ? (json_decode($configRaw, true) ?: []) : [];

$CACHE_FILE  = __DIR__ . '/../cache/noticias.json';
$CACHE_HORAS = $cfg['cache_horas'] ?? 6;
$CACHE_TTL   = $CACHE_HORAS * 3600;

$MAX_FONTE = $cfg['max_por_fonte']    ?? 5;
$MAX_SCAN  = $cfg['max_itens_scan']   ?? 30;
$MAX_TOTAL = $cfg['max_total']        ?? 12;
$MAX_DIAS  = $cfg['max_dias_noticia'] ?? 30;

$FONTES     = $cfg['fontes']     ?? [];
$CATEGORIAS = $cfg['categorias'] ?? [];

$KEYWORDS_GEO = array_merge(
    $cfg['keywords_geo'] ?? [],
    $cfg['keywords_extra'] ?? []
);

$KEYWORDS_BLOCK = $cfg['keywords_bloqueio'] ?? [];

header('Content-Type: application/json; charset=UTF-8');
header('Access-Control-Allow-Origin: *');
header('Cache-Control: public, max-age=' . $CACHE_TTL);

// ── Compilar keywords ─────────────────────────────────────────────────────
// - Palavras curtas (≤4 chars): \b...\b para evitar match em substrings.
// - Palavras longas: match simples — "floresta" bate em "florestal" etc.
// - (*UCP) faz \b considerar letras Unicode (acentos), não só ASCII.

$_kwParts = array_map(function ($kw) {
    $kw = trim((string) $kw);

    if ($kw === '') {
        return '';
    }

    $e = preg_quote(mb_strtolower($kw, 'UTF-8'), '/');

    return (mb_strlen($kw, 'UTF-8') <= 4)
        ? '\b' . $e . '\b'
        : $e;
}, $KEYWORDS_GEO);

$_kwParts = array_values(array_filter($_kwParts));

$KEYWORDS_REGEX = !empty($_kwParts)
    ? '/(*UCP)(' . implode('|', $_kwParts) . ')/ui'
    : null;

// ── Parâmetros de execução ────────────────────────────────────────────────

$forceRefresh = isset($_GET['refresh']) && $_GET['refresh'] === '1';
$debugMode    = isset($_GET['debug']) && $_GET['debug'] === '1';

// ── Servir cache se ainda válido ──────────────────────────────────────────

if (
    !$forceRefresh &&
    !$debugMode &&
    file_exists($CACHE_FILE) &&
    (time() - filemtime($CACHE_FILE)) < $CACHE_TTL
) {
    echo file_get_contents($CACHE_FILE);
    exit;
}

// ── Classificar categoria ─────────────────────────────────────────────────
// Sem match específico, cai na última categoria do config (catch-all
// intencional — "Geografia" no config atual, com emoji/cor próprios).

function classificarCategoria(string $texto, array $categorias, ?string $forcada = null): array {
    if ($forcada && isset($categorias[$forcada])) {
        $cat = $categorias[$forcada];
        return [
            'label' => $forcada,
            'emoji' => $cat['emoji'] ?? '',
            'cor'   => $cat['cor'] ?? '',
        ];
    }

    $t = mb_strtolower($texto, 'UTF-8');

    foreach ($categorias as $nome => $cat) {
        if (empty($cat['regex'])) continue;

        if (@preg_match('/(*UCP)' . $cat['regex'] . '/ui', $t)) {
            return [
                'label' => $nome,
                'emoji' => $cat['emoji'] ?? '',
                'cor'   => $cat['cor'] ?? '',
            ];
        }
    }

    $ultima     = end($categorias);
    $nomeUltima = array_key_last($categorias);

    return [
        'label' => $nomeUltima,
        'emoji' => $ultima['emoji'] ?? '',
        'cor'   => $ultima['cor'] ?? '',
    ];
}

// ── Busca HTTP com status/redirect (cURL, com fallback pra stream) ───────

function httpGetCurl(string $url, int $timeout, bool $verifySsl): array {
    $ch = curl_init($url);

    curl_setopt_array($ch, [
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_FOLLOWLOCATION => true,
        CURLOPT_MAXREDIRS      => 5,
        CURLOPT_CONNECTTIMEOUT => 5,
        CURLOPT_TIMEOUT        => $timeout,
        CURLOPT_USERAGENT      => 'Mozilla/5.0 (compatible; DuvidNoticiasBot/1.0; +https://duvid.com.br)',
        CURLOPT_ENCODING       => '', // aceita gzip/deflate automaticamente
        CURLOPT_SSL_VERIFYPEER => $verifySsl,
        CURLOPT_SSL_VERIFYHOST => $verifySsl ? 2 : 0,
        CURLOPT_HTTPHEADER     => [
            'Accept: application/rss+xml, application/atom+xml, application/xml, text/xml, */*',
            'Accept-Language: pt-BR,pt;q=0.9',
        ],
    ]);

    $body   = curl_exec($ch);
    $status = (int) curl_getinfo($ch, CURLINFO_HTTP_CODE);
    $erro   = curl_error($ch) ?: null;
    curl_close($ch);

    return ['body' => $body ?: '', 'status' => $status, 'erro' => $erro];
}

function httpGet(string $url, int $timeout = 8): array {
    if (function_exists('curl_init')) {
        $r = httpGetCurl($url, $timeout, true);

        // Alguns hosts compartilhados têm bundle de CA desatualizado e
        // rejeitam certificados válidos ("no alternative certificate
        // subject name matches..."). Só nesse caso específico, tenta de
        // novo sem verificar certificado (conteúdo público, sem dado
        // sensível). 404/403/500 etc. NÃO passam por aqui.
        if (!$r['body'] && $r['erro'] && preg_match('/ssl|certificate|certificado/i', $r['erro'])) {
            $r = httpGetCurl($url, $timeout, false);
            $r['ssl_relaxado'] = true;
        }

        return $r;
    }

    // Fallback sem cURL (ambiente sem extensão instalada)
    $ctx = stream_context_create(['http' => [
        'timeout'          => $timeout,
        'user_agent'       => 'Mozilla/5.0 (compatible; DuvidNoticiasBot/1.0; +https://duvid.com.br)',
        'ignore_errors'    => true,
        'follow_location'  => 1,
        'max_redirects'    => 5,
    ]]);

    $http_response_header = [];
    $body   = @file_get_contents($url, false, $ctx);
    $status = 0;
    if (isset($http_response_header[0]) && preg_match('/\s(\d{3})\s/', $http_response_header[0], $m)) {
        $status = (int) $m[1];
    }

    return ['body' => $body ?: '', 'status' => $status, 'erro' => $body ? null : 'fetch_falhou', 'ssl_relaxado' => false];
}

// ── Extração robusta de link (RSS 2.0 texto / Atom href / guid/id) ───────

function extrairLink(SimpleXMLElement $item): string {
    $link = trim((string) ($item->link ?? ''));
    if ($link) return $link;

    if (isset($item->link)) {
        foreach ($item->link as $l) {
            $href = trim((string) ($l['href'] ?? ''));
            $rel  = (string) ($l['rel'] ?? '');
            if ($href && ($rel === '' || strtolower($rel) === 'alternate')) return $href;
        }
        foreach ($item->link as $l) {
            $href = trim((string) ($l['href'] ?? ''));
            if ($href) return $href;
        }
    }

    return trim((string) ($item->guid ?? $item->id ?? ''));
}

// ── Extração de data cobrindo pubDate / updated / published / date / dc:date ─

function extrairData(SimpleXMLElement $item): int {
    $dcNs = 'http://purl.org/dc/elements/1.1/';

    $candidatos = [
        (string) ($item->pubDate ?? ''),
        (string) ($item->updated ?? ''),
        (string) ($item->published ?? ''),
        (string) ($item->date ?? ''),
        (string) ($item->children($dcNs)->date ?? ''),
    ];

    foreach ($candidatos as $c) {
        $c = trim($c);
        if ($c === '') continue;

        $ts = strtotime($c);
        if ($ts !== false && $ts > 0) return $ts;
    }

    return 0; // sem data confiável
}

// ── Extração de descrição, com content: e content:encoded como fallback ──

function extrairDescricao(SimpleXMLElement $item): string {
    $contentNs = 'http://purl.org/rss/1.0/modules/content/';

    $bruta = (string) ($item->description ?? '');
    if (trim($bruta) === '') $bruta = (string) ($item->summary ?? '');
    if (trim($bruta) === '') $bruta = (string) ($item->content ?? '');
    if (trim($bruta) === '') $bruta = (string) ($item->children($contentNs)->encoded ?? '');

    return trim(html_entity_decode(strip_tags($bruta), ENT_QUOTES | ENT_HTML5, 'UTF-8'));
}

// ── Comparador: data real sempre antes de data estimada, depois mais recente primeiro ─

function compararPorData(array $a, array $b): int {
    $aEstimada = !empty($a['data_estimada']);
    $bEstimada = !empty($b['data_estimada']);

    if ($aEstimada !== $bEstimada) {
        return $aEstimada ? 1 : -1;
    }

    return $b['ts'] <=> $a['ts'];
}

// ── Buscar e filtrar RSS de uma fonte ─────────────────────────────────────

function fetchRSS(array $fonte, ?string $kwRegex, array $blocklist, array $categorias, int $max, int $maxScan, int $maxDias): array {
    $url     = $fonte['url'] ?? '';
    $origem  = $fonte['origem'] ?? 'Fonte';
    $cor     = $fonte['cor'] ?? '';
    $forcada = $fonte['categoria_forcada'] ?? null;

    $stats = [
        'raw' => 0, 'sem_titulo' => 0, 'sem_link' => 0, 'antigas' => 0,
        'bloqueadas' => 0, 'sem_keyword' => 0, 'aceitas' => 0,
        'http_status' => null, 'erro' => null, 'ssl_relaxado' => false,
    ];

    if ($url === '') {
        $stats['erro'] = 'url_vazia';
        return ['noticias' => [], 'stats' => $stats];
    }

    $resp = httpGet($url);
    $stats['http_status']  = $resp['status'] ?? 0;
    $stats['ssl_relaxado'] = !empty($resp['ssl_relaxado']);
    if (!empty($resp['erro'])) $stats['erro'] = $resp['erro'];

    if (empty($resp['body']) || (!empty($resp['status']) && $resp['status'] >= 400)) {
        if (!empty($resp['status']) && $resp['status'] >= 400) {
            $stats['erro'] = 'http_' . $resp['status'];
        } elseif (!$stats['erro']) {
            $stats['erro'] = 'corpo_vazio';
        }
        return ['noticias' => [], 'stats' => $stats];
    }

    libxml_use_internal_errors(true);
    $feed = @simplexml_load_string($resp['body']);
    if (!$feed) {
        $stats['erro'] = 'xml_invalido';
        return ['noticias' => [], 'stats' => $stats];
    }

    // RSS 2.0: <channel><item>. Atom: <entry>. RSS 1.0/RDF: <item> é irmão de <channel>.
    if (isset($feed->channel->item)) {
        $items = $feed->channel->item;
    } elseif (isset($feed->entry)) {
        $items = $feed->entry;
    } elseif (isset($feed->item)) {
        $items = $feed->item;
    } else {
        $stats['erro'] = 'feed_sem_itens';
        return ['noticias' => [], 'stats' => $stats];
    }

    $candidatas = [];
    $escaneados = 0;

    foreach ($items as $item) {
        // Limite verificado ANTES de incrementar — raw bate exatamente com max_itens_scan.
        if ($maxScan > 0 && $escaneados >= $maxScan) break;
        $escaneados++;
        $stats['raw']++;

        $titulo = trim(html_entity_decode((string) ($item->title ?? ''), ENT_QUOTES | ENT_HTML5, 'UTF-8'));
        if (!$titulo || mb_strlen($titulo, 'UTF-8') < 15) { $stats['sem_titulo']++; continue; }

        $link = extrairLink($item);
        if ($link && !filter_var($link, FILTER_VALIDATE_URL)) $link = '';
        if (!$link) { $stats['sem_link']++; continue; }

        $descricao = extrairDescricao($item);
        $ts        = extrairData($item);

        if ($ts && $ts < strtotime("-{$maxDias} days")) { $stats['antigas']++; continue; }

        $tituloLower = mb_strtolower($titulo, 'UTF-8');
        $bloqueado   = false;
        foreach ($blocklist as $b) {
            $b = trim((string) $b);
            if ($b === '') continue;
            if (mb_strpos($tituloLower, mb_strtolower($b, 'UTF-8')) !== false) { $bloqueado = true; break; }
        }
        if ($bloqueado) { $stats['bloqueadas']++; continue; }

        if (!$forcada) {
            $textoFiltro = mb_strtolower($titulo . ' ' . $descricao, 'UTF-8');
            if (!$kwRegex || !@preg_match($kwRegex, $textoFiltro)) { $stats['sem_keyword']++; continue; }
        }

        // Sem data confiável → não tratar como "publicada agora". Recebe uma
        // data técnica perto do limite da janela, mas o comparador de
        // ordenação sempre põe data real na frente, independente do valor.
        $temData = ($ts > 0);
        if (!$temData) $ts = strtotime('-' . max(1, $maxDias - 1) . ' days');

        $categoria = classificarCategoria($titulo, $categorias, $forcada);
        $resumo    = mb_substr($descricao, 0, 140, 'UTF-8') . (mb_strlen($descricao, 'UTF-8') > 140 ? '…' : '');

        $candidatas[] = [
            'titulo'              => $titulo,
            'resumo'              => $resumo,
            '_descricao_completa' => $descricao, // usada no pós-filtro; removida antes da resposta
            'link'                => $link,
            'origem'              => $origem,
            'cor'                 => $cor,
            'ts'                  => $ts,
            'data_estimada'       => !$temData,
            'categoria'           => $categoria,
            'categoria_curada'    => (bool) $forcada,
        ];
        $stats['aceitas']++;
    }

    usort($candidatas, 'compararPorData');
    $noticias = array_slice($candidatas, 0, $max);

    return ['noticias' => $noticias, 'stats' => $stats];
}

// ── Agregar todas as fontes ───────────────────────────────────────────────

$todas     = [];
$debugInfo = [];

foreach ($FONTES as $fonte) {
    $result = fetchRSS($fonte, $KEYWORDS_REGEX, $KEYWORDS_BLOCK, $CATEGORIAS, $MAX_FONTE, $MAX_SCAN, $MAX_DIAS);
    $items  = $result['noticias'];
    if ($debugMode) {
        $debugInfo[] = [
            'origem'  => $fonte['origem'] ?? 'Fonte',
            'url'     => $fonte['url'] ?? '',
            'forcada' => $fonte['categoria_forcada'] ?? null,
            'stats'   => $result['stats'],
            'titulos' => array_column($items, 'titulo'),
            'links'   => array_column($items, 'link'),
        ];
    }
    $todas = array_merge($todas, $items);
}

if ($debugMode) {
    echo json_encode(['debug' => $debugInfo], JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES);
    exit;
}

// Ordenar: data real primeiro, depois mais recente primeiro
usort($todas, 'compararPorData');

// ── Deduplicar por URL normalizada + título normalizado ───────────────────

function normalizarUrl(string $url): string {
    $p = parse_url($url);
    if (!$p) return mb_strtolower(trim($url), 'UTF-8');
    $host = strtolower(preg_replace('/^www\./', '', $p['host'] ?? ''));
    $path = rtrim($p['path'] ?? '', '/');
    return $host . $path;
}

function normalizarTitulo(string $titulo): string {
    $t = mb_strtolower($titulo, 'UTF-8');
    $t = preg_replace('/[^\p{L}\p{N}\s]/u', '', $t);
    $t = preg_replace('/\s+/', ' ', trim($t));
    return $t;
}

$vistosUrl    = [];
$vistosTitulo = [];
$semDup       = [];
foreach ($todas as $n) {
    $chaveUrl = normalizarUrl($n['link']);
    $chaveTit = normalizarTitulo($n['titulo']);
    if (isset($vistosUrl[$chaveUrl]) || isset($vistosTitulo[$chaveTit])) continue;
    $vistosUrl[$chaveUrl]    = true;
    $vistosTitulo[$chaveTit] = true;
    $semDup[]                = $n;
}

// ── Pós-filtro: valida contexto geográfico por categoria ─────────────────
// Usa a descrição completa (não o resumo truncado em 140 chars), senão
// uma keyword que só apareça depois do corte era perdida por engano.
// Itens de fonte curada (categoria_forcada) pulam esse filtro.

$filtroCat = $cfg['filtro_categoria'] ?? [];
foreach ($filtroCat as $catNome => $regra) {
    $extras = $regra['require_extra'] ?? [];
    if (empty($extras)) continue;

    $semDup = array_filter($semDup, function ($n) use ($catNome, $extras) {
        if (($n['categoria']['label'] ?? '') !== $catNome) return true;

        // Sem isenção pra fonte curada: notícia genérica de uma fonte
        // "dedicada" (ex: Ag. Brasil Geral, G1 Tecnologia) só entra se
        // realmente tiver contexto geográfico/temático — senão, notícia
        // de cultura/cotidiano vazava pra dentro do card só por vir de
        // uma fonte com categoria_forcada (caso real: show do Caetano
        // Veloso entrando como "Brasil" via Ag. Brasil Geral).
        $texto = mb_strtolower(
            ($n['titulo'] ?? '') . ' ' . ($n['_descricao_completa'] ?? '') . ' ' . ($n['resumo'] ?? ''),
            'UTF-8'
        );
        foreach ($extras as $kw) {
            $kw = trim((string) $kw);
            if ($kw === '') continue;
            if (mb_strpos($texto, mb_strtolower($kw, 'UTF-8')) !== false) return true;
        }
        return false;
    });
    $semDup = array_values($semDup);
}

// Campo interno usado só no pós-filtro acima — não vai pro front-end.
foreach ($semDup as &$n) {
    unset($n['_descricao_completa']);
}
unset($n);

// ── Seleção garantindo 1 por categoria prioritária ───────────────────────

$prioridades  = ['Clima', 'Brasil', 'Geopolítica', 'Economia', 'Tecnologia', 'Espaço Rural'];
$selecionadas = [];
$usados       = [];

foreach ($prioridades as $cat) {
    foreach ($semDup as $i => $n) {
        if (isset($usados[$i])) continue;
        if (($n['categoria']['label'] ?? '') === $cat) {
            $selecionadas[] = $n;
            $usados[$i]     = true;
            break;
        }
    }
    if (count($selecionadas) >= $MAX_TOTAL) break;
}

foreach ($semDup as $i => $n) {
    if (count($selecionadas) >= $MAX_TOTAL) break;
    if (!isset($usados[$i])) {
        $selecionadas[] = $n;
        $usados[$i]     = true;
    }
}

usort($selecionadas, 'compararPorData');
$todas = $selecionadas;

$categoriasAusentes = array_values(array_diff(
    $prioridades,
    array_unique(array_map(fn($n) => $n['categoria']['label'] ?? '', $todas))
));

// ── Salvar cache e retornar ───────────────────────────────────────────────

$dir = dirname($CACHE_FILE);
if (!is_dir($dir)) @mkdir($dir, 0755, true);

$resultado = [
    'ok'                  => true,
    'gerado_em'           => date('c'),
    'total'               => count($todas),
    'noticias'            => $todas,
    'categorias_ausentes' => $categoriasAusentes,
];

$jsonCache = json_encode($resultado, JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES);
if ($jsonCache !== false) {
    @file_put_contents($CACHE_FILE, $jsonCache, LOCK_EX);
}

echo json_encode($resultado, JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES);
