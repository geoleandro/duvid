# Memória de Trabalho — Leandro / Duvid

## Eu
**Leandro** — criador do Duvid Geografia (duvid.com.br).
Professor/desenvolvedor solo. Usa Claude Cowork como par de programação.
Tem bolsista que ajuda com tarefas menores (conversão de HTMLs, catalogação).

## O Projeto Principal
**Duvid** = plataforma educacional de Geografia para vestibular (ENEM, FUVEST, UNICAMP, UNESP).
- PHP + MySQL no XAMPP local / hospedagem compartilhada em produção
- Mascote: **Globinho** 🌍 (personagem central de gamificação)
- Moeda interna: **globinhos** (XP do aluno)
- URL produção: duvid.com.br
- FTP para deploy (não tem CI/CD)
- Instagram: @duvidgeo

## Stack Técnica
| Camada | Tecnologia |
|--------|-----------|
| Backend | PHP 8+, PDO, sessões PHP |
| Banco | MySQL (PDO singleton em `includes/conexao.php`) |
| Frontend | HTML/CSS/JS vanilla + W3.CSS |
| Auth aluno | PHP session (`$_SESSION['aluno_id']`) |
| Auth admin | Sessão separada (`$_SESSION['admin_logado']`) |
| Ambiente local | XAMPP, IS_LOCAL = true |
| Deploy | FTP manual |

## Arquitetura de Arquivos
```
/api/          — endpoints JSON (aluno, progresso, globinhos, respostas, logout)
/includes/     — conexao.php, auth_aluno.php, rate_limit.php
/paginas/      — ranking.php, criar-turma.php, stats-turma.php
/questoes/     — 107 arquivos JSON com questões por vestibular/ano
/js/           — duvid-core.js, duvid-ui.js, jsquestoes-padrao.js
/config/       — .env (produção, não vai ao git)
/database/     — migrations SQL
```

## Termos / Abreviações
| Termo | Significado |
|-------|-------------|
| globinhos | moeda/XP do aluno |
| Globinho | mascote da plataforma |
| IS_LOCAL | flag PHP que detecta XAMPP vs produção |
| auth_aluno | proteção de página por sessão PHP |
| requireAuth() | função PHP que exige sessão válida na API |
| bolsista | colaborador que faz tarefas operacionais |
| JSONs | arquivos de questões em /questoes/ |
| roadmap | banco Notion "🌍 Duvid — Roadmap" |

## Frentes de Trabalho
| Frente | Descrição |
|--------|-----------|
| 🔧 Infraestrutura | segurança, sessão, .env, .htaccess |
| 🎮 Gamificação | streak, Globinho, cartas, batalha RPG |
| 📚 Conteúdo | simulados, questões JSON, aulas |
| 👨‍🏫 Admin/Professor | painel, stats turma, criar prova |
| 📢 Instagram | @duvidgeo, grid de lançamento |
| 🤝 Comunidade | ranking, turmas, colaboração |

## Regra de Prioridade (combinada)
1. Algo quebrado para o aluno → resolve na hora
2. Desbloqueia outra frente → segundo
3. Features novas → terceiro
4. Máximo 3 frentes ativas ao mesmo tempo

## Dioramas (fundos panorâmicos)
- Estilo: **pixel art de alta resolução**, estética retro game (tipo SNES/GBA avançado)
- Dimensões: **2400×456px**, proporção ~5:1, exportar como **WebP ≤200KB**
- Localização: `/fotoIndex/tileset/`
- Injeção: automática via `jessica-walker.js` antes do `<footer>` (sem mexer no HTML)
- Arquivos:
  | Arquivo | Página | Status |
  |---------|--------|--------|
  | `fundo.webp` | home | ✅ pronto |
  | `fundo-natureza.webp` | Duvid1Ano.php | ✅ pronto |
  | `fundo-brasil.webp` | Duvid2Ano.php | 🔲 pendente |
  | `fundo-mundo.webp` | Duvid3Ano.php | 🔲 pendente |
- Tema dos dioramas: **geografia humana + física juntas** — contraste/conflito dentro da cena
- Cards renomeados: 1º ANO → 🌿 Natureza | 2º ANO → 🇧🇷 Brasil | 3º ANO → 🌍 Mundo

