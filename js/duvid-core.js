// 1. CONSTANTES (FORA DE TUDO)


// Força o scroll para o topo toda vez que a página recarregar
// window.onbeforeunload = function () {
//     window.scrollTo(0, 0);
// };

// Reforço ao carregar o DOM
document.addEventListener('DOMContentLoaded', () => {
    window.scrollTo(0, 0);

    // FORÇA A ATUALIZAÇÃO DOS PONTOS ASSIM QUE A HOME ABRE
    if (typeof atualizarInterface === "function") {
        atualizarInterface();
    }

    // Pequeno atraso para garantir que o navegador não "puxe" para baixo
    setTimeout(() => {
        window.scrollTo({ top: 0, behavior: 'instant' });
    }, 10);
});



window.ganhosAtuais = window.ganhosAtuais || 0;
// Se não existir, ele cria. Se existir, ele mantém o que já tem.



// Valores oficiais para o site pronto





// 4. CENTRAL DE ECONOMIA (LocalStorage)
//fIM DAS FUNÇÕES DuvidDB






// Chame assim dentro da sua atualizarSistemaNivelHome:
// animarContador('valor-total-central', rpg.saldoAtual);
function verificarStatusAula(id) {
    const areaAviso = document.getElementById('aviso-status');
    if (!areaAviso || !id) return;

    // 1. Usando o DuvidDB para pegar o nome e os status (Muito mais limpo!)
    const nome = (typeof DuvidDB !== "undefined" ? DuvidDB.getNome() : "Estudante") || "Estudante";

    const jaFezQuestoes = DuvidDB.estaConcluido(id, TIPO_CONCLUSAO.QUESTOES);
    const jaLeuTexto = DuvidDB.estaConcluido(id, TIPO_CONCLUSAO.TEXTO);

    let msg = "", cor = "w3-teal", icone = "fa-rocket";

    // CASO 1: Já completou TUDO (Checkmate!)
    if (jaFezQuestoes && jaLeuTexto) {
        msg = `Sensacional, <b>${nome}</b>! Você já dominou esta aula 100%. Aproveite para revisar ou seguir adiante!`;
        cor = "w3-green"; icone = "fa-check-circle";
    }
    // CASO 2: Fez questões, mas NÃO leu o texto (Raro, mas acontece)
    else if (jaFezQuestoes && !jaLeuTexto) {
        msg = `Mandou bem nas questões, <b>${nome}</b>! 💡 <b>Dica:</b> Leia o texto base agora para garantir seus globinhos extras de leitura!`;
        cor = "w3-orange"; icone = "fa-book";
    }
    // CASO 3: Leu o texto, mas NÃO fez questões (Fluxo padrão)
    else if (!jaFezQuestoes && jaLeuTexto) {
        msg = `Texto lido <b>${nome}</b>, agora que tal testar seus conhecimentos nas questões e <b>ganhar mais globinhos</b>?`;
        cor = "w3-indigo"; 
    }
    // CASO 4: Não fez nada ainda (Início da Jornada)
    else {
        msg = `Olá! Começar pelo texto é uma ótima ideia! As questões também já estão liberadas para você ganhar pontos!`;
    }

    if (msg) {
        areaAviso.innerHTML = `
            <div class="aviso-pergaminho">
                <span onclick="fecharAvisoStatus(this)"
                      class="btn-fechar-rpg">&times;</span>
                <div class="aviso-icone"><i class="fa ${icone}"></i></div>
                <div class="permaginho-texto">${msg}</div>
            </div>`;

        // Auto-fecha após 5 segundos
        setTimeout(function () {
            var btn = areaAviso.querySelector('.btn-fechar-rpg');
            if (btn) fecharAvisoStatus(btn);
        }, 5000);
    }
}

// Fecha o aviso com uma animação de saída antes de escondê-lo
function fecharAvisoStatus(botao) {
    const card = botao.parentElement;
    if (!card) return;
    const wrapper = card.parentElement; // #aviso-status
    card.classList.add('saindo');
    card.addEventListener('animationend', function () {
        card.style.display = 'none';
        // #aviso-status tem margin:70px auto 10px !important (ModeloCss.css).
        // Sem esconder o wrapper também, essa margem fica "presa" no layout
        // e empurra o hero para baixo mesmo com o card já escondido.
        if (wrapper) wrapper.style.display = 'none';
    }, { once: true });
}


