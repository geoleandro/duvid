// Marca esta como página de aula (questões) → o badge de pontos da navbar aparece aqui.
window.DUVID_PAGINA_AULA = true;

let questoes = [];
let indiceAtual = 0;
let nota = 0;
let aulaID = ""; // Variável global
// << NOVO: sistema de vidas
let vidas = 3;
const TOTAL_VIDAS = 3;
const BONUS_VIDAS = 20; // globinhos extras por terminar sem perder vida
// << NOVO: sistema de combo
let combo = 0;
let errosSeguidos = 0; // erros consecutivos para personagem de suporte
// << NOVO: modo revisão
let questoesErradas = [];
let emRevisao = false; // quando true, refazer as erradas NÃO re-pontua por questão
const PONTOS_POR_QUESTAO = 10; // globinhos por cada questão acertada
const COMBO_NIVEIS = [
    { minimo: 7, nome: '🌟 Lendário!',  bonus: 15 },
    { minimo: 5, nome: '⚡ Imparável!', bonus: 10 },
    { minimo: 3, nome: '🔥 Em Chamas!', bonus: 5  },
];

// === PERSONAGEM (GIFs temáticos da Jéssica) ===
// Mapeie aulaID → nome da pasta em questoes/personagem/{tema}/
const PERSONAGEM_TEMAS = {
    // Exemplos futuros:
    // 103: 'cartografia', 104: 'cartografia',
    // 325: 'africa', 326: 'africa',
};

function _getGifPersonagem(tipo) {
    const tema = PERSONAGEM_TEMAS[aulaID] || 'default';
    // Caminho absoluto — mesma convenção do JSON (/questoes/...), funciona
    // mesmo se a página for servida ou incluída de outro caminho.
    return `/questoes/personagem/${tema}/${tipo}.gif`;
}

function mostrarGifAcerto() {
    const overlay = document.getElementById('duvid-gif-overlay');
    if (!overlay) return;
    const img = document.createElement('img');
    // Usa 'inteligente' quando há combo ativo, 'acerto' no acerto simples
    const tipo = (combo >= 3) ? 'inteligente' : 'acerto';
    img.src = _getGifPersonagem(tipo);
    img.className = `duvid-gif-${tipo}`; // permite CSS separado por tipo
    img.onerror = () => { overlay.style.display = 'none'; };
    overlay.innerHTML = '';
    overlay.appendChild(img);
    overlay.style.display = 'flex';
    overlay.classList.remove('saindo');
    setTimeout(() => {
        overlay.classList.add('saindo');
        setTimeout(() => {
            overlay.style.display = 'none';
            overlay.classList.remove('saindo');
        }, 450);
    }, 2200);
}

function _gifInlineHtml(tipo) {
    const src = _getGifPersonagem(tipo);
    const cssClass = tipo === 'erro' ? 'duvid-gif-erro' : 'duvid-gif-duvida';
    return `<img src="${src}" class="${cssClass}" onerror="this.style.display='none'">`;
}


// Obs: o áudio (MP3 + chiptune 8-bit) vive todo em js/duvid-audio.js.
// Aqui só chamamos os ganchos: playSomCombo() e playSomDica().


document.addEventListener('DOMContentLoaded', () => {
    const params = new URLSearchParams(window.location.search);
    const id = params.get('id');

    if (id) {
        aulaID = id;

        // 1. Garante que o ID e o banco existam
        if (typeof verificarStatusAula === "function") verificarStatusAula(id);

        // 2. Carrega as perguntas
        carregarDados(id);

        // 3. Inicializa card de recursos (ativa link da aula se houver)
        _inicializarRecursos();

        // 4. Carrega assuntos mais errados (histórico do aluno)
        _carregarAssuntosMaisErrados();

        // --- O PULO DO GATO AQUI ---
        // 3. Zera os ganhos da aula atual (Nota Branca)
        window.ganhosAtuais = 0;

        DuvidUI.atualizarInterface();

        // Dentro do seu DOMContentLoaded das questões
        setTimeout(() => {
            if (typeof atualizarInterface === "function") atualizarInterface();
        }, 100);
        // ---------------------------
    }
});