## Design System — Clean Pixel
Guia completo em `/docs/GUIA-DE-ESTILO.md`
- Fonte: **Montserrat** (corpo) + pixel font nos títulos
- Brand: `#2e7d32` (Forest Deep) / `#4caf50` (Forest Vibrant)
- Surface: `#f8f9fa` | Cards: `border-radius: 24px` + `box-shadow: 0 4px 12px rgba(0,0,0,0.05)`
- Sidebar: 260px | Max-width container: 1280px | Gutter: 24px
- Redesign em 4 fases: ① Sidebar nav → ② Home dashboard → ③ Quiz interface → ④ Aulas + Simulados

## Revisão Completa de Textos — Padrão
Checklist aplicado a cada "Revisão completa" de aula (`/2ano/Textos2/TextoNN/`, `/1ano/`, `/3ano/`):
- Head técnico: meta description/og tags preenchidas, `texto-estilo.css` + `explicacaoPalavra.css` + `glossario.js` + `texto-painel.js` no `<head>`, título expandido (`Nº ano - Texto NN - Nome do Tema`)
- Corrigir `{TITULO}` literal na mensagem final de `ProcessarResposta`
- Bloco "Questões para o caderno" (**máximo de 10 perguntas** em `<h3>`, dentro de `<div class="w3-panel w3-pale-yellow w3-margin">`) reposicionado para depois do P&R (botão "Desafio"/"Atividade") e antes da Transição Final — **nenhum tópico de conteúdo novo pode vir depois dele** (é o último bloco de conteúdo da aula, antes da transição final). Se a revisão adicionar conteúdo novo que mereça uma pergunta, mesclar com uma questão existente (nunca ultrapassar 10)
- Questão Prática (`pergunta-bloco`): manter **leve**. Alternativas com uma ou duas palavras/expressão curta (não frases completas), e o comentário/feedback do `validarRadio()` em **uma linha só** (não um parágrafo explicativo). Nota técnica: esse texto (5º argumento de `validarRadio()`) só aparece quando o aluno erra — quando acerta, o site mostra uma frase de sucesso aleatória de `getFraseSucesso()` (`js/duvid-ui.js`), então o argumento funciona como uma dica corretiva curta, não uma explicação geral
- **Sem cara de IA**: evitar travessão (—) no texto da aula — trocar por vírgula, ponto ou dois-pontos conforme o caso. Evitar também outros vícios de escrita de IA: elegância forçada tipo "não é só X, é Y", advérbios de ênfase em excesso (fundamental, crucial, essencial), frases -ing/gerúndio coladas no fim só para parecer mais profundo, encerramentos genéricos motivacionais. Ler o texto em voz alta mentalmente: se soar como texto de robô, reescrever
- Ficha de Conceitos: `<div class="topico"><div id="ficha-conceitos"></div><button class="btnShow" onclick="MostrarProximo(this); this.style.display='none'">Proximo</button><hr/></div>`
- **Infográfico - Resumo**: **regra confirmada (21/08) — todos os textos, de todos os anos, ganham esse bloco daqui em diante**, sem exceção (não é mais só a partir do Texto14/15). Checar se o arquivo `inforesumot{sigla}{N}.webp` já existe na pasta do texto e se `mapaMental` já está preenchido em `js/aulas-Nano.json` antes de criar do zero — se a imagem existente tiver erros de conteúdo/geração, avisar antes de referenciar (não subir infográfico quebrado para produção). Posição: logo antes do P&R ("Sócrates"), depois do último tópico de conteúdo. Markup confirmado (exemplo real do Texto02, `{sigla}{N}` = ex. `tp2`, `ts5`, `tt14`):
  ```html
  <div class="topico">
      <h2> Infográfico - Resumo</h2>
      <div class="w3-margin"><img id="inforesumo{sigla}{N}" src="inforesumo{sigla}{N}.webp" alt="Infográfico resumo {tema da aula}" class="w3-mobile">
          <span class="w3-small w3-margin-left" id="citacaoInfografico"> Fonte: Organizado e revisado pelo autor. </span>
      </div>
      <button class="btnShow" onclick="MostrarProximo(this); this.style.display='none'">Próximo</button>
      <hr>
  </div>
  ```
