// ══════════════════════════════════════════════════════════════════
//  aulas-geral.js — Renderização das páginas de aulas (Clean Pixel)
// ══════════════════════════════════════════════════════════════════

// Escape de HTML
function _esc(str) {
    if (!str) return '';
    return String(str)
        .replace(/&/g, '&amp;')
        .replace(/</g, '&lt;')
        .replace(/>/g, '&gt;')
        .replace(/"/g, '&quot;');
}

// ── Carregamento principal ─────────────────────────────────────────────────
async function carregarAulas(ano) {
    const grid = document.getElementById('grid-aulas');
    if (!grid) return;

    try {
        const aulas = await DuvidCache.get('/js/aulas-' + ano + 'ano.json');

        // Progress card
        mostrarProgressoGlobal(aulas, ano);

        // Grid
        grid.innerHTML = aulas.map(function(aula) {
            return renderizarCard(aula);
        }).join('');

        // Inventário
        renderizarInventario(aulas, ano);

    } catch (e) {
        console.error('Erro ao carregar aulas:', e);
        grid.innerHTML = "<p style='padding:32px; text-align:center; color:#aaa;'>Erro ao carregar o mapa de aulas.</p>";
    }

    if (typeof atualizarHeaderGlobinhos === 'function') atualizarHeaderGlobinhos();
}

// ── Status da aula ─────────────────────────────────────────────────────────
// exigeTexto = false pras aulas de Revisão (aula.linkTexto === null) — elas
// não têm etapa de leitura, então não podem depender de "leuTexto" pra
// serem consideradas concluídas.
function obterStatusAula(aulaId, exigeTexto) {
    const leuTexto = exigeTexto ? DuvidDB.estaConcluido(aulaId, TIPO_CONCLUSAO.TEXTO) : true;
    const fezQuest = DuvidDB.estaConcluido(aulaId, TIPO_CONCLUSAO.QUESTOES);
    const total    = leuTexto && fezQuest;
    const parcial  = (exigeTexto && leuTexto) || fezQuest;

    if (total) return {
        classe: 'aula-card-done',
        badge: '<span class="aula-badge aula-badge-ok"><i class="fa fa-check"></i> Concluída</span>',
        btns: function(aula) {
            var t = aula.linkTexto ? `<a href="${aula.linkTexto}" class="aula-btn aula-btn-ghost">Revisar texto</a>` : '';
            var q = `<a href="${aula.linkQuestoes}" class="aula-btn aula-btn-ghost">Revisar questões</a>`;
            // Aulas de Revisão (sem texto) fecham um bloco — se o certificado
            // já foi conquistado, mostra o botão em vez de "Revisar texto".
            var cert = '';
            if (!aula.linkTexto && typeof DuvidDB !== 'undefined' && DuvidDB.temCertificado && DuvidDB.temCertificado('bloco', aula.id)) {
                cert = `<a href="/paginas/certificado.php?tipo=bloco&ref=${aula.id}" class="aula-btn aula-btn-primary">🎓 Ver certificado</a>`;
            }
            return cert + t + q;
        }
    };

    if (parcial) return {
        classe: 'aula-card-wip',
        badge: '<span class="aula-badge aula-badge-wip"><i class="fa fa-clock"></i> Em andamento</span>',
        btns: function(aula) {
            var t = '';
            if (aula.linkTexto) {
                t = leuTexto
                    ? `<a href="${aula.linkTexto}" class="aula-btn aula-btn-ghost">Revisar texto</a>`
                    : `<a href="${aula.linkTexto}" class="aula-btn aula-btn-primary">📖 Texto</a>`;
            }
            var q = fezQuest
                ? `<a href="${aula.linkQuestoes}" class="aula-btn aula-btn-ghost">Revisar questões</a>`
                : `<a href="${aula.linkQuestoes}" class="aula-btn aula-btn-primary">✍️ Questões</a>`;
            return t + q;
        }
    };

    return {
        classe: 'aula-card-nova',
        badge: '',
        btns: function(aula) {
            if (aula.linkTexto) {
                return `<a href="${aula.linkTexto}" class="aula-btn aula-btn-primary">Texto →</a>`
                     + `<a href="${aula.linkQuestoes}" class="aula-btn aula-btn-ghost">Questões</a>`;
            }
            return `<a href="${aula.linkQuestoes}" class="aula-btn aula-btn-primary">Questões →</a>`;
        }
    };
}

// ── Renderiza um card ──────────────────────────────────────────────────────
function renderizarCard(aula) {
    const status   = obterStatusAula(aula.id, !!aula.linkTexto);
    const numAula  = String(aula.id).slice(-2);
    const desc     = aula.conteudo || '';
    const descCurta = desc.length > 90 ? desc.substring(0, 87) + '…' : desc;

    return `
    <div class="aula-card ${status.classe}">
        ${status.badge}
        <div class="aula-img-wrap">
            <img src="${_esc(aula.imagem)}" alt="${_esc(aula.titulo)}" loading="lazy">
        </div>
        <div class="aula-content">
            <span class="aula-num">Aula ${numAula}</span>
            <h3 class="aula-titulo">${_esc(aula.titulo)}</h3>
            <p class="aula-desc">${_esc(descCurta)}</p>
            <div class="aula-actions">
                ${status.btns(aula)}
            </div>
        </div>
    </div>`;
}

// ── Progress card ──────────────────────────────────────────────────────────
function mostrarProgressoGlobal(aulas, ano) {
    const painel = document.getElementById('painel-usuario');
    if (!painel) return;

    const progresso = DuvidDB.getProgressoAcademico(aulas);
    const rpg       = DuvidDB.getProgressoRPG();
    const nome      = DuvidDB.getNome();

    // Atualiza hero badge
    const heroPorc = document.getElementById('hero-porc');
    if (heroPorc) heroPorc.textContent = progresso.porc + '%';

    if (!nome) {
        painel.innerHTML = `
        <div class="prog-card prog-card-visitante">
            <p style="margin:0 0 10px; font-size:.9rem; color:#555;">
                <i class="fa fa-lock" style="color:#f9a825; margin-right:6px;"></i>
                Faça login para salvar seu progresso.
            </p>
            <a href="/home.php" class="aula-btn aula-btn-primary" style="display:inline-block;">Entrar →</a>
        </div>`;
        return;
    }

    painel.innerHTML = `
    <div class="prog-card">
        <div class="prog-card-top">
            <div class="prog-card-info">
                <div style="display:flex; align-items:center; gap:8px; flex-wrap:wrap; margin-bottom:4px;">
                    <span class="prog-lvl-tag">Nível ${rpg.lvl}</span>
                    <span class="prog-nome">${_esc(nome)}</span>
                </div>
                <span class="prog-patente" style="color:${_esc(rpg.cor)};">${_esc(rpg.patente)}</span>
            </div>
            <div class="prog-card-xp">
                <span class="prog-xp-valor" id="xp-atual">${Math.round(rpg.saldoAtual)}</span>
                <span class="prog-xp-label">globinhos 🌍</span>
            </div>
        </div>

        <div class="prog-bar-wrap">
            <div class="prog-bar-fill" id="barra-xp-total" style="width:0%;"></div>
        </div>

        <div class="prog-card-bottom">
            <span class="prog-label"><b style="color:#4caf50;">${progresso.porc}%</b> concluído</span>
            <span class="prog-label"><b>${progresso.concluidas}/${progresso.total}</b> aulas</span>
        </div>
    </div>`;

    // Anima a barra
    requestAnimationFrame(function() {
        var barra = document.getElementById('barra-xp-total');
        if (barra) {
            setTimeout(function() {
                barra.style.width = progresso.porc + '%';
            }, 80);
        }
    });
}

// ── Inventário ─────────────────────────────────────────────────────────────
// Biblioteca é sempre visível. Certificado usa o estado REAL (tabela
// certificados_alunos via DuvidDB.temCertificado), não uma % estimada —
// assim ele só libera quando o certificado do módulo foi mesmo emitido.
var INVENTARIO_ITENS = [
    { emoji: '📚', nome: 'Biblioteca',  rarity: 'COMUM',    minPorc: 0,   href: '/paginas/livrosgeografia.php' },
];

function renderizarInventario(aulas, ano) {
    var lista = document.getElementById('inventario-lista');
    var cont  = document.getElementById('inv-contagem');
    if (!lista) return;

    var prog = DuvidDB.getProgressoAcademico(aulas);
    var certificadoOk = (typeof DuvidDB !== 'undefined' && DuvidDB.temCertificado)
        ? DuvidDB.temCertificado('modulo', ano)
        : false;

    var itens = INVENTARIO_ITENS.concat([{
        emoji: '🎓',
        nome: 'Certificado',
        rarity: 'LENDÁRIO',
        minPorc: 100,
        forcarOk: certificadoOk,
        labelBloqueado: 'Desbloq. em 100%',
        mostrarRosca: true,
        href: certificadoOk ? ('/paginas/certificado.php?tipo=modulo&ref=' + ano) : null
    }]);

    var desbloq = 0;
    var html    = '';

    itens.forEach(function(item) {
        var ok = item.forcarOk !== undefined ? item.forcarOk : (prog.porc >= item.minPorc);
        if (ok) desbloq++;

        var rarityClass = 'inv-rarity';
        if (ok) {
            if (item.rarity === 'LENDÁRIO') rarityClass += ' inv-lendario';
            else if (item.rarity === 'ÉPICO') rarityClass += ' inv-epico';
            else if (item.rarity === 'RARO')  rarityClass += ' inv-raro';
            else rarityClass += ' inv-comum';
        } else {
            rarityClass += ' inv-locked-txt';
        }

        if (ok && item.href) {
            html += `<a href="${item.href}" class="inv-item inv-desbloqueado">
                <span class="inv-icon">${item.emoji}</span>
                <div class="inv-info">
                    <span class="inv-nome">${item.nome}</span>
                    <span class="${rarityClass}">${item.rarity}</span>
                </div>
                <i class="fa fa-chevron-right inv-arrow"></i>
            </a>`;
        } else if (ok) {
            html += `<div class="inv-item inv-desbloqueado">
                <span class="inv-icon">${item.emoji}</span>
                <div class="inv-info">
                    <span class="inv-nome">${item.nome}</span>
                    <span class="${rarityClass}">${item.rarity}</span>
                </div>
                <span style="font-size:.58rem; color:#aaa; letter-spacing:.05em;">EM BREVE</span>
            </div>`;
        } else {
            // Itens com progresso mensurável (ex: Certificado) mostram uma
            // rosca de % em vez de um cadeado sem contexto nenhum.
            var iconeHtml = item.mostrarRosca
                ? `<div class="inv-rosca" style="--pct:${prog.porc}">
                       <span class="inv-rosca-txt">${prog.porc}%</span>
                   </div>`
                : `<span class="inv-icon inv-icon-locked">${item.emoji}</span>`;

            html += `<div class="inv-item inv-bloqueado">
                ${iconeHtml}
                <div class="inv-info">
                    <span class="inv-nome">${item.nome}</span>
                    <span class="${rarityClass}">${item.labelBloqueado || ('Desbloq. em ' + item.minPorc + '%')}</span>
                </div>
                <i class="fa fa-lock inv-lock"></i>
            </div>`;
        }
    });

    lista.innerHTML = html;
    if (cont) cont.textContent = desbloq + '/' + itens.length;
}

// ── Funções legadas ────────────────────────────────────────────────────────

function ExpandeDiv(id) {
    var el = document.getElementById(id);
    if (!el) return;
    if (el.style.display === 'block') {
        el.style.display = 'none';
    } else {
        Array.from(document.getElementsByClassName('w3-modal'))
            .forEach(function(m) { m.style.display = 'none'; });
        el.style.display = 'block';
    }
}

window.onclick = function(event) {
    if (event.target.className && event.target.className.indexOf('w3-modal') !== -1) {
        event.target.style.display = 'none';
    }
};

// Resumo na home
async function atualizarResumoHome() {
    // Mostra o card de trilhas legado se ainda existir (compatibilidade)
    const painelResumo = document.getElementById('resumo-geral');
    if (painelResumo) painelResumo.style.display = 'block';

    for (var a of ['1', '2', '3']) {
        try {
            const aulas = await DuvidCache.get('/js/aulas-' + a + 'ano.json');
            const prog  = DuvidDB.getProgressoAcademico(aulas);
            const total = prog.total;
            const conc  = prog.concluidas;
            const porc  = prog.porc;

            var barra = document.getElementById('bar-' + a + 'ano');
            var texto = document.getElementById('txt-' + a + 'ano');
            var icone = document.getElementById('conquista-' + a + 'ano');
            if (barra) barra.style.width = porc + '%';
            if (texto) texto.innerText   = conc + '/' + total;
            if (icone) icone.style.display = (porc >= 100 && total > 0) ? 'block' : 'none';

            // Preenche os cards de módulo na seção de trilhas
            const progCard = document.getElementById('prog-card-' + a + 'ano');
            const cardBar  = document.getElementById('card-bar-' + a + 'ano');
            const cardTxt  = document.getElementById('card-txt-' + a + 'ano');
            const cardPct  = document.getElementById('card-pct-' + a + 'ano');
            if (progCard) {
                progCard.style.display = 'block';
                if (cardTxt) cardTxt.textContent = conc + '/' + total + ' aulas';
                if (cardPct) cardPct.textContent = porc + '%';
                if (cardBar) requestAnimationFrame(function() { cardBar.style.width = porc + '%'; });
            }
        } catch (e) {
            console.error('Falha ao processar ' + a + 'º ano:', e);
        }
    }
    if (typeof atualizarSistemaNivelHome === 'function') atualizarSistemaNivelHome();
}

function contarAulasConcluidas(anoPrefixo) {
    var contagem = 0;
    var cache    = DuvidDB._cache.conclusoes || {};
    var prefixoQ = 'concluido_' + TIPO_CONCLUSAO.QUESTOES + '_';
    var prefixoT = 'concluido_' + TIPO_CONCLUSAO.TEXTO + '_';

    Object.keys(cache).forEach(function(chave) {
        if (chave.startsWith(prefixoQ)) {
            var idAula = chave.replace(prefixoQ, '');
            if (idAula.startsWith(String(anoPrefixo)) && cache[prefixoT + idAula]) {
                contagem++;
            }
        }
    });
    return contagem;
}
