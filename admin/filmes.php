<?php
// =============================================================
//  admin/filmes.php  —  Imagens e notas dos filmes de Geografia
//  Edita diretamente /js/filmes-geografia.json via admin/api/filmes.php
// =============================================================
require_once __DIR__ . '/auth.php';

$jsonPath = __DIR__ . '/../js/filmes-geografia.json';
$filmes = [];
if (file_exists($jsonPath)) {
    $decoded = json_decode(file_get_contents($jsonPath), true);
    if (is_array($decoded)) $filmes = $decoded;
}

$totalComImagem = 0;
$totalComNota   = 0;
$totalSeries    = 0;
foreach ($filmes as $f) {
    if (!empty($f['imagem'])) $totalComImagem++;
    if (!empty($f['nota']))   $totalComNota++;
    if (($f['tipo'] ?? '') === 'Série') $totalSeries++;
}

$PAGINA_ATUAL  = 'filmes';
$PAGINA_TITULO = 'Filmes e Séries de Geografia';
require_once __DIR__ . '/_layout.php';
?>

<div class="conteudo-admin">
    <div style="display:flex;align-items:center;justify-content:space-between;margin-bottom:24px;flex-wrap:wrap;gap:12px">
        <div>
            <h2 style="margin:0">🎬 Filmes e Séries de Geografia</h2>
            <p style="margin:4px 0 0;color:var(--texto2)">
                Adicione pôster (URL da imagem) e nota de cada título. As mudanças aparecem direto na página pública.
            </p>
        </div>
        <a href="/paginas/filmes-geografia.php" target="_blank" class="btn btn-cinza">
            🔗 Ver página pública
        </a>
    </div>

    <div class="kpi-grid">
        <div class="kpi" style="--kpi-cor:var(--azul)">
            <div class="valor"><?= count($filmes) ?></div>
            <div class="label">Títulos cadastrados</div>
            <div class="icone-kpi">🎬</div>
        </div>
        <div class="kpi" style="--kpi-cor:var(--roxo)">
            <div class="valor"><?= $totalSeries ?></div>
            <div class="label">Séries</div>
            <div class="icone-kpi">📺</div>
        </div>
        <div class="kpi" style="--kpi-cor:var(--verde)">
            <div class="valor"><?= $totalComImagem ?></div>
            <div class="label">Com imagem</div>
            <div class="icone-kpi">🖼️</div>
        </div>
        <div class="kpi" style="--kpi-cor:var(--laranja)">
            <div class="valor"><?= $totalComNota ?></div>
            <div class="label">Com nota</div>
            <div class="icone-kpi">⭐</div>
        </div>
    </div>

    <div class="filtros">
        <input type="text" id="busca-filme" placeholder="Buscar por título...">
    </div>

    <div id="barra-nao-salvo" class="barra-nao-salvo">
        <span id="barra-nao-salvo-texto">0 alterações não salvas</span>
        <button class="btn btn-verde" onclick="salvarTudo()">💾 Salvar tudo</button>
    </div>

    <div id="grid-filmes-admin" class="grid-filmes-admin">
        <?php foreach ($filmes as $id => $f): ?>
        <div class="filme-admin-card" data-titulo="<?= htmlspecialchars(mb_strtolower($f['titulo'] ?? '')) ?>">
            <div class="filme-admin-preview">
                <img id="preview-<?= htmlspecialchars($id) ?>"
                     src="<?= htmlspecialchars($f['imagem'] ?? '') ?>"
                     alt=""
                     onerror="this.style.display='none'; this.nextElementSibling.style.display='flex';"
                     style="object-position:center <?= (int)($f['posicao'] ?? 50) ?>%;<?= empty($f['imagem']) ? ' display:none;' : '' ?>">
                <div class="filme-admin-placeholder" style="<?= empty($f['imagem']) ? '' : 'display:none;' ?>">🎬</div>
            </div>

            <div class="filme-admin-body">
                <div style="display:flex;gap:6px;flex-wrap:wrap">
                    <span class="badge badge-azul"><?= htmlspecialchars($f['tema'] ?? '') ?></span>
                    <?php if (!empty($f['tipo'])): ?>
                    <span class="badge badge-cinza"><?= htmlspecialchars($f['tipo']) ?></span>
                    <?php endif; ?>
                </div>
                <h4><?= htmlspecialchars($f['titulo'] ?? '') ?></h4>
                <p class="filme-admin-ficha">
                    <?= htmlspecialchars(implode(' · ', array_filter([$f['direcao'] ?? '', $f['pais'] ?? '', (string)($f['ano'] ?? '')]))) ?>
                </p>

                <label>Enviar arquivo (JPG, PNG ou WebP, até 4MB)</label>
                <input type="file" id="arquivo-<?= htmlspecialchars($id) ?>"
                       accept="image/jpeg,image/png,image/webp"
                       onchange="enviarImagem('<?= htmlspecialchars($id) ?>')">
                <p id="status-upload-<?= htmlspecialchars($id) ?>" class="filme-admin-status"></p>

                <label>ou cole uma URL de imagem</label>
                <input type="text" id="imagem-<?= htmlspecialchars($id) ?>"
                       value="<?= htmlspecialchars($f['imagem'] ?? '') ?>"
                       placeholder="https://... ou /fotoIndex/filmes/arquivo.jpg"
                       oninput="atualizarPreview('<?= htmlspecialchars($id) ?>'); marcarSujo('<?= htmlspecialchars($id) ?>')"
                       onchange="salvarFilme('<?= htmlspecialchars($id) ?>', { silencioso: true })">

                <label>Nota (0 a 10)</label>
                <input type="number" id="nota-<?= htmlspecialchars($id) ?>"
                       value="<?= htmlspecialchars($f['nota'] ?? '') ?>"
                       min="0" max="10" step="0.1" placeholder="Ex: 9.3"
                       oninput="marcarSujo('<?= htmlspecialchars($id) ?>')"
                       onchange="salvarFilme('<?= htmlspecialchars($id) ?>', { silencioso: true })">

                <label>Posição vertical da imagem (<span id="posicao-valor-<?= htmlspecialchars($id) ?>"><?= (int)($f['posicao'] ?? 50) ?></span>%)</label>
                <input type="range" id="posicao-<?= htmlspecialchars($id) ?>"
                       value="<?= (int)($f['posicao'] ?? 50) ?>"
                       min="0" max="100" step="1"
                       oninput="atualizarPosicao('<?= htmlspecialchars($id) ?>'); marcarSujo('<?= htmlspecialchars($id) ?>')"
                       onchange="salvarFilme('<?= htmlspecialchars($id) ?>', { silencioso: true, autoSalvo: true })">

                <button class="btn btn-verde" style="margin-top:10px;width:100%"
                        id="btn-salvar-<?= htmlspecialchars($id) ?>"
                        onclick="salvarFilme('<?= htmlspecialchars($id) ?>')">
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
.filme-admin-body input[type="file"] { padding: 4px 8px; font-size: .76rem; }
.filme-admin-body input[type="range"] {
    padding: 0; background: transparent; border: none;
    accent-color: var(--azul); cursor: pointer;
}
.filme-admin-status { font-size: .7rem; margin: 2px 0 0; min-height: 14px; }
.filme-admin-status.enviando { color: var(--azul); }
.filme-admin-status.ok { color: var(--verde); }
.filme-admin-status.erro { color: var(--vermelho); }