async function carregarDados(id) {
    try {
        const anoPasta = id.startsWith('1') ? '1ano' : id.startsWith('2') ? '2ano' : '3ano';
        const url = `/questoes/${anoPasta}/${id}.json`;

        const dadosBrutos = await DuvidCache.get(url); // << NOVO

        // Embaralha uma cópia — não o original cacheado
        questoes = embaralharArray([...dadosBrutos]); // << spread para não mutar o cache
        emRevisao = false; // início normal: pontua por questão
        _preencherPainelEsquerdo(dadosBrutos, id); // monta o painel antes de renderizar
        inicializarCoracoes();
        renderizarQuestao(); // agora _atualizarVestibular() encontra o elemento
        configurarSEOAutomatico(id, 'questao');

    } catch (error) {
        console.error("Erro ao carregar questões:", error);
        document.getElementById('container-questao').innerHTML = "Erro ao carregar questões.";
    }
}





function embaralharArray(array) {
    for (let i = array.length - 1; i > 0; i--) {
        const j = Math.floor(Math.random() * (i + 1));
        [array[i], array[j]] = [array[j], array[i]];
    }
    return array;
}

// --- FUNÇÃO PRINCIPAL ---
function renderizarQuestao() {
    const q = questoes[indiceAtual];
    const container = document.getElementById('container-questao');
    if (!container || !q) return;

    // Progresso
    const porc = ((indiceAtual + 1) / questoes.length) * 100;
    const progressBarr = document.getElementById('barra-progresso-simulado');
    if (progressBarr) progressBarr.style.width = `${porc}%`;

    // Atualiza vestibular no card missão (varia por questão quando JSON é misto)
    _atualizarVestibular(q);

    // Montagem do Layout usando as funções separadas
    container.innerHTML = `
        <div class="question-card">

            ${gerarHeader(q, indiceAtual)}

            ${gerarInfoInstituicao(q)}

            ${gerarTags(q.tags)}

            ${gerarBlocoApoio(q)}

            ${gerarImagemApoio(q)}

            <p class="quest-pergunta">${q.pergunta}</p>

            ${gerarBotaoDica(q)}

            <div class="grupo-respostas">
                ${gerarAlternativas(q.alternativas)}
            </div>

            <button onclick="verificar()" id="btn-verificar" class="btn-acao-duvid">
                VERIFICAR RESPOSTA
            </button>

            <div id="quest-feedback-inline" class="quest-feedback"></div>
        </div>
    `;

    if (typeof inicializarControleFonte === "function") inicializarControleFonte();

    // Avisa a sidebar que o conteúdo mudou de altura
    window.dispatchEvent(new Event('resize'));
}


// 1. Função para o Título e Nível (corações ficam na barra de progresso)
const gerarHeader = (q, indice) => `
    <div class="duvid-header-questao">
        <h4 class="duvid-titulo-questao">Questão ${indice + 1}</h4>
        <span class="duvid-badge-dificuldade ${definirClasseDificuldade(q.dificuldade)}">
            NÍVEL: ${q.dificuldade || 'MÉDIO'}
        </span>
    </div>
`;

// Inicializa os corações na barra de progresso (chamado 1x ao carregar)
function inicializarCoracoes() {
    const container = document.getElementById('quest-coracoes-header');
    if (!container) return;
    container.innerHTML = gerarCoracoes();
}

// Função auxiliar que gera os corações com base no estado atual
const gerarCoracoes = () => {
    let html = '';
    for (let i = 0; i < TOTAL_VIDAS; i++) {
        const perdido = i >= vidas;
        html += `<span class="coracao-questao ${perdido ? 'perdido' : ''}">❤️</span>`;
    }
    return html;
};

// 2. Função para Instituição e Ano (Com o padding solicitado)
const gerarInfoInstituicao = (q) => `
    <div class="duvid-info-instituicao">
        <span class="w3-text-grey w3-small"><b>${q.instituicao || ''} ${q.ano || ''}</b></span>
    </div>
`;

// 3. Função para o Botão de Dica
const gerarBotaoDica = (q) => {
    if (!q.ajuda) return '';
    return `
        <div class="w3-center w3-margin-top w3-margin-bottom">
            <button onclick="mostrarDica()" class="w3-button w3-light-grey w3-text-teal w3-round-large w3-small w3-border">
                💡 <b>DICA DO PROFESSOR</b>
            </button>
        </div>
    `;
};

// Função auxiliar para a cor da dificuldade
const definirClasseDificuldade = (dif) => {
    const d = (dif || 'médio').toLowerCase();
    if (d.includes('fácil') || d.includes('facil')) return 'dificuldade-facil';
    if (d.includes('difícil') || d.includes('dificil')) return 'dificuldade-dificil';
    return 'dificuldade-medio';
};

const gerarTags = (tags) => {
    if (!tags || tags.length === 0) return '';
    const badges = tags.map(tag => `<span class="duvid-tag-assunto">#${tag}</span>`).join('');
    return `<div class="container-tags">${badges}</div>`; // Usando a nova classe aqui
};

