<?php
// =============================================================
//  admin/livros.php  —  Capas dos livros sugeridos
//  Edita diretamente /js/livros.json via admin/api/livros.php
// =============================================================
require_once __DIR__ . '/auth.php';

$jsonPath = __DIR__ . '/../js/livros.json';
$livros = [];
if (file_exists($jsonPath)) {
    $decoded = json_decode(file_get_contents($jsonPath), true);
    if (is_array($decoded)) $livros = $decoded;
}

$totalComCapa = count(array_filter($livros, fn($l) => !empty($l['capa'])));

$PAGINA_ATUAL  = 'livros';
$PAGINA_TITULO = 'Sugestões de Livros';
require_once __DIR__ . '/_layout.php';
?>

<div class="conteudo-admin">
    <div style="display:flex;align-items:center;justify-content:space-between;margin-bottom:24px;flex-wrap:wrap;gap:12px">
        <div>
            <h2 style="margin:0">📚 Sugestões de Livros</h2>
            <p style="margin:4px 0 0;color:var(--texto2)">
                Cole a URL da capa de cada livro. Sem capa: o site tenta a Open Library automaticamente.
            </p>
        </div>
        <a href="/paginas/livros-sugeridos.php" target="_blank" class="btn btn-cinza">
            🔗 Ver página pública
        </a>
    </div>

    <div class="kpi-grid">
        <div class="kpi" style="--kpi-cor:var(--verde)">
            <div class="valor"><?= count($livros) ?></div>
            <div class="label">Livros cadastrados</div>
            <div class="icone-kpi">📖</div>
        </div>
        <div class="kpi" style="--kpi-cor:var(--azul)">
            <div class="valor"><?= $totalComCapa ?></div>
            <div class="label">Com capa manual</div>
            <div class="icone-kpi">🖼️</div>
        </div>
        <div class="kpi" style="--kpi-cor:var(--cinza)">
            <div class="valor"><?= count($livros) - $totalComCapa ?></div>
            <div class="label">Usando Open Library</div>
            <div class="icone-kpi">🌐</div>
        </div>
        <div class="kpi" style="--kpi-cor:var(--vermelho)">
            <div class="valor" id="kpi-capas-faltando">0</div>
            <div class="label">Capas faltando (nem a Open Library achou)</div>
            <div class="icone-kpi">❌</div>
        </div>
    </div>

    <div class="filtros" style="display:flex;gap:16px;align-items:center;flex-wrap:wrap">
        <input type="text" id="busca-livro" placeholder="Buscar por título ou autor...">
        <label style="display:flex;align-items:center;gap:6px;font-size:.85rem;color:var(--texto2);cursor:pointer">
            <input type="checkbox" id="filtro-sem-capa" style="width:auto">
            Mostrar somente sem capa
        </label>
    </div>

    <div id="barra-nao-salvo" class="barra-nao-salvo">
        <span id="barra-nao-salvo-texto">0 alterações não salvas</span>
        <button class="btn btn-verde" onclick="salvarTudo()">💾 Salvar tudo</button>
    </div>

    <div id="grid-livros-admin" class="grid-filmes-admin">
        <?php foreach ($livros as $id => $l):
            $capaAtual = $l['capa'] ?? '';
            $capaFallback = 'https://covers.openlibrary.org/b/title/' . urlencode($l['titulo'] ?? '') . '-M.jpg';
            $capaExibida = $capaAtual ?: $capaFallback;
        ?>
        <div class="filme-admin-card" data-titulo="<?= htmlspecialchars(mb_strtolower(($l['titulo'] ?? '') . ' ' . ($l['autor'] ?? ''))) ?>">
            <div class="filme-admin-preview" style="aspect-ratio:2/3;background:#f0f0f0">
                <img id="preview-<?= htmlspecialchars($id) ?>"
                     src="<?= htmlspecialchars($capaExibida) ?>"
                     alt="<?= htmlspecialchars($l['titulo'] ?? '') ?>"
                     onerror="this.style.display='none'; this.nextElementSibling.style.display='flex'; capaFalhou('<?= htmlspecialchars($id) ?>');"
                     onload="capaCarregou('<?= htmlspecialchars($id) ?>')"
                     style="object-fit:cover;width:100%;height:100%">
                <div class="filme-admin-placeholder" style="display:none">📚</div>
            </div>

            <div class="filme-admin-body">
                <div style="display:flex;gap:6px;flex-wrap:wrap;margin-bottom:6px">
                    <span class="badge badge-verde"><?= htmlspecialchars($l['tag'] ?? '') ?></span>
                </div>
                <h4><?= htmlspecialchars($l['titulo'] ?? '') ?></h4>
                <p class="filme-admin-ficha"><?= htmlspecialchars(($l['autor'] ?? '') . ($l['ano'] ? ' · ' . $l['ano'] : '')) ?></p>

                <label>URL da capa (ou deixe vazio para usar Open Library)</label>
                <input type="text" id="capa-<?= htmlspecialchars($id) ?>"
                       value="<?= htmlspecialchars($capaAtual) ?>"
                       placeholder="https://..."
                       oninput="atualizarPreview('<?= htmlspecialchars($id) ?>'); marcarSujo('<?= htmlspecialchars($id) ?>')">

                <p id="aviso-capa-<?= htmlspecialchars($id) ?>" class="livro-admin-aviso" style="<?= $capaAtual ? 'display:none' : '' ?>">
                    🌐 Usando Open Library automaticamente
                </p>

                <button class="btn btn-verde" style="margin-top:10px;width:100%"
                        id="btn-salvar-<?= htmlspecialchars($id) ?>"
                        onclick="salvarLivro('<?= htmlspecialchars($id) ?>')">
                    💾 Salvar
                </button>
            </div>
        </div>
        <?php endforeach; ?>
    </div>
