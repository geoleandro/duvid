<?php
/**
 * Duvid Notícias — API de notícias geográficas via RSS
 * Configuração em /config/noticias-config.json
 * Cache em /cache/noticias.json
 */

header('Content-Type: application/json; charset=UTF-8');
header('Access-Control-Allow-Origin: *');
header('Cache-Control: public, max-age=3600');

// ── Carregar config ───────────────────────────────────────────────────────
$configFile = __DIR__ . '/../config/noticias-config.json';
$cfg = json_decode(file_get_contents($configFile), true);

$CACHE_FILE   = __DIR__ . '/../cache/noticias.json';
$CACHE_TTL    = ($cfg['cache_horas'] ?? 6) * 3600;
$MAX_FONTE    = $cfg['max_por_fonte'] ?? 5;
$MAX_TOTAL    = $cfg['max_total']    ?? 12;
$FONTES       = $cfg['fontes']       ?? [];
$CATEGORIAS   = $cfg['categorias']   ?? [];
$KEYWORDS_GEO = array_merge($cfg['keywords_geo'] ?? [], $cfg['keywords_extra'] ?? []);

// Forçar ?refresh=1 para ignorar cache (útil em teste)
$forceRefresh = isset($_GET['refresh']) && $_GET['refresh'] === '1';

// ── Servir cache se ainda válido ──────────────────────────────────────────
if (!$forceRefresh && file_exists($CACHE_FILE) && (time() - filemtime($CACHE_FILE)) < $CACHE_TTL) {
    echo file_get_contents($CACHE_FILE);
    exit;
}

// ── Classificar categoria ─────────────────────────────────────────────────
function classificarCategoria(string $texto, array $categorias, ?string $forcada = null): array {
    // Categoria forçada pela fonte (ex: G1 Brasil → sempre Brasil)
    if ($forcada && isset($categorias[$forcada])) {
        $cat = $categorias[$forcada];
        return ['label' => $forcada, 'emoji' => $cat['emoji'], 'cor' => $cat['cor']];
    }

    $t = mb_strtolower($texto, 'UTF-8');

    foreach ($categorias as $nome => $cat) {
        if (empty($cat['regex'])) continue; // "Geografia" é o fallback
        if (@preg_match('/' . $cat['regex'] . '/u', $t)) {
            return ['label' => $nome, 'emoji' => $cat['emoji'], 'cor' => $cat['cor']];
        }
    }

    // Fallback = última categoria (Geografia)
    $ultima = end($categorias);
    $nomeUltima = array_key_last($categorias);
    return ['label' => $nomeUltima, 'emoji' => $ultima['emoji'], 'cor' => $ultima['cor']];
}