// Funções auxiliares para manter a função principal limpa
const gerarBlocoApoio = (q) => {
    if (!q.texto_apoio) return '';

    // .trim() remove os espaços vazios invisíveis do começo e do fim
    const textoLimpo = q.texto_apoio.trim();

    return `
    <div class="duvid-bloco-apoio">
        <div class="duvid-texto-citacao">${textoLimpo}</div>

        ${q.fonte_apoio ? `
            <div class="duvid-fonte-texto">
                — ${q.fonte_apoio}
            </div>` : ''}
    </div>`;
};

const gerarImagemApoio = (q) => {
    if (!q.imagem_apoio) return '';

    const criarBloco = (img, legenda) => `
            <div class="w3-center">
                <div class="duvid-img-container">
                    <img src="${img}" class="duvid-img-principal" alt="Apoio Pedagógico">
                    
                    ${legenda ? `
                        <div class="duvid-legenda-box">
                            <p class="duvid-legenda-texto">
                                ${legenda}
                            </p>
                        </div>` : ''}
                </div>
            </div>
        `;

    let htmlFinal = criarBloco(q.imagem_apoio, q.legenda_imagem);

    if (q.imagem_apoio_2) {
        htmlFinal += criarBloco(q.imagem_apoio_2, q.legenda_imagem_2);
    }

    return htmlFinal;
};

const gerarAlternativas = (alternativas) => alternativas.map((alt, i) => `
        <div class="item-resposta">
            <input type="radio" name="opcao" id="opt${i}" value="${i}" class="radio-duvid">
            <label for="opt${i}" class="card-opcao">
                <span class="option-badge">${String.fromCharCode(97 + i)}</span>
                <span class="option-text">${alt}</span>
            </label>
        </div>`).join('');






// FUNÇÃO PARA EXIBIR A DICA
function mostrarDica() {
    const q = questoes[indiceAtual];
    if (!q.ajuda) return;

    // Chiptune: blip curioso ao abrir a dica do professor
    if (typeof playSomDica === 'function') playSomDica();

    let painelDica = document.getElementById('painel-dica-container');

    if (!painelDica) {
        // Encontra o container do botão de dica
        const btnDica = document.querySelector('button[onclick="mostrarDica()"]').parentNode;

        btnDica.insertAdjacentHTML('afterend', `
                <div id="painel-dica-container" class="w3-animate-opacity">
                    <div class="duvid-painel-dica w3-card-2">
                        <button onclick="this.parentElement.parentElement.style.display='none'" 
                                class="duvid-dica-fechar">&times;</button>
                        
                        ${_gifInlineHtml('duvida')}
                        <h5 class="duvid-dica-titulo">
                            <i class="fa fa-lightbulb-o"></i> <b>Vamos analisar...</b>
                        </h5>
                        
                        <p class="w3-small" id="texto-dica-conteudo"></p>
                    </div>
                </div>
            `);
        painelDica = document.getElementById('painel-dica-container');
    }

    // Injeta o texto e exibe
    document.getElementById('texto-dica-conteudo').innerText = q.ajuda;
    painelDica.style.display = 'block';

    // Scroll suave
    painelDica.scrollIntoView({ behavior: 'smooth', block: 'nearest' });
}