// Adicione esta função ao seu DuvidCore ou como função global no core.js
function inicializarAula(tipo) {
    // 1. Recupera o nome globalmente
    const nome = DuvidDB.getNome();

    // 2. Atualiza a interface global (Globinhos e Nome no Painel)
    if (typeof atualizarInterface === "function") atualizarInterface();

    const nomeNoPainel = document.querySelector('#painel-usuario b');
    if (nomeNoPainel && nome) nomeNoPainel.innerText = nome;

    // 3. Verifica se é modo revisão
    const params = new URLSearchParams(window.location.search);
    const aulaID = params.get('id');

    if (aulaID) {
        const jaConcluiu = DuvidDB.estaConcluido(aulaID, tipo);
        if (jaConcluiu) {
            console.log(`Modo Revisão: ${tipo} ${aulaID} já finalizado.`);
            // Opcional: injetar aviso visual
            const aviso = document.getElementById('aviso-revisao');
            if (aviso) aviso.style.display = 'block';
        }
    }

    return aulaID;
}



function executarReset() {
    // "Sair / Trocar de conta": destrói a sessão PHP no servidor
    // e remove a identidade local. O progresso continua no banco
    // e volta quando o aluno entrar de novo com nome + PIN.
    window.scrollTo({ top: 0, behavior: 'smooth' });

    // Destrói sessão PHP antes de limpar o localStorage
    fetch('/api/logout.php', { method: 'POST' }).catch(() => {});

    localStorage.removeItem(NOME_CHAVE);
    localStorage.removeItem(ALUNO_ID_CHAVE);
    DuvidDB._cache.globinhos = 0;
    DuvidDB._cache.conclusoes = {};
    DuvidDB._cache.alunoId = null;

    const modalContent = document.querySelector("#modalReset .w3-container");
    if (modalContent) {
        modalContent.innerHTML = `
            <div class="w3-animate-zoom w3-center w3-padding-32">
                <h3 class="w3-text-green fontePixel"><b>VOCÊ SAIU!</b></h3>
                <img src="../fotoIndex/globinhoPe.png" width="80" class="w3-spin w3-margin">
                <p>Seu progresso ficou salvo.<br><b>Até logo!</b></p>
            </div>
        `;
    }

    if (typeof playSom === "function") playSom('acerto');

    setTimeout(() => {
        window.location.href = '/home.php';
    }, 1800);
}


// 3. Validação do formulário de acesso aos grupos (Senha)
function validateForm() {
    const password = document.getElementById("password").value;
    if (password === "") {
        document.getElementById("errorMessage").innerHTML = "Digite a senha de acesso.";
        return false;
    }
    return true;
}
// --- 2. Função Mestre de Interface ---


// --- LÓGICA DE IDENTIFICAÇÃO (LOGIN / TROCA DE NOME) ---
function gerenciarIdentificacaoHome() {
    const nomeSalvo = DuvidDB.getNome();
    const loading = document.getElementById('loading-painel');
    const form = document.getElementById('form-identificacao');
    const display = document.getElementById('display-identificado');
    const nomeTexto = document.getElementById('nome-aluno-texto');

    if (loading) loading.style.display = 'none';

    if (nomeSalvo) {
        if (form) form.style.display = 'none';
        if (display) display.style.display = 'block';
        if (nomeTexto) nomeTexto.innerText = nomeSalvo.toUpperCase();

        // Foto pixel art via DiceBear (seed = nome do aluno)
        var fotoEl = document.getElementById('aluno-foto');
        if (fotoEl) {
            var seed = encodeURIComponent(nomeSalvo.trim().toLowerCase());
            fotoEl.src = 'https://api.dicebear.com/8.x/pixel-art/svg?seed=' + seed
                       + '&backgroundColor=e8f5e9&radius=50';
        }

        // --- GATILHOS DE RPG ---
        // 1. Atualiza o Nível, Patente e Barra de XP Total
        if (typeof atualizarSistemaNivelHome === "function") {
            atualizarSistemaNivelHome();
        }

        // 2. Dispara o resumo das aulas (1, 2 e 3 ano)
        if (typeof atualizarResumoHome === "function") {
            atualizarResumoHome();
        }

        // 3. Mini ranking + Card de turma (aguarda sync para ter turmaCodigo)
        if (DuvidDB.pronto) {
            DuvidDB.pronto.then(function() {
                carregarMiniRanking();
                atualizarCardTurma();
            });
        }
    } else {
        if (display) display.style.display = 'none';
        if (form) form.style.display = 'block';
    }
}