// ── Buscar e filtrar RSS ──────────────────────────────────────────────────
function fetchRSS(array $fonte, array $keywords, array $categorias, int $max): array {
    $url      = $fonte['url'];
    $origem   = $fonte['origem'];
    $cor      = $fonte['cor'];
    $forcada  = $fonte['categoria_forcada'] ?? null;

    $ctx = stream_context_create([
        'http' => [
            'timeout'       => 8,
            'user_agent'    => 'DuvidGeo/1.0 (+https://duvid.com.br)',
            'ignore_errors' => true,
        ],
    ]);

    $xml = @file_get_contents($url, false, $ctx);
    if (!$xml) return [];

    libxml_use_internal_errors(true);
    $feed = @simplexml_load_string($xml);
    if (!$feed) return [];

    $noticias = [];
    $items = $feed->channel->item ?? $feed->entry ?? [];

    foreach ($items as $item) {
        $titulo    = trim(html_entity_decode((string)($item->title       ?? ''), ENT_QUOTES, 'UTF-8'));
        $descricao = trim(html_entity_decode(strip_tags((string)($item->description ?? '')), ENT_QUOTES, 'UTF-8'));
        $link      = trim((string)($item->link    ?? ''));
        $pubDate   = trim((string)($item->pubDate ?? $item->updated ?? ''));

        if (!$titulo) continue;

        // Filtro de relevância geográfica (skip se categoria forçada — a fonte já é geo)
        if (!$forcada) {
            $textoFiltro = mb_strtolower($titulo . ' ' . $descricao, 'UTF-8');
            $relevante = false;
            foreach ($keywords as $kw) {
                if (mb_strpos($textoFiltro, mb_strtolower($kw, 'UTF-8')) !== false) {
                    $relevante = true;
                    break;
                }
            }
            if (!$relevante) continue;
        }

        $ts        = $pubDate ? strtotime($pubDate) : time();
        $categoria = classificarCategoria($titulo . ' ' . $descricao, $categorias, $forcada);
        $resumo    = mb_substr($descricao, 0, 140, 'UTF-8') . (mb_strlen($descricao, 'UTF-8') > 140 ? '…' : '');

        $noticias[] = [
            'titulo'    => $titulo,
            'resumo'    => $resumo,
            'link'      => $link,
            'origem'    => $origem,
            'cor'       => $cor,
            'ts'        => $ts,
            'categoria' => $categoria,
        ];

        if (count($noticias) >= $max) break;
    }

    return $noticias;
}

// ── Agregar todas as fontes ───────────────────────────────────────────────
$todas = [];
foreach ($FONTES as $fonte) {
    $items = fetchRSS($fonte, $KEYWORDS_GEO, $CATEGORIAS, $MAX_FONTE);
    $todas = array_merge($todas, $items);
}

// Ordenar por mais recente e limitar
usort($todas, fn($a, $b) => $b['ts'] - $a['ts']);
$todas = array_slice($todas, 0, $MAX_TOTAL);

// ── Fallback se RSS falharem ──────────────────────────────────────────────
if (empty($todas)) {
    $todas = [
        [
            'titulo'    => 'COP30 em Belém concentra atenções sobre o clima global',
            'resumo'    => 'Brasil sediará a 30ª Conferência das Nações Unidas sobre o Clima, com foco no desmatamento e metas de carbono.',
            'link'      => 'https://agenciabrasil.ebc.com.br',
            'origem'    => 'Agência Brasil', 'cor' => '#1565c0', 'ts' => time(),
            'categoria' => ['label' => 'Clima', 'emoji' => '🌱', 'cor' => '#00838f'],
        ],
        [
            'titulo'    => 'IBGE divulga estimativas populacionais por estados brasileiros',
            'resumo'    => 'Dados mostram crescimento concentrado nas regiões Norte e Centro-Oeste do país.',
            'link'      => 'https://ibge.gov.br',
            'origem'    => 'IBGE', 'cor' => '#e65100', 'ts' => time() - 3600,
            'categoria' => ['label' => 'Brasil', 'emoji' => '🇧🇷', 'cor' => '#f9a825'],
        ],
        [
            'titulo'    => 'Tensões geopolíticas impactam rotas de navegação global',
            'resumo'    => 'Conflitos no Oriente Médio afetam o comércio internacional pelo Canal de Suez e Mar Vermelho.',
            'link'      => 'https://bbc.com/portuguese',
            'origem'    => 'BBC Brasil', 'cor' => '#b71c1c', 'ts' => time() - 7200,
            'categoria' => ['label' => 'Geopolítica', 'emoji' => '🌐', 'cor' => '#1565c0'],
        ],
    ];
}

// ── Salvar cache e retornar ───────────────────────────────────────────────
$dir = dirname($CACHE_FILE);
if (!is_dir($dir)) mkdir($dir, 0755, true);

$resultado = [
    'ok'        => true,
    'gerado_em' => date('c'),
    'total'     => count($todas),
    'noticias'  => $todas,
];

file_put_contents($CACHE_FILE, json_encode($resultado, JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT));
echo json_encode($resultado, JSON_UNESCAPED_UNICODE);