</div>

<style>
.grid-filmes-admin {
    display: grid;
    grid-template-columns: repeat(auto-fill, minmax(260px, 1fr));
    gap: 16px;
}
.filme-admin-card {
    background: var(--card);
    border: 1px solid var(--borda);
    border-radius: 10px;
    overflow: hidden;
    display: flex;
    flex-direction: column;
}
.filme-admin-preview {
    width: 100%;
    height: 140px;
    background: var(--card2);
    display: flex;
    align-items: center;
    justify-content: center;
    overflow: hidden;
}
.filme-admin-preview img {
    width: 100%; height: 100%; object-fit: cover;
}
.filme-admin-placeholder {
    font-size: 2.2rem;
    opacity: .35;
    display: flex;
    align-items: center;
    justify-content: center;
}
.filme-admin-body { padding: 14px 16px; display: flex; flex-direction: column; gap: 6px; }
.filme-admin-body h4 { font-size: .92rem; color: #fff; margin: 2px 0 0; line-height: 1.3; }
.filme-admin-ficha { font-size: .72rem; color: var(--texto2); margin: 0 0 4px; }
.filme-admin-body label { font-size: .7rem; color: var(--texto2); margin-top: 6px; }
.filme-admin-body input {
    background: var(--card2);
    border: 1px solid var(--borda);
    border-radius: 6px;
    color: var(--texto);
    padding: 6px 10px;
    font-size: .82rem;
    outline: none;
}
.filme-admin-body input:focus { border-color: var(--azul); }

.filme-admin-card.sujo { border-color: var(--laranja); box-shadow: 0 0 0 1px var(--laranja); }
.filme-admin-card.sem-capa { border-color: var(--vermelho); box-shadow: 0 0 0 1px var(--vermelho); }
.livro-admin-aviso { font-size: .72rem; color: #888; margin: 4px 0 8px; }
.livro-admin-aviso.aviso-erro { color: var(--vermelho); font-weight: 600; }

.barra-nao-salvo {
    display: none;
    position: sticky;
    top: 0;
    z-index: 40;
    align-items: center;
    justify-content: space-between;
    gap: 12px;
    background: var(--laranja);
    color: #1a1200;
    font-weight: 700;
    font-size: .85rem;
    padding: 10px 18px;
    border-radius: 10px;
    margin-bottom: 16px;
    box-shadow: 0 4px 16px rgba(0,0,0,.25);
}
.barra-nao-salvo.visivel { display: flex; }
.barra-nao-salvo .btn { background: #1a1200; color: #fff; }
</style>

<script>
const cardsSujos = new Set();
const capasFaltando = new Set();

function atualizarKpiFaltando() {
    const el = document.getElementById('kpi-capas-faltando');
    if (el) el.textContent = capasFaltando.size;
}

function capaFalhou(id) {
    capasFaltando.add(id);
    atualizarKpiFaltando();
    const card = document.getElementById('capa-' + id)?.closest('.filme-admin-card');
    if (card) card.classList.add('sem-capa');
    const aviso = document.getElementById('aviso-capa-' + id);
    if (aviso) {
        aviso.textContent = '❌ Capa não encontrada — cole uma URL manual';
        aviso.className = 'livro-admin-aviso aviso-erro';
        aviso.style.display = '';
    }
    aplicarFiltros();
}

function capaCarregou(id) {
    if (capasFaltando.delete(id)) atualizarKpiFaltando();
    const card = document.getElementById('capa-' + id)?.closest('.filme-admin-card');
    if (card) card.classList.remove('sem-capa');
    const aviso = document.getElementById('aviso-capa-' + id);
    if (aviso) aviso.style.display = 'none';
    aplicarFiltros();
}

function marcarSujo(id) {
    cardsSujos.add(id);
    const n = cardsSujos.size;
    document.getElementById('barra-nao-salvo-texto').textContent = `${n} alteração${n !== 1 ? 'ões' : ''} não salva${n !== 1 ? 's' : ''}`;
    document.getElementById('barra-nao-salvo').classList.add('visivel');
}

function marcarLimpo(id) {
    cardsSujos.delete(id);
    const n = cardsSujos.size;
    if (n === 0) {
        document.getElementById('barra-nao-salvo').classList.remove('visivel');
    } else {
        document.getElementById('barra-nao-salvo-texto').textContent = `${n} alteração${n !== 1 ? 'ões' : ''} não salva${n !== 1 ? 's' : ''}`;
    }
}

function atualizarPreview(id) {
    const url = document.getElementById('capa-' + id).value.trim();
    const img = document.getElementById('preview-' + id);
    const placeholder = img.nextElementSibling;
    const fallback = 'https://covers.openlibrary.org/b/title/' +
        encodeURIComponent(img.alt) + '-M.jpg';
    img.src = url || fallback;
    img.style.display = '';
    placeholder.style.display = 'none';
}

async function salvarLivro(id, opts) {
    opts = opts || {};
    const capa = document.getElementById('capa-' + id).value.trim();
    try {
        const res = await fetch('/admin/api/livros.php', {
            method: 'POST',
            headers: { 'Content-Type': 'application/json' },
            body: JSON.stringify({ acao: 'atualizar', id, capa })
        });
        const data = await res.json();
        if (data.erro) {
            if (!opts.silencioso) toast(data.erro, 'erro');
            return false;
        }
        marcarLimpo(id);
        if (!opts.silencioso) toast('Livro atualizado!', 'ok');
        return true;
    } catch (e) {
        if (!opts.silencioso) toast('Erro de conexão.', 'erro');
        return false;
    }
}

async function salvarTudo() {
    const ids = Array.from(cardsSujos);
    if (!ids.length) return;
    let ok = 0, falhas = 0;
    for (const id of ids) {
        const sucesso = await salvarLivro(id, { silencioso: true });
        if (sucesso) ok++; else falhas++;
    }
    toast(falhas === 0 ? `${ok} livro(s) salvo(s)!` : `${ok} salvo(s), ${falhas} com erro.`, falhas === 0 ? 'ok' : 'erro');
}

window.addEventListener('beforeunload', e => {
    if (cardsSujos.size > 0) { e.preventDefault(); e.returnValue = ''; }
});

function aplicarFiltros() {
    const termo = document.getElementById('busca-livro').value.toLowerCase();
    const somenteSemCapa = document.getElementById('filtro-sem-capa').checked;
    document.querySelectorAll('.filme-admin-card').forEach(card => {
        const bateBusca = card.dataset.titulo.includes(termo);
        const bateFiltro = !somenteSemCapa || card.classList.contains('sem-capa');
        card.style.display = (bateBusca && bateFiltro) ? '' : 'none';
    });
}
document.getElementById('busca-livro').addEventListener('input', aplicarFiltros);
document.getElementById('filtro-sem-capa').addEventListener('change', aplicarFiltros);
</script>

<?php require_once __DIR__ . '/_layout_fim.php'; ?>
