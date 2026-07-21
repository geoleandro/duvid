# Controle de atualização de aulas e revisão a partir de vestibulares

Este arquivo existe para que qualquer sessão nova (mesmo depois de perder o
histórico de chat) consiga retomar o trabalho de atualização das aulas e do
banco de questões sem precisar reconstruir o processo do zero.

Lembrete automático configurado: todo dia 1 de janeiro e 1 de julho, às 9h
(tarefa `duvid-atualizacao-vestibulares`), para checar se saiu banco novo.

## O processo tem duas frentes

**Frente 1 — Conteúdo da aula.** Verificar se o tema de cada questão do
vestibular já está explicado no texto da aula correspondente e, se não
estiver, inserir conteúdo novo.

**Frente 2 — Banco de questões de revisão/prática.** Formatar as questões
reais do vestibular no padrão usado em `questoes/<ano>ano/<aulaNN>.json` e
adicioná-las ao pool de questões que o aluno resolve depois da aula.

---

## Passo a passo (repetir a cada banco novo)

1. **Entrada:** novo arquivo em `simulados/bancos/<vestibular><ano>-geografia.json`
   (array de questões: `id, instituicao, ano, dificuldade, tags, texto_apoio,
   fonte_apoio, pergunta, alternativas[], correta, comentario, ajuda,
   feedbacks, imagem_apoio`).

2. **Mapear aula:** para cada questão, usar as `tags` e o `texto_apoio` para
   identificar a aula correspondente. Convenção: `Texto<NN>` em
   `1ano/Textos1/` → aula `1NN`; em `2ano/Textos2/` → aula `2NN`; em
   `3ano/Textos3/` → aula `3NN`.

3. **Verificar cobertura (Frente 1):** ler o tópico mais próximo do tema na
   aula. Só considerar "já coberto" se o conceito central (não só vocabulário
   parecido) já estiver explicado.
   - Se coberto: nenhuma ação.
   - Se parcialmente coberto: inserir parágrafo (2-4+ frases, terceira
     pessoa, tom natural, sem "vestibular"/"prova" no corpo do texto, sem
     travessão) dentro do `<div class="topico">` existente mais relevante.
   - Se não houver tópico algum que sirva: criar um bloco `<div
     class="topico">` inteiramente novo.
   - **Regra fixa:** todo tópico novo (bloco inteiro) deve ser inserido
     imediatamente antes do bloco "antes de finalizar" / transição final da
     aula — nunca no meio do fluxo. Parágrafos inseridos dentro de um tópico
     já existente não têm essa restrição.

4. **Adicionar ao banco de prática (Frente 2):** cada aula em
   `questoes/<ano>ano/<aulaNN>.json` já é travada em **exatamente 10
   questões** — confirmado em 31 aulas distintas na rodada de julho/2026, sem
   exceção. Toda questão nova exige tirar uma antiga. Critério padrão: tirar
   a(s) questão(ões) de ano mais antigo (campo `ano`); em caso de empate no
   ano, tirar a de `id` mais baixo (mantém a mais recentemente adicionada ao
   arquivo). Antes de mexer, gerar uma tabela de proposta (aula, questão nova,
   as 10 atuais com sugestão de saída marcada) e confirmar com o Leandro —
   não substituir sem revisão, mesmo seguindo o critério padrão.
   Depois de confirmado, converter a questão pro schema do arquivo de
   destino: `id` (reaproveita o slot liberado pela remoção, mantém o array
   sempre com ids 1-10 sequenciais), `ano` como string única combinando
   instituição + ano (ex.: `"UNICAMP 2026"`, `"ENEM 2025"` — segue o padrão
   já usado no arquivo, como `"ENEM 2000"` ou `"UERJ 2009"`), `texto_apoio`,
   `fonte_apoio` (se houver, é campo próprio, não precisa embutir no
   texto_apoio), `pergunta`, `alternativas`, `correta`, `comentario`,
   `ajuda`, `tags`, `dificuldade`, `feedbacks`. Se tiver `imagem_apoio`,
   copiar o arquivo de `simulados/<vestibular>/<vestibular><ano>/` pra
   `questoes/<ano>ano/img/<aulaNN>/` e apontar o caminho novo como
   `<ano>ano/img/<aulaNN>/<arquivo>.png`.

5. **Registrar neste arquivo:** atualizar a tabela de rodadas abaixo com o
   banco processado, data e resumo por questão.

6. **Relatório para o Leandro:** tabela no chat (Questão | Tema | Aula | Ação).

---

## Rodadas já processadas

### UNESP 2026 (9 questões) — Frente 1 e 2 concluídas
Aulas: 320 (expansão EUA), 311 (Sul Global/G20), 316 (DIT), 313 (transgênicos/
CRISPR), 235 (Quatro Brasis), 109 (ilhas havaianas), 117 (textura do solo),
217 (vereda/Cerrado), 107 (RadamBrasil).

### ENEM 2025 (15 questões) — Frente 1 e 2 concluídas
Aulas: 225 (êxodo urbano), 317 (Rio Reno), 101 (conceito de lugar — Frente 1
já coberta antes, Frente 2 adicionada agora), 222 (desmatamento/hidrelétricas
e geotérmica/climatização, 2x), 318 (Macedônia do Norte), 120 (ventos
alísios), 116 (carro elétrico), 230 (cidade sustentável — Frente 1 já
coberta antes, Frente 2 adicionada agora), 114 (intemperismo químico), 220
(pesticidas/polinizadores), 204 (Fazenda Cabaceiras), 227 (verticalização
urbana), 218 (agronegócio/exportações).

### FUVEST 2026 (11 questões) — Frente 1 e 2 concluídas
Aulas: 216 (Mata Atlântica), 121 (Antártida, 2x), 116 (geotérmica Quênia,
2x), 323 (migração venezuelana + Essequibo, 2x), 230 (corrida de detritos),
221 (hidrografia amazônica), 227 (urbanização Censo 2022), 332
(Nagorno-Karabakh).

### UNICAMP 2026 (7 questões) — Frente 1 e 2 concluídas
Aulas: 101 (globalização alimentar), 311 (Norte Global), 325 (zonobiomas
África), 331 (rio Indo), 329 (Irã/eixo da resistência), 218 (seletividade
espacial/Bahia), 228 (rede urbana/Barueri).

---

## Frente 2 — status final (concluída em 20/07/2026)

Todas as 42 questões dos 4 bancos acima (UNESP26 + ENEM25 + FUVEST26 +
UNICAMP26) foram adicionadas ao banco de prática, aplicadas retroativamente
de uma vez. 31 aulas distintas foram tocadas; cada uma manteve exatamente 10
questões (a mais antiga de cada aula — ou a de `id` mais baixo em caso de
empate de ano — foi substituída pela questão nova). Imagens de apoio (24
questões) foram copiadas para `questoes/<ano>ano/img/<aulaNN>/`.

Duas questões do ENEM 2025 (Q3 — conceito de lugar, aula 101; Q8 — cidade
sustentável, aula 230) não tiveram inserção de texto na aula porque a Frente
1 já considerou o tema coberto — só passaram pela Frente 2 agora.

A proposta detalhada de substituição (aula por aula, com o inventário
completo das 10 questões antigas) ficou registrada em
`simulados/frente2-proposta.md`, revisada e aprovada pelo Leandro em
20/07/2026.

Próxima rodada (lembrete automático de janeiro/2027): repetir o passo a
passo acima — Frente 1 e Frente 2 juntas — para qualquer banco novo que
tiver saído.