// ---------------------------------------------------------------
// RANKING CARD — top 3 da turma (só exibe se aluno tiver turma)
// ---------------------------------------------------------------
function carregarMiniRanking() {
    var lista    = document.getElementById('mini-ranking-lista');
    var titulo   = document.getElementById('mini-ranking-titulo');
    if (!lista) return;

    var turma    = DuvidDB._cache && DuvidDB._cache.turmaCodigo;
    var temTurma = turma && turma !== 'LIVRE';

    if (titulo) titulo.textContent = temTurma ? 'Sua Turma' : 'Comunidade Duvid';

    var url = temTurma
        ? '/api/ranking.php?turma=' + encodeURIComponent(turma) + '&top=20'
        : '/api/ranking.php?top=20';

    function esc(s) { return String(s).replace(/&/g,'&amp;').replace(/</g,'&lt;').replace(/>/g,'&gt;'); }

    fetch(url)
        .then(function(r) { return r.json(); })
        .then(function(data) {
            var ranking  = data.ranking || [];
            if (ranking.length === 0) {
                lista.innerHTML = '<div style="text-align:center;padding:16px 0;color:#ccc;font-size:.8rem;">Seja o primeiro a explorar! 🌍</div>';
                return;
            }

            var nomeMeu  = (DuvidDB.getNome() || '').trim().toLowerCase();
            var top3     = ranking.slice(0, 3);
            var pillCls  = ['rank-pill rank-pill-1','rank-pill rank-pill-2','rank-pill rank-pill-3'];
            var medalIco = [' <i class="fa fa-medal" style="color:#f9a825;font-size:.8rem;"></i>','',''];

            var html = top3.map(function(p, i) {
                var isMe = nomeMeu && p.nome.trim().toLowerCase() === nomeMeu;
                var xp   = (p.globinhos_total || 0).toLocaleString('pt-BR') + ' XP';
                return '<div style="display:flex;align-items:center;gap:12px;padding:4px 0;">' +
                    '<span class="' + pillCls[i] + '">' + (i + 1) + '</span>' +
                    '<div style="flex:1;min-width:0;">' +
                        '<p style="margin:0;font-size:.85rem;font-weight:' + (isMe ? '800' : '700') + ';color:#222;' +
                           'white-space:nowrap;overflow:hidden;text-overflow:ellipsis;">' +
                           esc(isMe ? 'Você (' + p.nome + ')' : p.nome) + medalIco[i] + '</p>' +
                        '<p style="margin:0;font-size:.72rem;color:#999;">' + xp + '</p>' +
                    '</div>' +
                    '</div>';
            }).join('');

            // Linha tracejada + posição do aluno se não estiver no top 3
            var minhaPos = -1;
            if (nomeMeu) {
                for (var i = 0; i < ranking.length; i++) {
                    if (ranking[i].nome.trim().toLowerCase() === nomeMeu) { minhaPos = i; break; }
                }
            }
            if (minhaPos >= 3) {
                var eu  = ranking[minhaPos];
                var xpEu = (eu.globinhos_total || 0).toLocaleString('pt-BR') + ' XP';
                html += '<div style="border-top:1.5px dashed #e0e0e0;margin:10px 0 6px;"></div>' +
                    '<div style="display:flex;align-items:center;gap:12px;padding:4px 0;">' +
                        '<span class="rank-pill rank-pill-me">' + (minhaPos + 1) + '</span>' +
                        '<div style="flex:1;min-width:0;">' +
                            '<p style="margin:0;font-size:.85rem;font-weight:800;color:#222;">' +
                               'Você (' + esc(eu.nome) + ')</p>' +
                            '<p style="margin:0;font-size:.72rem;color:#999;">' + xpEu + '</p>' +
                        '</div>' +
                    '</div>';
            }

            lista.innerHTML = html;
        })
        .catch(function() {
            lista.innerHTML = '<div style="text-align:center;padding:16px 0;color:#ccc;font-size:.8rem;">Indisponível.</div>';
        });
}