function verificar() {
    const selecionada = document.querySelector('input[name="opcao"]:checked');
    const btnVerificar = document.getElementById('btn-verificar');

    if (!selecionada) {
        avisoSelecaoPendente(btnVerificar);
        return;
    }

    const resp = parseInt(selecionada.value);
    const q = questoes[indiceAtual];
    const isCorreto = (resp === q.correta);

    if (isCorreto) {
        // ACERTO — mostra resposta correta normalmente
        DuvidUI.estilizarResultadoQuestao(resp, q.correta);
        combo++;
        errosSeguidos = 0;
        const ehMarcoCombo = COMBO_NIVEIS.some(n => n.minimo === combo);
        const nivelCombo = COMBO_NIVEIS.find(n => combo >= n.minimo);
        const bonusCombo = nivelCombo ? nivelCombo.bonus : 0;
        // No marco de combo (3/5/7) toca SÓ a fanfarra chiptune: suprime o MP3
        // de acerto para os dois não soarem juntos. Fora do marco, MP3 normal.
        // Na revisão das erradas não re-pontua por questão (evita farm de globinhos)
        const pontosQuestao = emRevisao ? 0 : PONTOS_POR_QUESTAO + bonusCombo;
        DuvidUI.executarGatilhoResultado(true, pontosQuestao, { semSomAcerto: ehMarcoCombo });
        if (ehMarcoCombo) playSomCombo();
        nota++;
    } else {
        // ERRO — não revela a resposta, só some as alternativas
        combo = 0;
        errosSeguidos++;
        if (errosSeguidos >= 3) {
            window.dispatchEvent(new CustomEvent('duvid:suporte', {
                detail: { msg: getFraseSuporteGlobinho() }
            }));
            errosSeguidos = 0;
        }
        questoesErradas.push(q);
        perderVida();
        DuvidUI.executarGatilhoResultado(false, 0);

        // Esmaece todas as alternativas sem marcar a correta
        document.querySelectorAll('.item-resposta').forEach(item => {
            item.style.opacity = '0.3';
            item.style.filter = 'grayscale(1)';
            const radio = item.querySelector('input');
            if (radio) radio.disabled = true;
        });
    }

    exibirPainelFeedback(isCorreto, q, resp);
    if (btnVerificar) btnVerificar.disabled = true;
    // scroll tratado dentro de exibirPainelFeedback()

    DuvidUI.atualizarInterface();
    _atualizarPlacar();
}

function perderVida() {
    if (vidas <= 0) return;
    vidas--;

    // Atualiza corações já renderizados
    const coracoes = document.querySelectorAll('.coracao-questao');
    coracoes.forEach((c, i) => {
        if (i >= vidas) c.classList.add('perdido');
    });

    // Shake no container
    const container = document.querySelector('.duvid-coracoes-container');
    if (container) {
        container.classList.add('shake-erro');
        setTimeout(() => container.classList.remove('shake-erro'), 500);
    }

    // Aviso contextual
    const aviso = document.getElementById('aviso-vidas-questao');
    if (aviso) {
        aviso.innerText = vidas === 1 ? '❗ Última vida!' : '';
        aviso.style.display = vidas <= 1 ? 'inline' : 'none';
    }
}




// Feedback inline (logo abaixo das alternativas, dentro do .question-card)
function exibirPainelFeedback(isCorreto, questao, indiceSelecionado) {
    const feedback = document.getElementById('quest-feedback-inline');
    if (!feedback) return;

    const q = questoes[indiceAtual];
    const numQuestao = q ? (q.num || (indiceAtual + 1)) : (indiceAtual + 1);

    let conteudo = '';

    if (isCorreto) {
        const nivelCombo = COMBO_NIVEIS.find(n => combo >= n.minimo);
        const badgeCombo = nivelCombo
            ? `<div class="duvid-combo-badge">${nivelCombo.nome} <span class="duvid-combo-bonus">+${nivelCombo.bonus} globinhos</span></div>`
            : '';
        mostrarGifAcerto();
        conteudo = `
            <p class="quest-feedback-title">✅ ${getFraseSucesso()}</p>
            ${badgeCombo}
            <div class="quest-feedback-body comentario-box">
                ${questao.comentario || ''}
                ${gerarImagemComentario(questao)}
            </div>`;
    } else {
        const textoFeedback =
            (questao.feedbacks && questao.feedbacks[String(indiceSelecionado)])
            || questao.ajuda
            || null;

        conteudo = `
            ${_gifInlineHtml('erro')}
            <p class="quest-feedback-title">🔍 ${getFraseAnalise()}</p>
            <div class="quest-feedback-body">
                ${textoFeedback
                    ? `<div class="duvid-painel-dica">
                           <h5 class="duvid-dica-titulo"><i class="fa fa-lightbulb"></i> Vamos analisar...</h5>
                           <p>${textoFeedback}</p>
                       </div>`
                    : `<p style="color:#888">Revise o conteúdo desta aula e tente novamente!</p>`
                }
            </div>`;
    }

    conteudo += `
        <div style="text-align:center">
            <button onclick="abrirModalReporte(${numQuestao})" class="btn-melhorar-aula">
                ✍️ Melhorar esta questão
            </button>
        </div>
        <button onclick="proxima()" class="btn-continuar">CONTINUAR →</button>
    `;

    feedback.innerHTML = conteudo;
    feedback.className = `quest-feedback ${isCorreto ? 'acerto' : 'erro'} visible`;

    // Scroll suave até o feedback
    setTimeout(() => {
        feedback.scrollIntoView({ behavior: 'smooth', block: 'nearest' });
    }, 100);
}

