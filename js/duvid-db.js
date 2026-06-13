// =============================================================
//  duvid-db.js  —  v2.0  (Híbrido localStorage + MySQL)
//
//  ESTRATÉGIA DE MIGRAÇÃO (sem quebrar nada):
//  • Leituras síncronas continuam via cache/localStorage
//    → todos os callers existentes funcionam sem alteração
//  • Escritas vão para localStorage IMEDIATAMENTE (UI não trava)
//    e para a API PHP em background (banco é a fonte da verdade)
//  • Na inicialização (DOMContentLoaded) sincroniza banco → local
//    → se o aluno usou outro dispositivo, os dados voltam
// =============================================================

// --- CONSTANTES (iguais à v1 — não alterar) ---
const DB_CHAVE       = "duvid_globinhos";
const NOME_CHAVE     = "duvid_nome";
const PATENTE_CHAVE  = "duvid_patente";
const NIVEL_CHAVE    = "duvid_lvl";
const ALUNO_ID_CHAVE = "duvid_aluno_id";   // << NOVO: id do banco

const RECOMPENSA_TEXTO    = 10;
const RECOMPENSA_QUESTOES = 10;
const RECOMPENSA_GERAL    = 20;
const TIPO_CONCLUSAO = { TEXTO: 'texto', QUESTOES: 'questoes' };

// Ajuste se o site estiver em subpasta (ex: '/duvid/api')
const API_BASE = '/api';

