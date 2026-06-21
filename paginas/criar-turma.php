<?php require_once __DIR__ . '/../includes/auth_aluno.php'; ?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="robots" content="noindex, nofollow">
    <title>Criar Turma - Duvid</title>

    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="/estilos/index-estilo.css">
    <link rel="stylesheet" href="/estilos/navbar.css">
    <link rel="shortcut icon" type="image/x-icon" href="/fotoIndex/favicon.ico">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

    <script src="/js/duvid-cache.js" defer></script>
    <script src="/js/carregar.js" defer></script>
    <script src="/js/abrirmenu.js" defer></script>

    <style>
    html, body { height: 100%; }
    body { display: flex; flex-direction: column; min-height: 100vh; margin: 0; }
    .ct-main { flex: 1 0 auto; }

    .ct-wrap {
        max-width: 480px;
        margin: 90px auto 80px;
        padding: 0 16px;
    }

    /* ── Card principal ── */
    .ct-card {
        background: #fff;
        border-radius: 16px;
        padding: 32px 28px;
        box-shadow: 0 4px 20px rgba(0,0,0,0.08);
    }
    .ct-card h2 {
        margin: 0 0 6px;
        font-size: 1.5rem;
        color: #1b5e20;
    }
    .ct-card p.ct-sub {
        margin: 0 0 24px;
        color: #666;
        font-size: .88rem;
    }

    /* ── Inputs ── */
    .ct-label {
        font-size: .82rem;
        font-weight: 700;
        color: #444;
        display: block;
        margin-bottom: 5px;
    }
    .ct-input {
        width: 100%;
        padding: 10px 12px;
        border: 1.5px solid #ddd;
        border-radius: 10px;
        font-size: .95rem;
        box-sizing: border-box;
        transition: border-color .15s;
        margin-bottom: 16px;
        font-family: inherit;
    }
    .ct-input:focus { outline: none; border-color: #2e7d32; }

    /* ── Botão ── */
    .ct-btn {
        width: 100%;
        padding: 12px;
        background: linear-gradient(135deg, #2e7d32, #43a047);
        color: #fff;
        border: none;
        border-radius: 10px;
        font-size: 1rem;
        font-weight: 700;
        cursor: pointer;
        transition: opacity .15s;
    }
    .ct-btn:hover { opacity: .9; }
    .ct-btn:disabled { opacity: .6; cursor: not-allowed; }

    /* ── Erro ── */
    .ct-erro {
        color: #c62828;
        font-size: .85rem;
        margin-bottom: 12px;
        display: none;
    }

    /* ── Resultado (código gerado) ── */
    .ct-resultado {
        display: none;
        text-align: center;
        margin-top: 24px;
    }
    .ct-codigo-box {
        background: #f1f8e9;
        border: 2px dashed #7cb342;
        border-radius: 14px;
        padding: 22px 16px;
        margin: 16px 0;
    }
    .ct-codigo-label {
        font-size: .78rem;
        color: #666;
        text-transform: uppercase;
        letter-spacing: 1px;
        margin-bottom: 8px;
    }
    .ct-codigo {
        font-size: 2.8rem;
        font-weight: 900;
        letter-spacing: 6px;
        color: #1b5e20;
        font-family: monospace;
    }
    .ct-nome-turma {
        font-size: .95rem;
        color: #444;
        margin-top: 6px;
    }
    .ct-instrucao {
        font-size: .85rem;
        color: #555;
        line-height: 1.5;
        margin-bottom: 16px;
    }
    .ct-acoes {
        display: flex;
        gap: 10px;
        justify-content: center;
        flex-wrap: wrap;
    }
    .ct-btn-sec {
        padding: 9px 20px;
        border-radius: 20px;
        border: 1.5px solid #2e7d32;
        background: #fff;
        color: #2e7d32;
        font-weight: 600;
        font-size: .85rem;
        cursor: pointer;
        transition: background .15s;
    }
    .ct-btn-sec:hover { background: #f4fbf4; }
    .ct-btn-primary {
        padding: 9px 20px;
        border-radius: 20px;
        border: none;
        background: #2e7d32;
        color: #fff;
        font-weight: 600;
        font-size: .85rem;
        cursor: pointer;
        text-decoration: none;
        display: inline-block;
    }
    .ct-copiado {
        font-size: .8rem;
        color: #2e7d32;
        font-weight: 600;
        display: none;
        margin-top: 6px;
    }
    </style>
</head>

<body class="w3-light-grey">
    <?php include __DIR__ . '/../includes/header.php'; ?>

    <main class="ct-main">
    <div class="ct-wrap">
        <div class="ct-card">

            <!-- Formulário de criação -->
            <div id="ct-form-area">
                <h2><i class="fa-solid fa-users-gear"></i> Criar Turma</h2>
                <p class="ct-sub">Crie uma turma e compartilhe o código com seus alunos. Qualquer pessoa pode criar.</p>

                <label class="ct-label" for="ct-nome">Nome da turma</label>
                <input class="ct-input" type="text" id="ct-nome"
                    placeholder="Ex: 1º A — Tarde, Turma do Professor João..."
                    maxlength="100">

                <label class="ct-label" for="ct-ano">Ano escolar</label>
                <select class="ct-input" id="ct-ano">
                    <option value="0">Livre / Misto (qualquer ano)</option>
                    <option value="1">1º Ano</option>
                    <option value="2">2º Ano</option>
                    <option value="3">3º Ano</option>
                </select>

                <p id="ct-erro" class="ct-erro"></p>

                <button class="ct-btn" id="ct-btn-criar" onclick="criarTurma()">
                    <i class="fa-solid fa-wand-magic-sparkles"></i> Gerar código da turma
                </button>
            </div>

            <!-- Resultado: código gerado -->
            <div id="ct-resultado" class="ct-resultado">
                <i class="fa-solid fa-circle-check" style="font-size:2.5rem; color:#2e7d32;"></i>
                <h3 style="margin:8px 0 4px; color:#1b5e20;">Turma criada!</h3>

                <div class="ct-codigo-box">
                    <div class="ct-codigo-label">Código da turma</div>
                    <div class="ct-codigo" id="ct-codigo-gerado">——</div>
                    <div class="ct-nome-turma" id="ct-nome-gerado"></div>
                </div>

                <p class="ct-instrucao">
                    Passe este código para seus alunos. Ao se cadastrarem no Duvid,
                    eles digitam o código e entram automaticamente na sua turma.
                </p>

                <div id="ct-copiado" class="ct-copiado">✔ Copiado!</div>

                <div class="ct-acoes">
                    <button class="ct-btn-sec" onclick="copiarCodigo()">
                        <i class="fa-solid fa-copy"></i> Copiar código
                    </button>
                    <button class="ct-btn-sec" onclick="compartilhar()">
                        <i class="fa-solid fa-envelope"></i> Copiar mensagem
                    </button>
                    <a href="/paginas/ranking.php" class="ct-btn-primary">
                        <i class="fa-solid fa-trophy"></i> Ver ranking
                    </a>
                </div>

                <p style="margin-top:20px; font-size:.82rem; color:#aaa;">
                    Quer criar outra turma?
                    <a href="#" onclick="resetar(); return false;" style="color:#2e7d32;">Clique aqui</a>
                </p>
            </div>

        </div>
    </div>
    </main>

    <?php include __DIR__ . '/../includes/footer.php'; ?>

    <script>
    let codigoGerado = '';
    let nomeGerado   = '';

    async function criarTurma() {
        const nome = document.getElementById('ct-nome').value.trim();
        const ano  = parseInt(document.getElementById('ct-ano').value);
        const erro = document.getElementById('ct-erro');
        const btn  = document.getElementById('ct-btn-criar');

        erro.style.display = 'none';

        if (nome.length < 3) {
            erro.textContent = 'Digite um nome para a turma (mínimo 3 caracteres).';
            erro.style.display = 'block';
            document.getElementById('ct-nome').focus();
            return;
        }

        btn.disabled = true;
        btn.innerHTML = '<i class="fa-solid fa-spinner fa-spin"></i> Criando…';

        try {
            const resp = await fetch('/api/turma.php', {
                method: 'POST',
                headers: { 'Content-Type': 'application/json' },
                body: JSON.stringify({ nome, ano_escolar: ano }),
            });
            const dados = await resp.json();

            if (!dados.criada) {
                erro.textContent = dados.erro || 'Erro ao criar turma. Tente novamente.';
                erro.style.display = 'block';
                btn.disabled = false;
                btn.innerHTML = '<i class="fa-solid fa-wand-magic-sparkles"></i> Gerar código da turma';
                return;
            }

            codigoGerado = dados.codigo;
            nomeGerado   = dados.nome;

            document.getElementById('ct-codigo-gerado').textContent = dados.codigo;
            document.getElementById('ct-nome-gerado').textContent   = dados.nome;
            document.getElementById('ct-form-area').style.display   = 'none';
            document.getElementById('ct-resultado').style.display   = 'block';

        } catch(e) {
            erro.textContent = 'Falha na conexão. Verifique sua internet e tente novamente.';
            erro.style.display = 'block';
            btn.disabled = false;
            btn.innerHTML = '<i class="fa-solid fa-wand-magic-sparkles"></i> Gerar código da turma';
        }
    }

    function copiarCodigo() {
        navigator.clipboard.writeText(codigoGerado).then(() => {
            const el = document.getElementById('ct-copiado');
            el.style.display = 'block';
            setTimeout(() => el.style.display = 'none', 2000);
        });
    }

    function compartilhar() {
        const texto = `Entre na turma "${nomeGerado}" no Duvid Geografia!\n`
                    + `Código: ${codigoGerado}\n`
                    + `Acesse: https://duvid.com.br`;
        navigator.clipboard.writeText(texto).then(() => {
            const el = document.getElementById('ct-copiado');
            el.textContent = '✔ Mensagem copiada! Cole no WhatsApp ou onde quiser.';
            el.style.display = 'block';
            setTimeout(() => { el.style.display = 'none'; el.textContent = '✔ Copiado!'; }, 3000);
        });
    }

    function resetar() {
        document.getElementById('ct-nome').value = '';
        document.getElementById('ct-ano').value  = '0';
        document.getElementById('ct-form-area').style.display  = 'block';
        document.getElementById('ct-resultado').style.display  = 'none';
        document.getElementById('ct-btn-criar').disabled = false;
        document.getElementById('ct-btn-criar').innerHTML =
            '<i class="fa-solid fa-wand-magic-sparkles"></i> Gerar código da turma';
        document.getElementById('ct-nome').focus();
    }

    // Permite Enter no campo nome
    document.addEventListener('DOMContentLoaded', () => {
        document.getElementById('ct-nome')
            .addEventListener('keydown', e => { if (e.key === 'Enter') criarTurma(); });
    });
    </script>
</body>
</html>