// ---------------------------------------------------------------
// CARD 2: Turma — popula após sync e lida com join/troca
// ---------------------------------------------------------------
function atualizarCardTurma() {
    var turma    = DuvidDB._cache && DuvidDB._cache.turmaCodigo;
    var temTurma = turma && turma !== 'LIVRE';
    var form     = document.getElementById('turma-join-form');
    var info     = document.getElementById('turma-membro-info');
    if (!form || !info) return;

    if (temTurma) {
        var nome = DuvidDB._cache.turmaNome || turma;
        var nomeEl   = document.getElementById('turma-membro-nome');
        var codigoEl = document.getElementById('turma-membro-codigo');
        if (nomeEl)   nomeEl.textContent   = nome;
        if (codigoEl) codigoEl.textContent = turma;
        form.style.display = 'none';
        info.style.display = 'block';
        // Personaliza título
        var titulo = document.getElementById('turma-card-titulo');
        var desc   = document.getElementById('turma-card-desc');
        if (titulo) titulo.textContent = 'Sua Turma 🎓';
        if (desc)   desc.textContent   = 'Você está matriculado. Explore as trilhas abaixo e estude junto com sua turma!';
    } else {
        form.style.display = 'block';
        info.style.display = 'none';
    }
}

function entrarTurmaLogado() {
    var input = document.getElementById('turma-join-input');
    var msg   = document.getElementById('turma-join-msg');
    var btn   = input ? input.parentElement.querySelector('button') : null;
    var codigo = (input ? input.value.trim() : '').toUpperCase();

    if (!codigo) {
        if (msg) { msg.style.display='block'; msg.style.color='#e53935'; msg.textContent='Digite o código da turma.'; }
        return;
    }
    if (btn) { btn.disabled = true; btn.textContent = '…'; }

    fetch('/api/aluno.php', {
        method: 'POST',
        headers: { 'Content-Type': 'application/json' },
        body: JSON.stringify({ acao: 'entrar_turma', turma_codigo: codigo })
    })
    .then(function(r) { return r.json(); })
    .then(function(data) {
        if (btn) { btn.disabled = false; btn.textContent = 'Entrar'; }
        if (data.erro) {
            if (msg) { msg.style.display='block'; msg.style.color='#e53935'; msg.textContent=data.erro; }
            return;
        }
        // Atualiza cache local e recarrega ranking + card
        if (DuvidDB._cache) {
            DuvidDB._cache.turmaCodigo = data.turma_codigo;
            DuvidDB._cache.turmaNome   = data.turma_nome;
        }
        atualizarCardTurma();
        carregarMiniRanking();
        if (msg) { msg.style.display='block'; msg.style.color='#2e7d32'; msg.textContent='✓ Turma atualizada!'; }
    })
    .catch(function() {
        if (btn) { btn.disabled = false; btn.textContent = 'Entrar'; }
        if (msg) { msg.style.display='block'; msg.style.color='#e53935'; msg.textContent='Erro de conexão. Tente novamente.'; }
    });
}