.filme-admin-card.sujo { border-color: var(--laranja); box-shadow: 0 0 0 1px var(--laranja); }

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
// ── Controle de alterações não salvas ──────────────────────────
const cardsSujos = new Set();

function marcarSujo(id) {
    cardsSujos.add(id);
    const card = document.getElementById('imagem-' + id).closest('.filme-admin-card');
    if (card) card.classList.add('sujo');
    atualizarBarraNaoSalvo();
}

function marcarLimpo(id) {
    cardsSujos.delete(id);
    const card = document.getElementById('imagem-' + id).closest('.filme-admin-card');
    if (card) card.classList.remove('sujo');
    atualizarBarraNaoSalvo();
}

function atualizarBarraNaoSalvo() {
    const barra = document.getElementById('barra-nao-salvo');
    const texto = document.getElementById('barra-nao-salvo-texto');
    const n = cardsSujos.size;
    if (n > 0) {
        texto.textContent = `${n} alteração${n !== 1 ? 'ões' : ''} não salva${n !== 1 ? 's' : ''}`;
        barra.classList.add('visivel');
    } else {
        barra.classList.remove('visivel');
    }
}

// Avisa antes de sair da página (fechar aba, recarregar, navegar) se houver alterações pendentes
window.addEventListener('beforeunload', function (e) {
    if (cardsSujos.size > 0) {
        e.preventDefault();
        e.returnValue = '';
    }
});