// ── Modal de reporte ──────────────────────────────────────────
function abrirModalReporte(questaoNum) {
    const existing = document.getElementById('modal-reporte');
    if (existing) existing.remove();

    const modal = document.createElement('div');
    modal.id = 'modal-reporte';
    modal.style.cssText = 'position:fixed;inset:0;background:rgba(0,0,0,.5);z-index:9999;display:flex;align-items:center;justify-content:center;padding:16px';
    modal.innerHTML = `
        <div style="background:#fff;border-radius:12px;padding:24px;max-width:420px;width:100%;box-shadow:0 8px 32px rgba(0,0,0,.2)">
            <h4 style="margin:0 0 4px">✍️ Sua contribuição importa</h4>
            <p style="margin:0 0 16px;color:#666;font-size:.875rem">Questão ${questaoNum} — encontrou algo que pode melhorar? Nos conta, você faz parte disso.</p>

            <label style="font-size:.875rem;font-weight:bold">Tipo de problema:</label>
            <select id="reporte-tipo" style="width:100%;margin:6px 0 14px;padding:8px;border:1px solid #ddd;border-radius:6px;font-size:.875rem">
                <option value="gabarito">❌ Gabarito errado</option>
                <option value="ortografia">✏️ Erro de ortografia/digitação</option>
                <option value="confusa">🤔 Questão confusa ou mal formulada</option>
                <option value="imagem">🖼️ Problema com imagem</option>
                <option value="outro">💬 Outro</option>
            </select>

            <label style="font-size:.875rem;font-weight:bold">Detalhes (opcional):</label>
            <textarea id="reporte-msg" rows="3" maxlength="500"
                placeholder="Descreva o problema..."
                style="width:100%;margin:6px 0 16px;padding:8px;border:1px solid #ddd;border-radius:6px;font-size:.875rem;resize:vertical;box-sizing:border-box"></textarea>

            <div style="display:flex;gap:8px;justify-content:flex-end">
                <button onclick="document.getElementById('modal-reporte').remove()"
                        style="padding:8px 16px;border:1px solid #ddd;border-radius:6px;background:#fff;cursor:pointer;font-size:.875rem">
                    Cancelar
                </button>
                <button onclick="enviarReporte(${questaoNum})"
                        id="btn-enviar-reporte"
                        style="padding:8px 20px;border:none;border-radius:6px;background:#4caf50;color:#fff;font-weight:bold;cursor:pointer;font-size:.875rem">
                    Enviar
                </button>
            </div>
            <p id="reporte-status" style="margin:8px 0 0;font-size:.8125rem;text-align:center;display:none"></p>
        </div>
    `;
    document.body.appendChild(modal);
    modal.addEventListener('click', e => { if (e.target === modal) modal.remove(); });
}

async function enviarReporte(questaoNum) {
    const tipo     = document.getElementById('reporte-tipo').value;
    const mensagem = document.getElementById('reporte-msg').value.trim();
    const status   = document.getElementById('reporte-status');
    const btn      = document.getElementById('btn-enviar-reporte');

    btn.disabled = true;
    btn.textContent = 'Enviando...';

    try {
        const aulaIdReporte = aulaID || window._simuladoProva || '';
        const res = await fetch('/api/reporte.php', {
            method: 'POST',
            headers: { 'Content-Type': 'application/json' },
            body: JSON.stringify({ aula_id: aulaIdReporte, questao_num: questaoNum, tipo, mensagem })
        });
        const data = await res.json();
        status.style.display = 'block';
        if (data.ok) {
            status.style.color = '#2e7d32';
            status.textContent = '✅ Obrigado! Vamos verificar em breve.';
            setTimeout(() => document.getElementById('modal-reporte')?.remove(), 2000);
        } else {
            status.style.color = '#c62828';
            status.textContent = data.erro || 'Erro ao enviar. Tente novamente.';
            btn.disabled = false;
            btn.textContent = 'Enviar';
        }
    } catch {
        status.style.display = 'block';
        status.style.color = '#c62828';
        status.textContent = 'Erro de conexão. Tente novamente.';
        btn.disabled = false;
        btn.textContent = 'Enviar';
    }
}

const gerarImagemComentario = (q) => {
    if (!q.imagem_comentario) return '';

    return `
        <div class="duvid-container-comentario">
            <img src="${q.imagem_comentario}" class="duvid-img-comentario" alt="Reforço Visual">
            ${q.legenda_comentario ? `
                <div class="duvid-legenda-box">
                    <p class="duvid-legenda-texto"><i>${q.legenda_comentario}</i></p>
                </div>` : ''}
        </div>
    `;
};