function NomeAlunos(respid, inputid) {
    const nome   = document.getElementById(inputid)?.value.trim() ?? '';
    const email  = document.getElementById('pq-email')?.value.trim() ?? '';
    const pin    = document.getElementById('pq-pin')?.value.trim()   ?? '';
    const turma  = document.getElementById('pq-turma')?.value.trim() ?? '';
    const estado = document.getElementById('pq-estado')?.value.trim() ?? '';
    const cidade = document.getElementById('pq-cidade')?.value.trim() ?? '';
    const escola = document.getElementById('pq-escola')?.value.trim() ?? '';
    const erroEl = document.getElementById('login-erro');

    function mostrarErro(msg) {
        if (erroEl) { erroEl.textContent = msg; erroEl.style.display = 'block'; }
    }
    function limparErro() {
        if (erroEl) erroEl.style.display = 'none';
    }

    const apenasLetras = nome.replace(/[^a-zA-ZÀ-ÿ]/g, '');
    if (apenasLetras.length < 3) {
        // Abre o form de cadastro, foca no nome e mostra aviso
        const det = document.getElementById('detalhes-form-completo');
        if (det) det.open = true;
        const nomeInput = document.getElementById(inputid);
        if (nomeInput) {
            nomeInput.focus();
            nomeInput.scrollIntoView({ behavior: 'smooth', block: 'center' });
        }
        mostrarErro('Complete o cadastro para entrar' + (turma ? ' na turma ' + turma.toUpperCase() : '') + '.');
        return;
    }

    if (document.getElementById('pq-email')) {
        const emailOk = email && /^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(email);
        if (!emailOk) {
            mostrarErro('Digite um e-mail válido.');
            document.getElementById('pq-email')?.focus();
            return;
        }
        if (!/^\d{4}$/.test(pin)) {
            mostrarErro('O PIN deve ter exatamente 4 números.');
            document.getElementById('pq-pin')?.focus();
            return;
        }
    }

    limparErro();

    DuvidDB.salvarNome(nome, email, pin, turma, estado, cidade, escola)
        .then(dados => {
            if (!dados) return;
            if (dados.erro && !dados.bloqueado) {
                mostrarErro(dados.erro);
                if (dados.campo === 'codigo_turma') document.getElementById('pq-turma')?.focus();
                return;
            }
            if (dados.bloqueado) {
                mostrarErro(dados.erro || 'Nome já em uso. Verifique seu PIN.');
                return;
            }
            document.getElementById('form-identificacao').style.display = 'none';
            document.getElementById('display-identificado').style.display = 'block';
            document.getElementById('nome-aluno-texto').innerText = nome.toUpperCase();
            const resumo = document.getElementById('resumo-geral');
            if (resumo) resumo.style.display = 'block';
            if (typeof atualizarSistemaNivelHome === 'function') atualizarSistemaNivelHome();
        })
        .catch(() => mostrarErro('Erro ao conectar. Tente novamente.'));
}


function prepararTrocaNome() {
    // Se não tem sessão PHP ativa, mostra prompt de re-login em vez do editor
    if (typeof DuvidDB !== 'undefined' && !DuvidDB.temSessao()) {
        _mostrarRelogin(prepararTrocaNome); // após login, reabre esta função
        return;
    }

    // Tenta abrir o modal de edição de perfil (definido em home.php)
    const modal = document.getElementById('modal-editar-perfil');
    if (modal) {
        const loc = (typeof DuvidDB !== 'undefined' && DuvidDB.getLocalizacao)
            ? DuvidDB.getLocalizacao() : {};
        document.getElementById('ep-nome').value   = DuvidDB.getNome() || '';
        document.getElementById('ep-estado').value = loc.estado || '';
        document.getElementById('ep-cidade').value = loc.cidade || '';
        document.getElementById('ep-escola').value = loc.escola || '';
        document.getElementById('ep-pin').value    = window._reloginPinTemp || '';
        window._reloginPinTemp = null; // usa uma vez e descarta
        const erroEl = document.getElementById('ep-erro');
        if (erroEl) erroEl.style.display = 'none';
        modal.style.display = 'flex';
        setTimeout(() => document.getElementById('ep-nome')?.select(), 50);
        return;
    }

    // Fallback para páginas sem o modal
    const form    = document.getElementById('form-identificacao');
    const display = document.getElementById('display-identificado');
    const input   = document.getElementById('pq0');
    if (display) display.style.display = 'none';
    if (form) {
        form.style.display = 'block';
        if (input) { input.value = DuvidDB.getNome(); input.focus(); }
    }
}


