document.addEventListener("DOMContentLoaded", function () {
    injetarComponentesGlobais();
    aplicarTemaSalvo();
    inicializarControleFonte();
    resolverImagensBase();
});

// Resolve <img data-base-src="foo/bar.png"> usando a base do projeto.
// Útil para imagens dentro de header/footer que precisam funcionar em
// qualquer profundidade de página.
function resolverImagensBase() {
    const imgs = document.querySelectorAll('img[data-base-src]');
    imgs.forEach(img => {
        const path = img.dataset.baseSrc;
        if (!path) return;
        img.src = (typeof duvidUrl === "function") ? duvidUrl(path) : path;
    });
}
async function injetarComponentesGlobais() {
    const carregarRecurso = async (id, path) => {
        const container = document.getElementById(id);
        if (container && container.innerHTML.trim() === "") {
            try {
                const finalUrl = (typeof duvidUrl === "function") ? duvidUrl(path) : path;
                const res = await fetch(finalUrl);
                if (res.ok) {
                    container.innerHTML = await res.text();
                    return true;
                }
            } catch (erro) {
                console.error("Erro ao carregar:", id, erro);
            }
        }
        return false;
    };

    // 1. Carrega o Header e trata o painel de pontos
    const hOk = await carregarRecurso('header-placeholder', 'includes/header.php');
    
    if (hOk) {
        // Resolve imagens com data-base-src dentro do header recém-injetado
        if (typeof resolverImagensBase === "function") resolverImagensBase();

        const painel = document.getElementById("painel-pontos");
        
        // Verifica se deve mostrar o globinho
        if (verificarSeEhAula() && painel) {
            painel.style.display = "flex"; // Usa flex para manter o alinhamento corrigido
            painel.classList.remove("w3-hide");
            
            // Sincroniza a nota inicial se ela já existir no script da aula
            if (typeof nota !== 'undefined') {
                const displayNota = document.getElementById("notaFixa");
                if (displayNota) displayNota.innerHTML = nota.toFixed(1);
            }
        } else if (painel) {
            painel.style.display = "none"; // Garante que fique oculto na Home/Blog
        }
    }

    // 2. Carrega o Footer e atualiza o ano
    const fOk = await carregarRecurso('footer-placeholder', 'includes/footer.php');

    if (fOk) {
        const spanAno = document.getElementById('ano-atual');
        if (spanAno) spanAno.textContent = new Date().getFullYear();
    }

    // 3. Inicializa as ferramentas de acessibilidade
    if (typeof aplicarTemaSalvo === "function") aplicarTemaSalvo(); // Garante o tema antes do ícone
    if (typeof inicializarLogicaDarkMode === "function") inicializarLogicaDarkMode();
    if (typeof inicializarControleFonte === "function") inicializarControleFonte();
}

/**
 * Verifica se a página atual é uma lição interativa 
 * baseada na existência de elementos de aula.
 */
function verificarSeEhAula() {
    // Procura pela barra de progresso ou pelos tópicos da aula
    const temProgresso = document.getElementById("progress");
    const temTopicos = document.querySelector(".topico");
    
    // Retorna verdadeiro se qualquer um dos dois existir
    return !!(temProgresso || temTopicos);
}


function inicializarControleFonte() {
    const btnA = document.getElementById('increase-font') || document.querySelector('[onclick="aumentarFonte()"]');
    const btnD = document.getElementById('decrease-font') || document.querySelector('[onclick="diminuirFonte()"]');
    
    // Alvos: O main e especificamente o container das questões
    const corpo = document.querySelector('.corpo-artigo') || document.querySelector('main') || document.body;
    const containerQuestao = document.getElementById('container-questao');

    let size = parseFloat(localStorage.getItem('userFontSize')) || 1.05;

    const update = () => {
        // Aplica ao corpo principal
        if (corpo) corpo.style.fontSize = size.toFixed(2) + "rem";
        
        // Aplica especificamente ao container de questões para forçar as alternativas
        if (containerQuestao) {
            containerQuestao.style.fontSize = size.toFixed(2) + "rem";
        }
        
        localStorage.setItem('userFontSize', size);
    };

    if (btnA) btnA.onclick = (e) => { 
        e.preventDefault(); 
        if (size < 1.5) { size += 0.05; update(); } 
    };
    
    if (btnD) btnD.onclick = (e) => { 
        e.preventDefault(); 
        if (size > 0.8) { size -= 0.05; update(); } 
    };

    update();
}

function inicializarLogicaDarkMode() {
    const upIcon = () => {
        const btn = document.getElementById('toggle-dark-mode');
        if (btn) {
            btn.innerHTML = document.body.classList.contains('dark-mode') ? '<i class="fa fa-sun"></i>' : '<i class="fa fa-moon"></i>';
        }
    };
    document.addEventListener('click', (e) => {
        const btn = e.target.closest('#toggle-dark-mode');
        if (btn) {
            document.body.classList.toggle('dark-mode');
            localStorage.setItem('theme', document.body.classList.contains('dark-mode') ? 'dark' : 'light');
            upIcon();
        }
    });
    upIcon();
}

function aplicarTemaSalvo() {
    if (localStorage.getItem('theme') === 'dark') document.body.classList.add('dark-mode');
}




function mostrarBotaoTopo() {
    const btn = document.getElementById("btn-topo");
    if (!btn) return;

    // Se rolar mais de 400px para baixo, o botão aparece
    if (document.body.scrollTop > 400 || document.documentElement.scrollTop > 400) {
        btn.style.display = "block";
    } else {
        btn.style.display = "none";
    }
}

// Função para subir suavemente
function voltarAoTopo() {
    window.scrollTo({
        top: 0,
        behavior: 'smooth' // Subida suave (animação)
    });
}




// Monitora a rolagem da página
window.onscroll = function () {
    mostrarBotaoTopo();
};