function scrollSuaveFeedback() {
    setTimeout(() => {
        const feedbackTxt = document.getElementById('feedback-txt');
        if (feedbackTxt) feedbackTxt.scrollIntoView({ behavior: 'smooth', block: 'center' });
    }, 300);
}




function proxima() {
    // feedback inline some automaticamente com a próxima renderização
    indiceAtual++;

    // Vidas NÃO resetam aqui — carregam durante toda a sessão
    // Só resetam ao tentar novamente (no finalizar)

    window.scrollTo({ top: 0, behavior: 'smooth' });

    if (indiceAtual < questoes.length) {
        renderizarQuestao();
    } else {
        finalizar();
    }
}

function finalizar() {
    const total = questoes.length;
    const acertos = nota;
    const aprovado = (acertos / total) >= 0.6;
    const ganhouBonus = aprovado && vidas === TOTAL_VIDAS; // << vidas intactas


    // 1. Persistência
    if (typeof DuvidDB !== "undefined" && aulaID) {
        if (aprovado) {
            const jaConcluiu = DuvidDB.estaConcluido(aulaID, TIPO_CONCLUSAO.QUESTOES);

            // salvarConclusao já envia RECOMPENSA_QUESTOES + bonus ao banco.
            // addGlobinhos separado causaria dupla contagem.
            const bonusAdicional = ganhouBonus ? BONUS_VIDAS : 0;
            DuvidDB.salvarConclusao(aulaID, TIPO_CONCLUSAO.QUESTOES, bonusAdicional);
        }
    }

    // 1b. Registra as questões erradas desta tentativa (diagnóstico do professor).
    //     Enviado em toda tentativa real (não na revisão), passando ou não —
    //     justamente quem reprova é quem mais erra.
    if (!emRevisao && typeof DuvidDB !== "undefined" && aulaID) {
        var alunoIdResp = DuvidDB._getAlunoId();
        if (alunoIdResp) {
            var erradasPayload = questoesErradas.map(function (q) {
                return {
                    pergunta: q.pergunta,
                    correta: (q.alternativas && q.alternativas[q.correta]) || ''
                };
            });
            fetch('/api/respostas.php', {
                method: 'POST',
                headers: { 'Content-Type': 'application/json' },
                body: JSON.stringify({
                    aluno_id: alunoIdResp,
                    aula_id:  aulaID,
                    total:    total,
                    acertos:  acertos,
                    erradas:  erradasPayload
                })
            }).catch(function () {});
        }
    }

    // 2. Modal
    if (typeof DuvidUI !== "undefined") {
        DuvidUI.exibirModalSimulado(aprovado, acertos, total, ganhouBonus, questoesErradas.length);
    }
}

// Função global chamada pelo botão do modal
function iniciarRevisao() {
    const erradas = [...questoesErradas]; // cópia para não mutar
    questoesErradas = [];                 // limpa para a próxima rodada

    // Reseta tudo como o tentarNovamente, mas com baralho menor
    indiceAtual = 0;
    nota = 0;
    vidas = TOTAL_VIDAS;
    combo = 0;
    emRevisao = true;                     // revisão: não re-pontua por questão
    questoes = embaralharArray(erradas);
    inicializarCoracoes();

    const modal = document.getElementById('id01');
    if (modal) modal.style.display = 'none';

    window.scrollTo({ top: 0, behavior: 'smooth' });
    renderizarQuestao();
}