- 7-12 termos `.termo` (glossário) com `data-palavra`/`data-definicao`
- `class="borda"` → `class="w3-border w3-round-large w3-padding"` (padrão dark-mode-aware)
- `w3-grayscale`/`w3-card-4` → `w3-panel`/`w3-sand`/`w3-pale-yellow` (paleta Clean Pixel). Isso vale também para qualquer `<div>` de fundo colorido fora da paleta (`w3-pale-blue`, `w3-pale-green`, `w3-light-blue`, etc.): remover o wrapper por completo (não recolorir), mantendo só o conteúdo dentro do `.topico`
- Checagem factual de datas/números/nomes via WebSearch antes de confirmar
- **Conferir se o conteúdo bate com o campo `conteudo` da aula em `js/aulas-2ano.json`**: todo tópico listado ali (ex: "Proálcool, Biodiesel e Bioenergia") precisa aparecer de fato no texto, com profundidade real, não só citado de passagem. Se faltar, pesquisar via WebSearch e adicionar uma seção própria com termo no glossário
- **Verificar se cabem os assuntos mais cobrados do ENEM no tema do texto** (ex: dados/conceitos clássicos de prova, comparações regionais, teorias recorrentes) — mesmo quando o gap-analysis do livro didático não cobre isso diretamente
- Revisão gramatical completa (concordância, regência, crase, digitação)
- Detectar bugs de funcionalidade (JS quebrado tipo `plusDivs`/`openCity` inexistentes) e de conteúdo (explicações de questões práticas copiadas/trocadas de outro texto)
- **Tempo mínimo de leitura: 25 minutos** (atualizado; regra anterior de 20 min valia a partir do Texto13, texto11 do 3º ano ficou em 16 min e não precisa ser refeito). Cálculo do site: `Math.max(1, Math.round(palavras / 180))` sobre o texto de `.texto-content-inner` (ver `js/texto-painel.js`). Ou seja, mínimo de ~4.410 palavras no conteúdo. Se o texto original for curto, expandir com conteúdo real e verificado (subtemas correlatos, dados atuais, comparações, exemplos) — nunca enrolação
- Validar balanço de divs (`grep -c '<div\b'` vs `</div>`) após cada edição
- Verificar ao vivo no navegador (Claude in Chrome): revelar todos os `.topico`, checar modo claro e escuro, testar elementos interativos
- **Sempre fazer o gancho com a aula seguinte**: no parágrafo de fechamento do conteúdo (antes da Ficha de Conceitos/Questões), incluir uma frase de transição citando o tema da próxima aula do módulo (conferir em `js/aulas-Nano.json` pelo id seguinte), para dar continuidade narrativa entre os textos
- **Sugestões de Livros** (padrão a partir do Texto26): bloco "📚 Sugestões de Livros" logo depois de "Referências Bibliográficas" dentro de `#final-da-aula`, com 2-3 obras de literatura (romance, conto) que dialoguem com o tema da aula. Mecanismo: cadastrar os livros em `js/livros.json` (chave → autor, titulo, ano, cor, tag, relacao — o campo `relacao` explica em 1-2 frases por que aquele livro conversa com o conteúdo da aula) e referenciar as chaves no array `livros` da aula em `js/aulas-Nano.json`. JS (`carregarLivros`/`filtrarLivrosAula`/`renderizarCardLivro`/`injetarLivrosAula`) já implementado em `estilos/jstextos-padrao.js`, espelhando o padrão de bibliografias/links. HTML necessário no `#final-da-aula` de cada texto: `<div class="w3-container w3-padding-64 secao-livros-sugeridos"><h3>📚 Sugestões de Livros</h3><div id="livros-gerados"></div></div>` (a seção se auto-oculta via JS se a aula não tiver `livros` cadastrado)

## Notion
Roadmap: https://app.notion.com/p/4773afa5a43947e2988d7bce25f6a2e6
Status usados: Ideia | Próxima | Bolsista | Feito | Bloqueado

## Backlog — Conteúdo (revisões futuras)

### 🌍 3ano/Texto03 (aula 303 — "Migrações internacionais")
Ao fazer a "Revisão completa" desta aula, consultar o livro Moderna Plus Geografia nas **páginas 306-311** (emigrantes brasileiros e imigrantes no Brasil / fluxos migratórios: novas tendências / o Brasil no contexto das migrações internacionais contemporâneas). Conteúdo relevante identificado:
- Lei de Cotas de Imigração (1934) e Lei da Migração (2017, substituiu o Estatuto do Estrangeiro de 1980)
- Ondas históricas: judeus alemães (2ª Guerra), italianos (pós-guerra, anos 1950)
- Imigração recente: haitianos pós-terremoto de 2010 (~150 mil entre 2011-2020, Brasiléia/Tabatinga), venezuelanos pós-crise (~700 mil entre 2017-2022, maior grupo de imigrantes temporários)
- Emigração de brasileiros desde os anos 1980 ("década perdida"): 2022 — 1,9 milhão nos EUA, 360 mil em Portugal, 254 mil no Paraguai, 220 mil no Reino Unido, 207 mil no Japão — inversão do fluxo migratório histórico
- Fluxos sul-sul (Nepo Unicamp), imigrantes "trabalhadores do conhecimento", tendência de imigrantes se instalarem em cidades médias do interior de SP (não só metrópoles)
- Tabela das 10 principais nacionalidades de imigrantes no Brasil 2011-2020 (Venezuela, Haiti, Bolívia, Colômbia, EUA, China, Argentina, Cuba, França, Peru)

