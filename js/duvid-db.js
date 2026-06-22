// =============================================================
//  duvid-db.js  —  v2.1  (Híbrido localStorage + MySQL + Login)
// =============================================================

const DB_CHAVE       = "duvid_globinhos";
const NOME_CHAVE     = "duvid_nome";
const PATENTE_CHAVE  = "duvid_patente";
const NIVEL_CHAVE    = "duvid_lvl";
const ALUNO_ID_CHAVE = "duvid_aluno_id";
const ESTADO_CHAVE   = "duvid_estado";
const CIDADE_CHAVE   = "duvid_cidade";
const ESCOLA_CHAVE   = "duvid_escola";
// localStorage é cache de sessão — banco sempre vence no próximo sincronizarComBanco

const RECOMPENSA_TEXTO    = 10;
const RECOMPENSA_QUESTOES = 20;  // igual ao RECOMPENSA_GERAL do jsquestoes-padrao
const RECOMPENSA_GERAL    = 20;
const TIPO_CONCLUSAO = { TEXTO: 'texto', QUESTOES: 'questoes' };
const API_BASE = '/api';

// =============================================================
const DuvidDB = {

    _cache: { globinhos: null, conclusoes: null, alunoId: null, sessaoAtiva: false },

    // Nº de gravações (globinhos.php / progresso.php) ainda esperando resposta.
    _pendentes: 0,

    // Reconcilia o cache com o total autoritativo do banco.
    // - Enquanto há gravações em voo, só aceita valores MAIORES (evita que
    //   uma resposta antiga reverta um ganho já aplicado por outra paralela).
    // - Quando é a última resposta pendente, o banco passa a ser a verdade
    //   absoluta — aceita inclusive valores menores, corrigindo qualquer
    //   dupla contagem otimista (ex.: reward de aula já concluída) sem reload.
    _reconciliar: function (novoTotal) {
        if (novoTotal === undefined || novoTotal === null) return;
        if (this._pendentes <= 0 || novoTotal > (this._cache.globinhos || 0)) {
            this._cache.globinhos = novoTotal;
            if (typeof atualizarInterface === "function") atualizarInterface();
        }
    },

    _getAlunoId: function () {
        if (this._cache.alunoId) return this._cache.alunoId;
        const id = parseInt(localStorage.getItem(ALUNO_ID_CHAVE));
        if (id) this._cache.alunoId = id;
        return id || null;
    },

    _post: function (endpoint, body) {
        return fetch(API_BASE + '/' + endpoint, {
            method: 'POST',
            headers: { 'Content-Type': 'application/json' },
            body: JSON.stringify(body),
        }).then(r => r.json()).catch(() => null);
    },

    // ==========================================================
    //  NOME
    // ==========================================================
    getNome: function () {
        return localStorage.getItem(NOME_CHAVE) || "";
    },

    // Retorna o id do aluno logado (útil para chamadas externas)
    getId: function () {
        return this._getAlunoId();
    },

    // Retorna snapshot do cache atual (para preencher formulários)
    getCache: function () {
        return Object.assign({}, this._cache);
    },

    // Atualiza o cache local com a resposta do PATCH /api/aluno.php
    // Garante que nome, estado, cidade, escola ficam sincronizados
    atualizarCache: function (dados) {
        if (!dados) return;
        if (dados.nome)   localStorage.setItem(NOME_CHAVE, dados.nome);
        if (dados.id)     { this._cache.alunoId = dados.id; localStorage.setItem(ALUNO_ID_CHAVE, dados.id); }
        if (dados.estado !== undefined) localStorage.setItem(ESTADO_CHAVE, dados.estado || '');
        if (dados.cidade !== undefined) localStorage.setItem(CIDADE_CHAVE, dados.cidade || '');
        if (dados.escola !== undefined) localStorage.setItem(ESCOLA_CHAVE, dados.escola || '');
        if (dados.globinhos !== undefined) this._cache.globinhos = dados.globinhos;
    },

    // Lê localização salva localmente (para preencher o modal de edição)
    getLocalizacao: function () {
        return {
            estado: localStorage.getItem(ESTADO_CHAVE) || '',
            cidade: localStorage.getItem(CIDADE_CHAVE) || '',
            escola: localStorage.getItem(ESCOLA_CHAVE) || '',
        };
    },

    salvarNome: function (nome, email, pin, codigoTurma, estado, cidade, escola) {
        email = email || '';
        pin   = pin   || '';
        codigoTurma = codigoTurma || '';
        estado = (estado || '').toUpperCase();
        cidade = cidade || '';
        escola = escola || '';
        if (!nome || nome.trim() === "") return Promise.resolve(null);
        nome = nome.trim();
        localStorage.setItem(NOME_CHAVE, nome);

        const payload = { nome: nome, globinhos_iniciais: 0 };
        if (email)       payload.email        = email;
        if (pin)         payload.pin          = pin;
        if (codigoTurma) payload.codigo_turma = codigoTurma;
        if (estado)      payload.estado       = estado;
        if (cidade)      payload.cidade       = cidade;
        if (escola)      payload.escola       = escola;

        return this._post('aluno.php', payload)
            .then(function(dados) {
                if (!dados || !dados.id) return dados;
                DuvidDB._cache.alunoId    = dados.id;
                DuvidDB._cache.sessaoAtiva = true; // login bem-sucedido = sessão ativa
                localStorage.setItem(ALUNO_ID_CHAVE, dados.id);
                // Persiste localização para preencher modal de edição depois
                localStorage.setItem(ESTADO_CHAVE, dados.estado || '');
                localStorage.setItem(CIDADE_CHAVE, dados.cidade || '');
                localStorage.setItem(ESCOLA_CHAVE, dados.escola || '');
                // Banco é fonte de verdade — só cache, sem localStorage para globinhos
                DuvidDB._cache.globinhos = dados.globinhos;
                if (typeof atualizarInterface === "function") atualizarInterface();
                return dados;
            });
    },

    setNome: function (nome) { return this.salvarNome(nome); },

    // ==========================================================
    //  GLOBINHOS
    // ==========================================================
    getGlobinhos: function () {
        // Cache populado pelo sincronizarComBanco — sem localStorage
        return this._cache.globinhos || 0;
    },

    addGlobinhos: function (quantidade, tipo) {
        quantidade = Number(quantidade);
        if (!quantidade) return;

        // Atualiza cache imediatamente (UI não pisca)
        const lvlAnterior = this.getProgressoRPG().lvl;
        this._cache.globinhos = (this._cache.globinhos || 0) + quantidade;

        const progressoAtual = this.verificarConquistas();
        if (progressoAtual.lvl > lvlAnterior) {
            if (typeof playSomFinal        === "function") playSomFinal(true);
            if (typeof dispararComemoracao === "function") dispararComemoracao('nivel');
            this.exibirNotificacaoLevelUp(progressoAtual);
        } else {
            if (typeof playSom === "function") playSom('acerto');
        }

        window.ganhosAtuais = (window.ganhosAtuais || 0) + quantidade;
        if (typeof atualizarInterface === "function") atualizarInterface();

        // Persiste no banco em background
        var alunoId = this._getAlunoId();
        if (alunoId) {
            this._pendentes++;
            this._post('globinhos.php', {
                aluno_id:  alunoId,
                quantidade: quantidade,
                tipo:       tipo || 'bonus'
            }).then(function(dados) {
                DuvidDB._pendentes--;
                DuvidDB._reconciliar(dados ? dados.novo_total : null);
            });
        }
    },

    // ==========================================================
    //  CONCLUSOES
    // ==========================================================
    estaConcluido: function (idAula, tipo) {
        // Cache populado pelo sincronizarComBanco (via API)
        if (!this._cache.conclusoes) return false;
        return this._cache.conclusoes['concluido_' + tipo + '_' + idAula] === true;
    },

    salvarConclusao: function (idAula, tipo, bonus) {
        bonus = bonus || 0;
        var chave = 'concluido_' + tipo + '_' + idAula;

        if (!this._cache.conclusoes) this._cache.conclusoes = {};
        this._cache.conclusoes[chave] = true;

        // Atualização otimista: reflete o reward antes da resposta do banco
        var rewardEsperado = (tipo === 'texto' ? RECOMPENSA_TEXTO : RECOMPENSA_QUESTOES) + bonus;
        this._cache.globinhos = (this._cache.globinhos || 0) + rewardEsperado;
        if (typeof atualizarInterface === "function") atualizarInterface();

        var alunoId = this._getAlunoId();
        if (alunoId) {
            this._pendentes++;
            this._post('progresso.php', { aluno_id: alunoId, aula_id: idAula, tipo: tipo, bonus: bonus })
                .then(function(dados) {
                    DuvidDB._pendentes--;
                    if (!dados) return;
                    // Reconcilia com o banco. Se a aula já estava concluída,
                    // o servidor devolve o total real (sem o reward duplicado),
                    // e _reconciliar corrige o excesso otimista quando não há
                    // outras gravações em voo.
                    DuvidDB._reconciliar(dados.novo_total);
                    if (dados.conquistas_novas && dados.conquistas_novas.length > 0) {
                        dados.conquistas_novas.forEach(function(c) { DuvidDB._exibirConquista(c); });
                    }
                });
        }
    },

    // ==========================================================
    //  SISTEMA RPG
    // ==========================================================
    RANKING_SISTEMA: [
        { lvl: 1, patente: 'NOVATO',          min: 0,     max: 1499,  cor: '#9d9d9d' },
        { lvl: 2, patente: 'EXPLORADOR',       min: 1500,  max: 3499,  cor: '#4caf50' },
        { lvl: 3, patente: 'CARTÓGRAFO',       min: 3500,  max: 6499,  cor: '#2196f3' },
        { lvl: 4, patente: 'ESTRATEGISTA',     min: 6500,  max: 9499,  cor: '#9c27b0' },
        { lvl: 5, patente: 'GEÓGRAFO SÊNIOR',  min: 9500,  max: 12999, cor: '#ff9800' },
        { lvl: 6, patente: 'LENDA DA TERRA',   min: 13000, max: 99999, cor: '#f44336' },
    ],

    getProgressoRPG: function () {
        var saldo = this.getGlobinhos();
        var idx   = this.RANKING_SISTEMA.findIndex(function(r) { return saldo >= r.min && saldo <= r.max; });
        var info  = this.RANKING_SISTEMA[idx !== -1 ? idx : this.RANKING_SISTEMA.length - 1];
        return {
            lvl:            info.lvl,
            patente:        info.patente,
            cor:            info.cor,
            proximoLvl:     info.max,
            xpMinimo:       info.min,
            progressoBarra: Math.min(Math.max((saldo / info.max) * 100, 2), 100),
            saldoAtual:     saldo,
        };
    },

    verificarConquistas: function () {
        return this.getProgressoRPG();
    },

    getProgressoAcademico: function (aulas) {
        if (!Array.isArray(aulas) || aulas.length === 0) {
            return { concluidas: 0, total: 0, porc: 0 };
        }
        var validas    = aulas.filter(function(a) { return a && a.id; });
        var total      = validas.length;
        var concluidas = validas.filter(function(a) {
            return DuvidDB.estaConcluido(a.id, TIPO_CONCLUSAO.TEXTO) &&
                   DuvidDB.estaConcluido(a.id, TIPO_CONCLUSAO.QUESTOES);
        }).length;
        return { concluidas: concluidas, total: total, porc: total > 0 ? Math.round((concluidas / total) * 100) : 0 };
    },

    // ==========================================================
    //  NOTIFICACOES VISUAIS
    // ==========================================================
    exibirNotificacaoLevelUp: function (progresso) {
        var el = document.createElement('div');
        el.innerHTML = '<div class="w3-animate-zoom w3-card-4 w3-round-large w3-padding" style="position:fixed;top:20px;left:50%;transform:translateX(-50%);z-index:10000;text-align:center;background:' + progresso.cor + ';color:white;min-width:250px;"><i class="fa fa-arrow-up w3-xlarge"></i><br><b class="w3-large">SUBIU DE NIVEL!</b><br><span>Agora voce e um <b>' + progresso.patente + '</b></span><br><span class="w3-tag w3-white w3-text-black w3-round w3-margin-top">Level ' + progresso.lvl + '</span></div>';
        document.body.appendChild(el);
        setTimeout(function() {
            el.classList.add('w3-animate-opacity');
            setTimeout(function() { el.remove(); }, 500);
        }, 5000);
    },

    _exibirConquista: function (conquista) {
        var el = document.createElement('div');
        el.innerHTML = '<div class="w3-animate-zoom w3-card-4 w3-round-large w3-padding" style="position:fixed;bottom:20px;right:20px;z-index:10000;text-align:center;background:#333;color:white;min-width:200px;"><span style="font-size:2rem">' + (conquista.icone || '') + '</span><br><b>Conquista desbloqueada!</b><br><span>' + conquista.nome + '</span></div>';
        document.body.appendChild(el);
        setTimeout(function() {
            el.classList.add('w3-animate-opacity');
            setTimeout(function() { el.remove(); }, 500);
        }, 4000);
    },

    // ==========================================================
    //  SINCRONIZACAO COM O BANCO
    // ==========================================================
    // Aplica resposta do banco ao cache local
    _aplicarDadosBanco: function (dados) {
        DuvidDB._cache.alunoId    = dados.id;
        DuvidDB._cache.sessaoAtiva = dados.sessao_ativa === true;
        localStorage.setItem(ALUNO_ID_CHAVE, dados.id);
        DuvidDB._cache.globinhos = dados.globinhos;
        DuvidDB._cache.conclusoes = {};
        if (dados.conclusoes) {
            dados.conclusoes.forEach(function(c) {
                DuvidDB._cache.conclusoes['concluido_' + c.tipo + '_' + c.aula_id] = true;
            });
        }
        if (typeof atualizarInterface === "function") atualizarInterface();
    },

    // Retorna true se o aluno tem sessão PHP ativa no servidor
    temSessao: function () {
        return DuvidDB._cache.sessaoAtiva === true;
    },

    sincronizarComBanco: function () {
        var nome    = this.getNome();
        var alunoId = this._getAlunoId();
        if (!nome) return Promise.resolve();

        var url = alunoId
            ? (API_BASE + '/aluno.php?id=' + alunoId)
            : (API_BASE + '/aluno.php?nome=' + encodeURIComponent(nome));

        return fetch(url)
            .then(function(r) { return r.json(); })
            .then(function(dados) {
                if (!dados.encontrado) {
                    if (alunoId) {
                        localStorage.removeItem(ALUNO_ID_CHAVE);
                        DuvidDB._cache.alunoId = null;
                        return fetch(API_BASE + '/aluno.php?nome=' + encodeURIComponent(nome))
                            .then(function(r) { return r.json(); })
                            .then(function(d) {
                                if (d && d.encontrado) DuvidDB._aplicarDadosBanco(d);
                            })
                            .catch(function() {});
                    }
                    return;
                }
                DuvidDB._aplicarDadosBanco(dados);
            })
            .catch(function(e) {
                // Não quebra a página, mas deixa rastro no console.
                // Se a API devolver erro de PHP em vez de JSON, é aqui que aparece —
                // e os cards ficam cinzas porque as conclusões não chegaram.
                console.warn('[DuvidDB] Falha ao sincronizar com o banco (cards podem ficar cinzas):', e);
            });
    },

};

// DuvidDB.pronto: Promise resolvida quando o cache de conclusões está populado.
// Use `await DuvidDB.pronto` antes de renderizar cards que dependem de estaConcluido().
//
// IMPORTANTE: a sincronização dispara JÁ (no carregamento do script), e NÃO
// dentro de um listener de DOMContentLoaded. Motivo: este arquivo é incluído
// com <script defer>, que só executa DEPOIS que o parser registrou os listeners
// de DOMContentLoaded inline da página. Se DuvidDB.pronto fosse criado dentro
// de um listener daqui, o listener da página (registrado antes) rodaria primeiro,
// encontraria DuvidDB.pronto === undefined, pularia o `await` e renderizaria os
// cards com o cache de conclusões ainda vazio — por isso os cards nunca ficavam
// coloridos. Como defer garante o DOM já parseado, sincronizar agora é seguro.
DuvidDB.pronto = DuvidDB.sincronizarComBanco() || Promise.resolve();