// Preenche o card "Missão" no painel direito
function _preencherPainelEsquerdo(dados, id) {
    const painel = document.getElementById('quest-info-aula');
    if (!painel) return;

    const total = dados.length;

    // Verifica se todas as questões são da mesma instituição
    const instancias = [...new Set(dados.map(q => (q.instituicao || '').trim()))];
    const todasIguais = instancias.length === 1;
    const instGeral = todasIguais ? instancias[0] : null;

    // Label inicial (pode ser "Variado" se misturado)
    let vestibular;
    if (todasIguais) {
        const inst = instGeral;
        const ano  = (dados[0].ano || '').trim();
        if (!inst && !ano) {
            vestibular = id.startsWith('1') ? '1º Ano' : id.startsWith('2') ? '2º Ano' : '3º Ano';
        } else if (!inst) {
            vestibular = ano;
        } else if (!ano) {
            vestibular = inst;
        } else if (ano.toUpperCase().includes(inst.toUpperCase())) {
            vestibular = ano;
        } else {
            vestibular = `${inst} ${ano}`;
        }
    } else {
        vestibular = 'Variado'; // atualiza por questão via _atualizarVestibular()
    }

    painel.innerHTML = `
        <div class="qp-missao-info">
            <span class="qp-vestibular" id="qp-vestibular-label">${vestibular}</span>
            <span class="qp-total">${total} questões</span>
        </div>
        <div class="qp-placar-divider"></div>
        <div class="qp-placar" id="qp-placar-vivo">
            <div class="qp-stat" id="qp-stat-acertos">
                <span class="qp-stat-icon">✅</span>
                <span class="qp-stat-val" id="qp-val-acertos">0</span>
                <span class="qp-stat-label">acertos</span>
            </div>
            <div class="qp-stat" id="qp-stat-erros">
                <span class="qp-stat-icon">❌</span>
                <span class="qp-stat-val" id="qp-val-erros">0</span>
                <span class="qp-stat-label">erros</span>
            </div>
            <div class="qp-stat" id="qp-stat-combo">
                <span class="qp-stat-icon">🔥</span>
                <span class="qp-stat-val" id="qp-val-combo">0</span>
                <span class="qp-stat-label">combo</span>
            </div>
            <div class="qp-stat" id="qp-stat-globinhos">
                <span class="qp-stat-icon">🌍</span>
                <span class="qp-stat-val" id="qp-val-globinhos">0</span>
                <span class="qp-stat-label">globinhos</span>
            </div>
        </div>
    `;
}

// Atualiza o label do vestibular no card missão (chamado a cada questão)
function _atualizarVestibular(q) {
    const el = document.getElementById('qp-vestibular-label');
    if (!el || !q) return;
    const inst = (q.instituicao || '').trim();
    const ano  = (q.ano || '').trim();
    let label;
    if (!inst && !ano)                              label = '—';
    else if (!inst)                                 label = ano;
    else if (!ano)                                  label = inst;
    else if (ano.toUpperCase().includes(inst.toUpperCase())) label = ano;
    else                                            label = `${inst} ${ano}`;
    el.textContent = label;
}

// ── Card DESEMPENHO ────────────────────────────────────────────────────────
let _chartDesempenho = null;
// Histórico de sessões (máx. 6) para as barras de evolução
let _evoHistorico = [];

function _atualizarDesempenho(acertos, erros) {
    const total = acertos + erros;
    const pct   = total > 0 ? Math.round((acertos / total) * 100) : null;

    // Pill badge no header: "75% ACERTO"
    const pill = document.getElementById('qp-desemp-pill');
    if (pill) {
        pill.textContent = pct !== null ? pct + '% ACERTO' : '—';
        pill.className   = 'qp-desemp-pill';
        if (pct !== null) {
            if      (pct < 40) pill.classList.add('qp-desemp-pill--red');
            else if (pct < 70) pill.classList.add('qp-desemp-pill--orange');
        }
    }

    // % dentro do doughnut (overlay)
    const pctOverlay = document.getElementById('qp-desemp-pct');
    if (pctOverlay) pctOverlay.textContent = pct !== null ? pct + '%' : '—';

    // Barra ativa de evolução (a última — altura = % da sessão atual)
    const bars = document.querySelectorAll('#qp-evolucao-bars .qp-evo-bar');
    if (bars.length) {
        const last = bars[bars.length - 1];
        last.style.height = (pct !== null ? Math.max(pct, 5) : 10) + '%';
    }

    // Doughnut Chart.js 90×90
    const canvas = document.getElementById('qp-desemp-canvas');
    if (!canvas || typeof Chart === 'undefined') return;

    const data   = total > 0 ? [acertos, erros]         : [1, 0];
    const colors = total > 0 ? ['#2e7d32', '#e57373']   : ['#e0e0e0', 'transparent'];

    if (_chartDesempenho) {
        _chartDesempenho.data.datasets[0].data            = data;
        _chartDesempenho.data.datasets[0].backgroundColor = colors;
        _chartDesempenho.update('none');
    } else {
        _chartDesempenho = new Chart(canvas, {
            type: 'doughnut',
            data: { datasets: [{ data, backgroundColor: colors, borderWidth: 0 }] },
            options: {
                cutout: '68%',
                responsive: false,
                animation: { duration: 250 },
                plugins: { legend: { display: false }, tooltip: { enabled: false } }
            }
        });
    }
}