// Exibe mini-modal pedindo PIN para restaurar a sessão PHP sem re-cadastro
// callback: função a chamar após login bem-sucedido (null = só fecha o modal)
function _mostrarRelogin(callback) {
    // Remove qualquer relogin anterior
    const antigo = document.getElementById('modal-relogin');
    if (antigo) antigo.remove();
    window._reloginCallback = callback || null;

    const nome = DuvidDB.getNome() || '';
    const div = document.createElement('div');
    div.id = 'modal-relogin';
    div.onclick = function(e) { if (e.target === div) div.remove(); };
    div.style.cssText = 'position:fixed;inset:0;z-index:10000;background:rgba(0,0,0,.55);' +
        'backdrop-filter:blur(3px);display:flex;align-items:center;justify-content:center';

    div.innerHTML = `
        <div style="background:#fff;border-radius:16px;padding:32px 24px;
                    width:min(380px,92vw);box-shadow:0 8px 40px rgba(0,0,0,.25);
                    text-align:center;position:relative;animation:zoomIn .2s ease">
            <button onclick="document.getElementById('modal-relogin').remove()"
                style="position:absolute;top:12px;right:14px;background:none;
                border:none;font-size:22px;cursor:pointer;color:#999">&times;</button>
            <img src="/fotoIndex/globinhoPe.png" width="60" style="margin-bottom:8px">
            <h3 style="margin:0 0 4px;font-size:1.1rem">Olá de volta, <b>${nome.toUpperCase()}</b>!</h3>
            <p style="font-size:.85rem;color:#666;margin:0 0 20px">
                Sua sessão expirou. Digite seu PIN para continuar.
            </p>
            <input id="rl-pin" type="password" inputmode="numeric" maxlength="4"
                placeholder="PIN (4 dígitos)"
                style="width:100%;padding:11px;border:1px solid #ddd;border-radius:8px;
                font-size:1.1rem;text-align:center;letter-spacing:6px;box-sizing:border-box;margin-bottom:8px">
            <div id="rl-erro" style="color:#e53935;font-size:.82rem;min-height:18px;margin-bottom:8px"></div>
            <button id="rl-btn" onclick="_executarRelogin()"
                style="width:100%;padding:12px;background:#2e7d32;color:#fff;
                border:none;border-radius:8px;font-size:1rem;font-weight:700;cursor:pointer">
                Entrar
            </button>
        </div>`;

    document.body.appendChild(div);
    setTimeout(() => document.getElementById('rl-pin')?.focus(), 80);

    // Enter no PIN aciona o botão
    div.querySelector('#rl-pin').addEventListener('keydown', function(e) {
        if (e.key === 'Enter') _executarRelogin();
    });
}

async function _executarRelogin() {
    const pin  = (document.getElementById('rl-pin')?.value || '').trim();
    const nome = DuvidDB.getNome() || '';
    const erro = document.getElementById('rl-erro');
    const btn  = document.getElementById('rl-btn');

    if (!pin || pin.length !== 4) { erro.textContent = 'Digite os 4 dígitos do PIN.'; return; }

    btn.disabled = true;
    btn.textContent = 'Entrando…';
    erro.textContent = '';

    try {
        const resp = await fetch('/api/aluno.php', {
            method: 'POST',
            headers: { 'Content-Type': 'application/json' },
            body: JSON.stringify({ nome, pin }),
        });
        const dados = await resp.json();

        if (dados.erro) {
            erro.textContent = dados.erro;
            btn.disabled = false;
            btn.textContent = 'Entrar';
            return;
        }

        // Sessão restaurada — atualiza cache e fecha o modal
        DuvidDB._cache.sessaoAtiva = true;
        if (typeof DuvidDB.atualizarCache === 'function') DuvidDB.atualizarCache(dados);
        window._reloginPinTemp = pin; // guarda temporariamente para evitar PIN duplo
        setTimeout(() => { window._reloginPinTemp = null; }, 60000); // expira em 1 min
        document.getElementById('modal-relogin')?.remove();

        // Esconde o banner de sessão expirada se existir
        const banner = document.getElementById('banner-login-required');
        if (banner) banner.style.display = 'none';

        // Executa callback (ex: abrir modal de edição) ou apenas fecha
        if (typeof window._reloginCallback === 'function') {
            window._reloginCallback();
        }

    } catch(e) {
        erro.textContent = 'Falha na conexão. Tente novamente.';
        btn.disabled = false;
        btn.textContent = 'Entrar';
    }
}

// DEPOIS: fetch só na primeira vez
async function carregarFrase() {
    const f = document.getElementById('frase');
    const a = document.getElementById('autor');
    const imgAutor = document.getElementById('autor-img');
    if (!f) return;

    try {
        f.style.opacity = 0;
        if (imgAutor) imgAutor.style.opacity = 0;

        const frases = await DuvidCache.get('/estilos/frases.json'); // << NOVO

        setTimeout(() => {
            const aleatoria = frases[Math.floor(Math.random() * frases.length)];
            f.innerText = `"${aleatoria.frase}"`;
            if (a) a.innerText = `— ${aleatoria.autor}`;

            if (imgAutor && aleatoria.imagem) {
                imgAutor.src = "/" + aleatoria.imagem;
                imgAutor.onload = () => {
                    imgAutor.style.display = 'block';
                    imgAutor.style.opacity = 1;
                };
            } else if (imgAutor) {
                imgAutor.style.display = 'none';
            }
            f.style.opacity = 1;
        }, 500);

    } catch (erro) {
        console.error("Erro ao carregar frases:", erro);
        f.innerText = "A geografia é a arte de ler o mundo.";
        f.style.opacity = 1;
    }
}