async function salvarTudo() {
    const ids = Array.from(cardsSujos);
    if (!ids.length) return;
    let ok = 0, falhas = 0;
    for (const id of ids) {
        const sucesso = await salvarFilme(id, { silencioso: true });
        if (sucesso) ok++; else falhas++;
    }
    if (falhas === 0) {
        toast(`${ok} filme(s) salvo(s) com sucesso!`, 'ok');
    } else {
        toast(`${ok} salvo(s), ${falhas} com erro. Confira e tente novamente.`, 'erro');
    }
}

async function enviarImagem(id) {
    const input = document.getElementById('arquivo-' + id);
    const statusEl = document.getElementById('status-upload-' + id);
    const arquivo = input.files[0];
    if (!arquivo) return;

    statusEl.textContent = 'Enviando...';
    statusEl.className = 'filme-admin-status enviando';

    const form = new FormData();
    form.append('id', id);
    form.append('imagem', arquivo);

    try {
        const res = await fetch('/admin/api/upload-filme.php', { method: 'POST', body: form });
        const data = await res.json();

        if (data.erro) {
            statusEl.textContent = data.erro;
            statusEl.className = 'filme-admin-status erro';
            toast(data.erro, 'erro');
            return;
        }

        document.getElementById('imagem-' + id).value = data.imagem;
        atualizarPreview(id);
        statusEl.textContent = `Enviado (${data.largura}×${data.altura}px)`;
        statusEl.className = 'filme-admin-status ok';
        toast('Imagem enviada e salva!', 'ok');
    } catch (e) {
        statusEl.textContent = 'Erro de conexão.';
        statusEl.className = 'filme-admin-status erro';
        toast('Erro de conexão ao enviar imagem.', 'erro');
    } finally {
        input.value = '';
    }
}

function atualizarPreview(id) {
    const url = document.getElementById('imagem-' + id).value.trim();
    const img = document.getElementById('preview-' + id);
    const placeholder = img.nextElementSibling;
    if (url) {
        img.src = url;
        img.style.display = '';
        placeholder.style.display = 'none';
    } else {
        img.style.display = 'none';
        placeholder.style.display = 'flex';
    }
}

function atualizarPosicao(id) {
    const valor = document.getElementById('posicao-' + id).value;
    document.getElementById('posicao-valor-' + id).textContent = valor;
    document.getElementById('preview-' + id).style.objectPosition = `center ${valor}%`;
}

async function salvarFilme(id, opts) {
    opts = opts || {};
    const imagem  = document.getElementById('imagem-' + id).value.trim();
    const nota    = document.getElementById('nota-' + id).value.trim();
    const posicao = document.getElementById('posicao-' + id).value;

    try {
        const res = await fetch('/admin/api/filmes.php', {
            method: 'POST',
            headers: { 'Content-Type': 'application/json' },
            body: JSON.stringify({ acao: 'atualizar', id, imagem, nota, posicao })
        });
        const data = await res.json();
        if (data.erro) {
            if (!opts.silencioso || opts.autoSalvo) toast(data.erro, 'erro');
            return false;
        }
        marcarLimpo(id);
        if (!opts.silencioso) {
            toast('Filme atualizado!', 'ok');
        } else if (opts.autoSalvo) {
            toast('Posição salva automaticamente ✓', 'ok');
        }
        return true;
    } catch (e) {
        if (!opts.silencioso) toast('Erro de conexão ao salvar.', 'erro');
        return false;
    }
}

document.getElementById('busca-filme').addEventListener('input', function () {
    const termo = this.value.toLowerCase();
    document.querySelectorAll('.filme-admin-card').forEach(card => {
        card.style.display = card.dataset.titulo.includes(termo) ? '' : 'none';
    });
});
</script>

<?php require_once __DIR__ . '/_layout_fim.php'; ?>