## Cards Pixel Art — Ideia de Visual
Estilo aprovado: grade de cards pixel art (2×3 ou 3×2), fundo colorido por tema, título em fonte pixel bold, ilustração pixel no topo, bullet points com texto limpo e rodapé com fonte/crédito.
Referência salva em: `/fotoIndex/` (card Política Externa EUA — Trump 2.0)
Geração via IA (imagem) ou HTML/CSS puro pixel-art.

Usos planejados no Duvid (ver detalhes na seção de ideias abaixo).

## Backlog — Features Futuras (adicionar ao Notion)

### 🤝 Card de Ranking — versão colaborativa (mockup aprovado)
- **Meta da Turma**: barra de progresso coletivo no topo do card
  - Soma o XP de todos os membros da turma
  - Níveis: Bronze 10k → Prata 25k → Ouro 50k → Lenda 100k
  - Texto: "Faltam X XP para o Nível Bronze!"
  - Barra verde com % de progresso
- **Atividade Recente**: feed de eventos em tempo real abaixo do ranking
  - "Mariana Silva acabou de concluir Climatologia +15 XP para a turma!"
  - "João Pedro iniciou Geopolítica"
  - Ponto verde = concluiu, cinza = iniciou
  - Dados de `progresso_aulas` JOIN `aulas` JOIN `alunos` WHERE turma
  - Novo endpoint: `GET /api/turma-feed.php?turma=CODE`
- Só aparece para alunos com turma (não para LIVRE)

### 📊 Painel do Aluno (nova página)
- URL sugerida: `/painel.php` ou `/aluno/painel.php`
- Dados 100% disponíveis no banco atual (`respostas_aulas`)
- Seções planejadas:
  - **Visão geral**: média geral de acertos, total de questões respondidas, aulas concluídas
  - **Desempenho por aula**: lista ordenada por % de acerto (destaca as mais difíceis)
  - **Histórico recente**: últimas 5 aulas pelo `atualizado_em`
  - **Aulas em risco**: tentadas mas não aprovadas (acertos < 60% com tentativas > 1)
  - **Assuntos mais errados**: via `erradas_json` (já implementado no card de questões)
  - **Badges/conquistas**: baseado em tentativas, acertos, sequência de aulas
- Gráficos: Chart.js (doughnut geral + bar por aula)
- Sem migration necessária — usa só o que já existe
- Prerequisito: definir layout (sidebar igual às outras páginas ou full-width dashboard)

### 🎙️ Comentador da Aula (seleção pelo professor)
- Professor logado escolhe **3 alunos** para serem os comentadores daquela aula
- Os nomes escolhidos aparecem na tela da aula para todos os alunos saberem quem vai comentar
- Regra anti-repetição: alunos já selecionados não podem ser escolhidos novamente até todos terem passado (rodízio)
- Recompensa: alunos selecionados ganham **globinhos** ao serem escolhidos (ou ao comentar, TBD)
- Banco: tabela `comentadores_aula` com `aula_id`, `aluno_id`, `turma_id`, `data`, `ganhou_pontos`
- Endpoint sugerido: `POST /api/comentador.php` (salva seleção) + `GET /api/comentador.php?aula=X&turma=Y` (retorna trio atual)
- UI professor: botão "Sortear/Escolher Comentadores" no painel da aula
- UI aluno: destaque/card no topo da página de aula com foto/nome dos 3 comentadores
- Prerequisito: painel admin de turma + sistema de turmas funcionando

### 🎓 Certificados por Bloco de Aulas
- Cada módulo (Natureza/Brasil/Mundo) será dividido em blocos temáticos (ex: aulas 1–5, 6–10…)
- Ao concluir um bloco → aluno ganha certificado validado + nota
- Professor valida manualmente via painel admin (lista de alunos que completaram o bloco)
- Certificado aparece desbloqueado no Inventário da página de aulas
- Prerequisito: definir quais aulas formam cada bloco + criar tela admin de validação
