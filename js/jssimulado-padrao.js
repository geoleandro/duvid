/* =====================================================================
   jssimulado-padrao.js  —  Módulo de SIMULADOS (Duvid Geografia)
   ---------------------------------------------------------------------
   Reaproveita TODO o motor de js/jsquestoes-padrao.js (renderizarQuestao,
   embaralharArray, verificar, feedbacks, sistema de vidas/combo, etc.).
   A única diferença é a ORIGEM das questões: em vez da pasta de ano
   (/questoes/1ano/...), carrega um banco de simulado a partir de
   /simulados/bancos/<prova>.json, lido pelo parâmetro ?prova= da URL.

   Parâmetros de URL suportados:
     ?prova=enem2024-geografia   → arquivo JSON a carregar
     ?qtd=10                     → limitar a N questões (0 = todas)

   IMPORTANTE: este script deve ser incluído DEPOIS de jsquestoes-padrao.js,
   pois usa as variáveis e funções globais declaradas lá.
   ===================================================================== */

document.addEventListener('DOMContentLoaded', () => {
    const params = new URLSearchParams(window.location.search);
    const prova  = params.get('prova');
    const qtd    = Math.max(0, parseInt(params.get('qtd')) || 0);

    // Sem ?prova= a página não faz nada (deixa o motor das aulas em paz).
    if (!prova) return;

    carregarSimulado(prova, qtd);
});

async function carregarSimulado(prova, qtd = 0) {
    const container = document.getElementById('container-questao');

    try {
        // Sanitiza o nome do arquivo (evita ../ e barras) e monta a URL.
        const nomeArquivo = prova.replace(/[^a-zA-Z0-9_-]/g, '');
        const url = `/simulados/bancos/${nomeArquivo}.json`;

        // Usa o cache do site quando disponível; senão, fetch direto.
        let dadosBrutos;
        if (typeof DuvidCache !== "undefined" && typeof DuvidCache.get === "function") {
            dadosBrutos = await DuvidCache.get(url);
        } else {
            const res = await fetch(url);
            if (!res.ok) throw new Error(`HTTP ${res.status} ao buscar ${url}`);
            dadosBrutos = await res.json();
        }

        if (!Array.isArray(dadosBrutos) || dadosBrutos.length === 0) {
            throw new Error("Banco de questões vazio ou inválido.");
        }

        // --- Reset do estado global do motor (declarado em jsquestoes-padrao.js) ---
        aulaID = "";                 // vazio => finalizar() NÃO grava progresso de aula
        indiceAtual = 0;
        nota = 0;
        if (typeof TOTAL_VIDAS !== "undefined") vidas = TOTAL_VIDAS;
        combo = 0;
        questoesErradas = [];
        window.ganhosAtuais = 0;

        // Embaralha uma CÓPIA (não muta o cache) — mesmo padrão das aulas.
        questoes = embaralharArray([...dadosBrutos]);

        // Fatia pela quantidade solicitada (0 = todas).
        if (qtd > 0 && qtd < questoes.length) {
            questoes = questoes.slice(0, qtd);
        }

        // Extrai vestibular e ano do nome do arquivo (ex: "enem2024-geografia" → "ENEM", "2024")
        const match      = nomeArquivo.match(/^([a-zA-Z]+)(\d{4})/);
        const vestibular = match ? match[1].toUpperCase() : nomeArquivo;
        const ano        = match ? match[2] : '';

        // Override de finalizar(): chama o original + salva resultado via API.
        // Funciona porque function declarations em escopo global viram window.X,
        // e proxima() resolve finalizar() via lookup de escopo global.
        const _finalizarBase = window.finalizar;
        window.finalizar = function () {
            _finalizarBase();
            _salvarResultadoSimulado(vestibular, ano);
        };

        renderizarQuestao();

        if (typeof DuvidUI !== "undefined" && typeof DuvidUI.atualizarInterface === "function") {
            DuvidUI.atualizarInterface();
        }
        if (typeof configurarSEOAutomatico === "function") {
            configurarSEOAutomatico(nomeArquivo, 'questao');
        }

    } catch (error) {
        console.error("Erro ao carregar simulado:", error);
        if (container) {
            container.innerHTML = `
                <div class="w3-panel w3-pale-red w3-leftbar w3-border-red w3-padding">
                    <p><b>Não foi possível carregar este simulado.</b></p>
                    <p class="w3-small">Verifique se o arquivo do banco existe em
                    <code>/simulados/bancos/</code> e tente novamente.</p>
                </div>`;
        }
    }
}

/* -----------------------------------------------------------------
   _salvarResultadoSimulado()
   Chamado após finalizar() — salva o resultado e concede globinhos
   de conclusão (acertos × 2) via /api/respostas-simulado.php.
   Falhas são silenciosas para não interromper a UX do resultado.
   ----------------------------------------------------------------- */
async function _salvarResultadoSimulado(vestibular, ano) {
    const alunoId = (typeof DuvidDB !== 'undefined') ? DuvidDB.getId() : null;
    if (!alunoId) return; // Aluno não logado — sem salvar.

    try {
        const res = await fetch('/api/respostas-simulado.php', {
            method: 'POST',
            headers: { 'Content-Type': 'application/json' },
            body: JSON.stringify({
                aluno_id:   alunoId,
                vestibular: vestibular,
                ano:        ano,
                acertos:    nota,
                total:      questoes.length
            })
        });

        if (!res.ok) return;
        const data = await res.json();

        // Reconcilia o saldo de globinhos com o valor autoritativo do banco.
        if (data.novo_total !== undefined && typeof DuvidDB !== 'undefined') {
            DuvidDB._reconciliar(data.novo_total);
        }
        if (typeof DuvidUI !== 'undefined' && typeof DuvidUI.atualizarInterface === 'function') {
            DuvidUI.atualizarInterface();
        }

    } catch (e) {
        console.warn('[Simulado] Não foi possível salvar resultado:', e);
    }
}