// =============================================================
const DuvidDB = {

    // Cache em memória — evita leituras repetidas no localStorage
    _cache: {
        globinhos:  null,
        conclusoes: null,
        alunoId:    null,
    },

    // ----------------------------------------------------------
    // INTERNO: retorna o id do aluno salvo no banco
    // ----------------------------------------------------------
    _getAlunoId: function () {
        if (this._cache.alunoId) return this._cache.alunoId;
        const id = parseInt(localStorage.getItem(ALUNO_ID_CHAVE));
        if (id) this._cache.alunoId = id;
        return id || null;
    },

    // ----------------------------------------------------------
    // INTERNO: POST genérico para a API, silencioso em caso de falha
    // ----------------------------------------------------------
    _post: function (endpoint, body) {
        return fetch(`${API_BASE}/${endpoint}`, {
            method:  'POST',
            headers: { 'Content-Type': 'application/json' },
            body:    JSON.stringify(body),
        }).then(r => r.json()).catch(() => null);
    },

    // ==========================================================
    //  NOME
    // ==========================================================
    getNome: function () {
        return localStorage.getItem(NOME_CHAVE) || "";
    },

    salvarNome: function (nome) {
        if (nome.trim() === "") return false;
        nome = nome.trim();
        localStorage.setItem(NOME_CHAVE, nome);

        // Cria/busca aluno no banco e salva o id localmente
        this._post('aluno.php', { nome })
            .then(dados => {
                if (!dados || !dados.id) return;
                this._cache.alunoId = dados.id;
                localStorage.setItem(ALUNO_ID_CHAVE, dados.id);

                // Banco prevalece se tiver mais globinhos
                // (aluno pode ter usado outro dispositivo)
                const local = this._cache.globinhos ?? parseInt(localStorage.getItem(DB_CHAVE) ?? 0);
                if (dados.globinhos > local) {
                    this._cache.globinhos = dados.globinhos;
                    localStorage.setItem(DB_CHAVE, dados.globinhos);
                    if (typeof atualizarInterface === "function") atualizarInterface();
                }
            });

        return true;
    },

    setNome: function (nome) { return this.salvarNome(nome); },

    // ==========================================================
    //  GLOBINHOS
    // ==========================================================
    getGlobinhos: function () {
        if (this._cache.globinhos === null) {
            const saldo = localStorage.getItem(DB_CHAVE);
            this._cache.globinhos = saldo ? parseInt(saldo) : 0;
        }
        return this._cache.globinhos;
    },

    addGlobinhos: function (quantidade) {
        // 1. Estado anterior (para detectar level-up)
        const saldoAnterior = this.getGlobinhos();
        const lvlAnterior   = this.getProgressoRPG().lvl;

        // 2. Soma local imediata (UI não trava)
        const novoSaldo = saldoAnterior + Number(quantidade);
        this._cache.globinhos = novoSaldo;
        localStorage.setItem(DB_CHAVE, novoSaldo);

        // 3. Feedback visual
        const progressoAtual = this.verificarConquistas();
        if (progressoAtual.lvl > lvlAnterior) {
            if (typeof playSomFinal     === "function") playSomFinal(true);
            if (typeof dispararComemoracao === "function") dispararComemoracao(true);
            this.exibirNotificacaoLevelUp(progressoAtual);
        } else {
            if (typeof playSom === "function") playSom('acerto');
        }

        window.ganhosAtuais = (window.ganhosAtuais || 0) + Number(quantidade);
        if (typeof atualizarInterface === "function") atualizarInterface();
    },

    // ==========================================================
    //  CONCLUSÕES
    // ==========================================================
    estaConcluido: function (idAula, tipo) {
        // Monta cache de conclusões uma única vez
        if (this._cache.conclusoes === null) {
            this._cache.conclusoes = {};
            for (let i = 0; i < localStorage.length; i++) {
                const chave = localStorage.key(i);
                if (chave && chave.startsWith('concluido_')) {
                    this._cache.conclusoes[chave] = localStorage.getItem(chave);
                }
            }
        }
        return this._cache.conclusoes[`concluido_${tipo}_${idAula}`] === "true";
    },

    salvarConclusao: function (idAula, tipo) {
        const chave = `concluido_${tipo}_${idAula}`;

        // 1. Cache e localStorage — imediato
        if (this._cache.conclusoes === null) this._cache.conclusoes = {};
        this._cache.conclusoes[chave] = "true";
        localStorage.setItem(chave, "true");

        // 2. Envia para o banco em background
        const alunoId = this._getAlunoId();
        console.log('[DuvidDB] salvarConclusao → alunoId:', alunoId, '| aulaId:', idAula, '| tipo:', tipo);
        if (alunoId) {
            this._post('progresso.php', { aluno_id: alunoId, aula_id: idAula, tipo })
                .then(dados => {
                    console.log('[DuvidDB] progresso.php resposta:', dados);
                    if (!dados || dados.ja_concluido) return;
                    if (dados.novo_total !== undefined) {
                        this._cache.globinhos = dados.novo_total;
                        localStorage.setItem(DB_CHAVE, dados.novo_total);
                        if (typeof atualizarInterface === "function") atualizarInterface();
                    }
                    if (dados.conquistas_novas && dados.conquistas_novas.length > 0) {
                        dados.conquistas_novas.forEach(c => this._exibirConquista(c));
                    }
                });
        } else {
            console.warn('[DuvidDB] salvarConclusao ignorado — aluno_id não encontrado no localStorage');
        }
    },

    // ==========================================================
    //  SISTEMA RPG
    // ==========================================================
    RANKING_SISTEMA: [
        { lvl: 1, patente: 'NOVATO',          min: 0,     max: 1000,  cor: '#9d9d9d' },
        { lvl: 2, patente: 'EXPLORADOR',       min: 1001,  max: 3500,  cor: '#4caf50' },
        { lvl: 3, patente: 'CARTÓGRAFO',       min: 3501,  max: 8000,  cor: '#2196f3' },
        { lvl: 4, patente: 'ESTRATEGISTA',     min: 8001,  max: 15000, cor: '#9c27b0' },
        { lvl: 5, patente: 'GEÓGRAFO SÊNIOR',  min: 15001, max: 20000, cor: '#ff9800' },
        { lvl: 6, patente: 'LENDA DA TERRA',   min: 20001, max: 99999, cor: '#f44336' },
    ],

    getProgressoRPG: function () {
        const saldo = this.getGlobinhos();
        const idx   = this.RANKING_SISTEMA.findIndex(r => saldo >= r.min && saldo <= r.max);
        const info  = this.RANKING_SISTEMA[idx !== -1 ? idx : this.RANKING_SISTEMA.length - 1];
        return {
            lvl:           info.lvl,
            patente:       info.patente,
            cor:           info.cor,
            proximoLvl:    info.max,
            xpMinimo:      info.min,
            progressoBarra: Math.min(Math.max((saldo / info.max) * 100, 2), 100),
            saldoAtual:    saldo,
        };
    },

    verificarConquistas: function () {
        const progresso = this.getProgressoRPG();
        localStorage.setItem(PATENTE_CHAVE, progresso.patente);
        localStorage.setItem(NIVEL_CHAVE,   progresso.lvl);
        return progresso;
    },

    getProgressoAcademico: function (aulas) {
        if (!Array.isArray(aulas) || aulas.length === 0) {
            return { concluidas: 0, total: 0, porc: 0 };
        }
        const validas   = aulas.filter(a => a && a.id);
        const total     = validas.length;
        const concluidas = validas.filter(a =>
            this.estaConcluido(a.id, TIPO_CONCLUSAO.TEXTO) &&
            this.estaConcluido(a.id, TIPO_CONCLUSAO.QUESTOES)
        ).length;
        return { concluidas, total, porc: total > 0 ? Math.round((concluidas / total) * 100) : 0 };
    },

    // ==========================================================
    //  NOTIFICAÇÕES VISUAIS
    // ==========================================================
    exibirNotificacaoLevelUp: function (progresso) {
        const el = document.createElement('div');
        el.innerHTML = `
            <div class="w3-animate-zoom w3-card-4 w3-round-large w3-padding"
                 style="position:fixed;top:20px;left:50%;transform:translateX(-50%);
                        z-index:10000;text-align:center;background:${progresso.cor};
                        color:white;min-width:250px;">
                <i class="fa fa-arrow-up w3-xlarge"></i><br>
                <b class="w3-large">SUBIU DE NÍVEL!</b><br>
                <span>Agora você é um <b>${progresso.patente}</b></span><br>
                <span class="w3-tag w3-white w3-text-black w3-round w3-margin-top">
                    Level ${progresso.lvl}
                </span>
            </div>`;
        document.body.appendChild(el);
        setTimeout(() => {
            el.classList.add('w3-animate-opacity');
            setTimeout(() => el.remove(), 500);
        }, 5000);
    },

    _exibirConquista: function (conquista) {
        const el = document.createElement('div');
        el.innerHTML = `
            <div class="w3-animate-zoom w3-card-4 w3-round-large w3-padding"
                 style="position:fixed;bottom:20px;right:20px;z-index:10000;
                        text-align:center;background:#333;color:white;min-width:200px;">
                <span style="font-size:2rem">${conquista.icone || '🏆'}</span><br>
                <b>Conquista desbloqueada!</b><br>
                <span>${conquista.nome}</span>
            </div>`;
        document.body.appendChild(el);
        setTimeout(() => {
            el.classList.add('w3-animate-opacity');
            setTimeout(() => el.remove(), 500);
        }, 4000);
    },

    // ==========================================================
    //  SINCRONIZAÇÃO COM O BANCO (chamada automática no load)
    //
    //  Por que isso é importante?
    //  Se o aluno fez aulas em outro dispositivo, o banco tem
    //  o total real. Sem isso, dois dispositivos ficam desincronizados.
    // ==========================================================
    sincronizarComBanco: function () {
        const nome = this.getNome();
        if (!nome) return; // aluno ainda não se identificou

        fetch(`${API_BASE}/aluno.php?nome=${encodeURIComponent(nome)}`)
            .then(r => r.json())
            .then(dados => {
                if (!dados.encontrado) {
                    // Aluno não existe no banco ainda → cria agora
                    // Passa os globinhos do localStorage para não começar do zero
                    const globinhosLocais = parseInt(localStorage.getItem(DB_CHAVE) || 0);
                    return this._post('aluno.php', { nome, globinhos_iniciais: globinhosLocais })
                        .then(novo => {
                            if (!novo || !novo.id) return;
                            this._cache.alunoId = novo.id;
                            localStorage.setItem(ALUNO_ID_CHAVE, novo.id);
                            if (typeof atualizarInterface === "function") atualizarInterface();
                        });
                }

                // Salva o id (fundamental para as próximas escritas)
                this._cache.alunoId = dados.id;
                localStorage.setItem(ALUNO_ID_CHAVE, dados.id);

                // Banco prevalece sobre localStorage
                this._cache.globinhos = dados.globinhos;
                localStorage.setItem(DB_CHAVE, dados.globinhos);

                // Atualiza UI com dados frescos
                if (typeof atualizarInterface === "function") atualizarInterface();
            })
            .catch(() => {}); // offline? localStorage assume o controle
    },

};

// Sincroniza com o banco assim que o DOM estiver pronto
document.addEventListener('DOMContentLoaded', () => DuvidDB.sincronizarComBanco());
