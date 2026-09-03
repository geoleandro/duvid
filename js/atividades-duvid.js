let todasAtividades = [];

async function carregarAtividades() {
    try {
        const response = await fetch('atividades.json');
        todasAtividades = await response.json();
        gerarBotoesAtividades();
        renderizarCards(todasAtividades);
    } catch (error) {
        console.error("Erro:", error);
    }
}

function gerarBotoesAtividades() {
    const temas = ['Todos', ...new Set(todasAtividades.map(a => a.tema).filter(Boolean))].sort((a, b) =>
        a === 'Todos' ? -1 : b === 'Todos' ? 1 : a.localeCompare(b)
    );
    const cont = document.getElementById('botoes-filtro-atv');
    if (!cont) return;
    cont.innerHTML = temas.map(t =>
        `<button class="btn-filtro ${t === 'Todos' ? 'active' : ''}"
                 onclick="filtrar('${t}', this)">${t}</button>`
    ).join('');
}

function atualizarContagem(exibindo, total) {
    const el = document.getElementById('contador');
    if (!el) return;
    if (exibindo === total) {
        el.textContent = `${total} atividade${total !== 1 ? 's' : ''} encontrada${total !== 1 ? 's' : ''}`;
    } else {
        el.textContent = `${exibindo} de ${total} atividade${total !== 1 ? 's' : ''} encontrada${total !== 1 ? 's' : ''}`;
    }
}

function renderizarCards(lista) {
    const container = document.getElementById('container-atividades');
    container.innerHTML = '';
    atualizarContagem(lista.length, todasAtividades.length);

    if (lista.length === 0) {
        container.innerHTML = `<div class="w3-center w3-padding-64"><p class="w3-large w3-opacity">Nenhuma atividade encontrada.</p></div>`;
        return;
    }

    lista.forEach(atv => {
        container.innerHTML += `
            <div class="w3-col l4 m6 s12 w3-margin-bottom animate-top">
                <div class="w3-card w3-white w3-round-large w3-padding-16 card-rpg">
                    <div class="w3-row" style="margin-bottom:6px;">
                        <div class="w3-col s8">
                            <span class="w3-tag w3-amber w3-round w3-tiny"><b>${atv.tag.toUpperCase()}</b></span>
                        </div>
                        <div class="w3-col s4 w3-right-align">
                            <span class="badge-nivel">${atv.nivel}</span>
                        </div>
                    </div>
                    <h4 class="w3-text-dark-grey" style="margin:4px 0;"><b>${atv.titulo}</b></h4>
                    <p class="w3-small w3-opacity" style="margin:0 0 4px;">${atv.descricao}</p>
                    <p class="w3-tiny w3-text-grey" style="margin:0 0 8px;"><b>BNCC:</b> ${atv.bncc}</p>
                    <div class="card-buttons">
                        <a href="${atv.link}" target="_blank"
                           class="w3-button w3-light-grey w3-block w3-round-medium w3-small" style="flex:1;">Visualizar</a>
                        <a href="${atv.link}" download
                           class="w3-button w3-green w3-block w3-round-medium w3-small" style="flex:1;">
                            <i class="fa fa-download"></i> Baixar
                        </a>
                    </div>
                </div>
            </div>`;
    });
}

function filtrar(tema, btn) {
    document.querySelectorAll('.btn-filtro').forEach(b => b.classList.remove('active'));
    if (btn) btn.classList.add('active');

    const busca = document.getElementById('inputBusca')?.value.toLowerCase() || '';
    const filtrados = todasAtividades.filter(atv => {
        const matchTema  = tema === 'Todos' || atv.tema === tema;
        const matchBusca = !busca ||
            atv.titulo.toLowerCase().includes(busca) ||
            atv.tema.toLowerCase().includes(busca) ||
            atv.descricao.toLowerCase().includes(busca);
        return matchTema && matchBusca;
    });
    renderizarCards(filtrados);
}

document.getElementById('inputBusca')?.addEventListener('input', () => {
    const ativo = document.querySelector('.btn-filtro.active');
    const tema = ativo ? ativo.textContent.trim() : 'Todos';
    filtrar(tema, null);
});

document.addEventListener('DOMContentLoaded', carregarAtividades);