function sincronizarNomeGlobal() {
    // 1. Pega o nome atualizado
    const nomeSalvo = DuvidDB.getNome();
    if (!nomeSalvo) return; // Se não tem nome, não faz nada

    // 2. Atualiza no Header das Aulas (se houver o ID 'nome-aluno-header')
    const elHeader = document.getElementById("nome-aluno-header");
    if (elHeader) elHeader.innerText = nomeSalvo.toUpperCase();

    // 3. Atualiza em qualquer Span ou Div que use a classe 'nome-dinamico'
    const elementosDinamicos = document.querySelectorAll(".nome-dinamico");
    elementosDinamicos.forEach(el => {
        el.innerText = nomeSalvo;
    });

    // 4. Se você usa aquele "Olá, Fulano" no topo das aulas
    const bNome = document.querySelector(".w3-col.s8 b.w3-text-green");
    if (bNome) bNome.innerText = nomeSalvo.toUpperCase();
}


//Função quando se clica na palavra (padrão antigo: onclick="revelarParentese(this, '...')")
function revelarParentese(elemento, definicao) {
    // 1. Cláusula de Guarda
    if (!elemento || elemento.classList.contains('desbloqueado')) return;

    // Recupera o texto original da palavra antes de modificar o innerHTML
    const palavra = elemento.dataset.palavra || elemento.textContent.trim();

    // 2. Injeta a definição inline com efeito de fade
    elemento.innerHTML += ` <span class="definicao-fade">(${definicao})</span>`;

    // 3. Marca visualmente como desbloqueado
    elemento.classList.add('desbloqueado');
    elemento.style.color = "#155724";
    elemento.style.fontWeight = "bold";
    elemento.style.cursor = "default";

    // 4. Mini feedback flutuante "+2 🌍"
    const fb = document.createElement('span');
    fb.style.cssText = 'position:absolute;top:-28px;left:50%;transform:translateX(-50%);background:#43a047;color:#fff;font-size:0.78em;font-weight:bold;padding:2px 8px;border-radius:20px;pointer-events:none;white-space:nowrap;z-index:1000;animation:glossSubir 1.2s ease forwards';
    fb.textContent = '+2 🌍';
    elemento.style.position = 'relative';
    elemento.appendChild(fb);
    setTimeout(() => fb.remove(), 1300);

    // 5. Recompensa: som + globinhos
    if (typeof playSom === "function") playSom('acerto');

    if (typeof DuvidDB !== "undefined") {
        DuvidDB.addGlobinhos(2, 'glossario');
        if (typeof atualizarInterface === "function") atualizarInterface();
        if (typeof feedbackVisualAcerto === "function") feedbackVisualAcerto();
    }

    // 6. Alimenta a Ficha de Conceitos (se existir #ficha-conceitos na página)
    const ficha = document.getElementById('ficha-conceitos');
    if (ficha) {
        ficha.style.display = 'block';
        // Garante estrutura interna
        if (!ficha.querySelector('h3')) {
            ficha.innerHTML = `<h3>📋 Ficha de Conceitos</h3><p class="contador" id="gloss-contador">0 termos coletados</p><ul id="lista-glossario"></ul>`;
        }
        const lista = document.getElementById('lista-glossario');
        if (lista) {
            const jaExiste = [...lista.querySelectorAll('li')].some(li => li.dataset.palavra === palavra);
            if (!jaExiste) {
                const item = document.createElement('li');
                item.dataset.palavra = palavra;
                item.innerHTML = `<b>${palavra}</b>: ${definicao}`;
                lista.appendChild(item);
                const contador = document.getElementById('gloss-contador');
                if (contador) {
                    const n = lista.querySelectorAll('li').length;
                    contador.textContent = `${n} ${n === 1 ? 'termo coletado' : 'termos coletados'}`;
                }
            }
        }
    }
}