// ── Assuntos mais errados (histórico via API) ─────────────────────────────
async function _carregarAssuntosMaisErrados() {
    const container = document.getElementById('qp-heatmap');
    if (!container) return;

    try {
        const res = await fetch('/api/desempenho-aluno.php');
        if (!res.ok) { container.innerHTML = '<span class="qp-hm-vazio">—</span>'; return; }
        const data = await res.json();
        const aulas = data.aulas || [];

        if (aulas.length === 0) {
            container.innerHTML = '<span class="qp-hm-vazio">Sem erros recentes 🎉</span>';
            return;
        }

        const itens = await Promise.all(aulas.map(async function(row) {
            var aid = String(row.aula_id);
            var ano = aid.charAt(0);
            var titulo = 'Aula ' + aid;
            if (['1','2','3'].indexOf(ano) !== -1) {
                try {
                    var lista = await DuvidCache.get('/js/aulas-' + ano + 'ano.json');
                    var found = lista.find(function(a) { return String(a.id) === aid; });
                    if (found && found.titulo) titulo = found.titulo;
                } catch(e) {}
            }
            var erros   = parseInt(row.erros) || 0;
            var dotCls  = erros >= 3 ? 'qp-hm-dot--red'    : erros >= 2 ? 'qp-hm-dot--orange'  : 'qp-hm-dot--yellow';
            var errCls  = erros >= 3 ? ''                   : erros >= 2 ? 'qp-hm-erros--orange' : 'qp-hm-erros--yellow';
            var label   = erros === 1 ? '1 erro' : erros + ' erros';
            return '<div class="qp-hm-item">' +
                '<span class="qp-hm-dot ' + dotCls + '"></span>' +
                '<span class="qp-hm-titulo">' + titulo + '</span>' +
                '<span class="qp-hm-erros ' + errCls + '">' + label + '</span>' +
                '</div>';
        }));

        container.innerHTML = itens.join('');

    } catch(e) {
        var c = document.getElementById('qp-heatmap');
        if (c) c.innerHTML = '<span class="qp-hm-vazio">—</span>';
    }
}

// ── Card RECURSOS — ativa "Aula relacionada" quando há linkTexto no JSON ──
async function _inicializarRecursos() {
    const el = document.getElementById('recurso-aula');
    if (!el || !aulaID) return;

    // Descobre o ano pelo prefixo do ID (101–134 → 1, 201–234 → 2, 301–334 → 3)
    const ano = String(aulaID).charAt(0);
    if (!['1','2','3'].includes(ano)) return;

    try {
        const aulas = await DuvidCache.get('/js/aulas-' + ano + 'ano.json');
        const aula  = aulas.find(function(a) { return String(a.id) === String(aulaID); });
        if (aula && aula.linkTexto) {
            el.href = '/' + aula.linkTexto;
            el.classList.remove('qp-recurso--inativo');
        }
    } catch (e) { /* sem link, fica inativo */ }
}

// Atualiza o placar ao vivo após cada resposta
function _atualizarPlacar() {
    const erros    = questoesErradas.length;
    const acertos  = nota;
    const comboAtual = combo;
    const globinhos  = acertos * PONTOS_POR_QUESTAO + COMBO_NIVEIS.reduce((acc, n) => {
        return combo >= n.minimo ? Math.max(acc, n.bonus) : acc;
    }, 0);

    const set = (id, val) => { const el = document.getElementById(id); if (el) el.textContent = val; };
    set('qp-val-acertos',  acertos);
    set('qp-val-erros',    erros);
    set('qp-val-combo',    comboAtual);
    set('qp-val-globinhos', Math.floor(window.ganhosAtuais || acertos * PONTOS_POR_QUESTAO));

    // Destaca combo ativo
    const statCombo = document.getElementById('qp-stat-combo');
    if (statCombo) {
        statCombo.classList.toggle('qp-stat--combo-ativo', comboAtual >= 3);
    }

    // Atualiza card de desempenho ao vivo
    _atualizarDesempenho(acertos, erros);
}

function tentarNovamente() {
    // Reseta tudo para uma sessão nova limpa
    indiceAtual = 0;
    nota = 0;
    vidas = TOTAL_VIDAS;
    combo = 0;
    questoesErradas = [];
    emRevisao = false;            // sessão nova pontua normalmente
    inicializarCoracoes();

    // Fecha o modal
    const modal = document.getElementById('id01');
    if (modal) modal.style.display = 'none';

    // Reembaralha — aluno não vê as mesmas questões na mesma ordem
    questoes = embaralharArray([...questoes]);

    window.scrollTo({ top: 0, behavior: 'smooth' });
    renderizarQuestao();
}
// --- FUNÇÕES AUXILIARES (As peças de baixo nível) ---

