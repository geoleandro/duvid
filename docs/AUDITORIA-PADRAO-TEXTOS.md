# Auditoria de Padrão — Textos das Aulas (1º, 2º e 3º ano)

Varredura automatizada de 88 arquivos de texto (`tp*.php`, `ts*.php`, `tt*.php`) contra o checklist de "Revisão Completa" definido no `CLAUDE.md`.

Isto é uma varredura estrutural (regex sobre o HTML/PHP), não uma leitura pedagógica completa de cada texto. Pega bugs objetivos: paleta de cor fora do padrão, bug do `{TITULO}`, travessões, contagem de termos, tempo de leitura e presença dos blocos padronizados. Não substitui a checagem factual e de conteúdo, que só acontece durante a revisão completa de cada texto.

## Legenda das colunas de problema

- **`{TITULO}`**: Bug `{TITULO}` não substituído
- **Paleta**: Paleta fora do padrão (verde/azul/vermelho, ou amarelo repetido fora do bloco de questões do caderno)
- **Divs**: Divs desbalanceados
- **Travessão**: Travessão (—) no texto
- **Termos**: Menos de 7 termos de glossário
- **Leitura**: Tempo de leitura abaixo de 20 min (a partir do Texto13)
- **Sem livros**: Sem bloco "Sugestões de Livros" (a partir do Texto26)
- **Head**: Falta texto-estilo.css e/ou texto-painel.js no <head>

## Resumo geral

- **Total de arquivos analisados:** 88 (1º ano: 28, 2º ano: 30, 3º ano: 30)
- **Totalmente dentro do padrão:** 19 (22%)
- **Com pelo menos 1 problema:** 69 (78%)

| Ano | Total | Dentro do padrão | Com problemas |
|---|---|---|---|
| 1º ano | 28 | 0 | 28 |
| 2º ano | 30 | 2 | 28 |
| 3º ano | 30 | 17 | 13 |

## Frequência por tipo de problema

| Problema | Arquivos afetados |
|---|---|
| `{TITULO}` | 8 |
| Paleta | 56 |
| Divs | 0 |
| Travessão | 23 |
| Termos | 13 |
| Leitura | 18 |
| Sem livros | 15 |
| Head | 0 |

## Textos já 100% dentro do padrão

- **1º ano:** nenhum
- **2º ano:** Texto04, Texto08
- **3º ano:** Texto01, Texto02, Texto03, Texto07, Texto10, Texto15, Texto22, Texto23, Texto25, Texto26, Texto27, Texto28, Texto29, Texto32, Texto33, Texto34, Texto35

## Detalhe — 1º ano

| Texto | Status | Problemas |
|---|---|---|
| Texto01 | ⚠️ | `{TITULO}`, Paleta(g6/b0/r0/y6) |
| Texto02 | ⚠️ | `{TITULO}`, Paleta(g3/b0/r0/y0) |
| Texto03 | ⚠️ | `{TITULO}`, Paleta(g3/b0/r0/y1) |
| Texto04 | ⚠️ | Paleta(g3/b0/r0/y0), Travessão(1), Termos(6) |
| Texto05 | ⚠️ | Paleta(g3/b0/r0/y1) |
| Texto07 | ⚠️ | Paleta(g3/b0/r0/y2), Termos(6) |
| Texto08 | ⚠️ | Paleta(g3/b0/r0/y2), Travessão(5) |
| Texto09 | ⚠️ | Paleta(g3/b0/r0/y1) |
| Texto10 | ⚠️ | Paleta(g3/b0/r0/y1) |
| Texto11 | ⚠️ | Paleta(g3/b0/r0/y1) |
| Texto13 | ⚠️ | Paleta(g3/b0/r0/y1), Travessão(7) |
| Texto14 | ⚠️ | Paleta(g3/b0/r0/y1), Leitura(12min) |
| Texto15 | ⚠️ | Paleta(g3/b0/r0/y1) |
| Texto16 | ⚠️ | Paleta(g4/b0/r1/y1), Leitura(12min) |
| Texto17 | ⚠️ | Paleta(g4/b0/r1/y1), Leitura(15min) |
| Texto19 | ⚠️ | Paleta(g3/b0/r0/y1), Termos(0), Leitura(13min) |
| Texto20 | ⚠️ | Paleta(g3/b0/r0/y1), Termos(0), Leitura(13min) |
| Texto21 | ⚠️ | Paleta(g3/b0/r1/y1), Termos(0), Leitura(14min) |
| Texto22 | ⚠️ | Paleta(g3/b0/r0/y1), Termos(0), Leitura(13min) |
| Texto24 | ⚠️ | Paleta(g1/b0/r0/y3), Travessão(5), Termos(5), Leitura(16min) |
| Texto25 | ⚠️ | Paleta(g1/b0/r0/y3), Travessão(4), Leitura(14min) |
| Texto26 | ⚠️ | Paleta(g1/b0/r0/y3), Travessão(3), Termos(6), Leitura(14min), Sem livros |
| Texto27 | ⚠️ | Paleta(g1/b0/r0/y3), Travessão(3), Termos(3), Leitura(14min), Sem livros |
| Texto29 | ⚠️ | Paleta(g1/b0/r0/y3), Travessão(5), Leitura(17min), Sem livros |
| Texto30 | ⚠️ | Paleta(g1/b0/r0/y3), Travessão(6), Leitura(18min), Sem livros |
| Texto31 | ⚠️ | Paleta(g1/b0/r0/y3), Travessão(6), Termos(5), Leitura(17min), Sem livros |
| Texto32 | ⚠️ | Paleta(g1/b0/r0/y3), Leitura(17min), Sem livros |
| Texto33 | ⚠️ | Paleta(g1/b0/r0/y3), Leitura(18min), Sem livros |

## Detalhe — 2º ano

| Texto | Status | Problemas |
|---|---|---|
| Texto01 | ⚠️ | Paleta(g0/b0/r0/y2), Termos(5) |
| Texto02 | ⚠️ | Paleta(g0/b0/r0/y2), Termos(5) |
| Texto03 | ⚠️ | Paleta(g0/b0/r0/y2), Termos(2) |
| Texto04 | ✅ | — |
| Texto05 | ⚠️ | Travessão(1) |
| Texto07 | ⚠️ | Travessão(4) |
| Texto08 | ✅ | — |
| Texto09 | ⚠️ | Paleta(g0/b0/r0/y2) |
| Texto10 | ⚠️ | Paleta(g0/b0/r0/y2) |
| Texto11 | ⚠️ | Travessão(5) |
| Texto13 | ⚠️ | Paleta(g0/b0/r0/y3), Travessão(7) |
| Texto14 | ⚠️ | Travessão(2) |
| Texto15 | ⚠️ | Travessão(2) |
| Texto16 | ⚠️ | Paleta(g0/b0/r0/y2), Travessão(2) |
| Texto17 | ⚠️ | Travessão(25) |
| Texto18 | ⚠️ | Paleta(g1/b0/r0/y2), Travessão(11) |
| Texto20 | ⚠️ | Paleta(g0/b0/r0/y2) |
| Texto21 | ⚠️ | Travessão(12) |
| Texto22 | ⚠️ | Travessão(38) |
| Texto23 | ⚠️ | Paleta(g0/b1/r0/y2) |
| Texto24 | ⚠️ | Paleta(g0/b1/r0/y2) |
| Texto25 | ⚠️ | Paleta(g0/b0/r0/y2) |
| Texto27 | ⚠️ | Paleta(g0/b0/r0/y3), Sem livros |
| Texto28 | ⚠️ | Paleta(g0/b0/r0/y3), Sem livros |
| Texto29 | ⚠️ | Paleta(g0/b0/r0/y3), Sem livros |
| Texto30 | ⚠️ | Paleta(g0/b0/r0/y3), Sem livros |
| Texto32 | ⚠️ | Paleta(g0/b0/r0/y3), Sem livros |
| Texto33 | ⚠️ | Paleta(g0/b0/r0/y3), Sem livros |
| Texto34 | ⚠️ | Paleta(g0/b0/r0/y3), Sem livros |
| Texto35 | ⚠️ | Paleta(g0/b0/r0/y3), Sem livros |

## Detalhe — 3º ano

| Texto | Status | Problemas |
|---|---|---|
| Texto01 | ✅ | — |
| Texto02 | ✅ | — |
| Texto03 | ✅ | — |
| Texto04 | ⚠️ | Paleta(g0/b0/r0/y2) |
| Texto05 | ⚠️ | Paleta(g0/b0/r0/y2) |
| Texto07 | ✅ | — |
| Texto08 | ⚠️ | Paleta(g0/b0/r0/y2), Travessão(1) |
| Texto09 | ⚠️ | Paleta(g0/b0/r0/y2), Travessão(1) |
| Texto10 | ✅ | — |
| Texto11 | ⚠️ | Paleta(g0/b0/r0/y2) |
| Texto13 | ⚠️ | Paleta(g1/b0/r1/y1) |
| Texto14 | ⚠️ | Paleta(g0/b0/r0/y2), Leitura(19min) |
| Texto15 | ✅ | — |
| Texto16 | ⚠️ | `{TITULO}`, Paleta(g1/b0/r0/y4) |
| Texto17 | ⚠️ | `{TITULO}` |
| Texto18 | ⚠️ | `{TITULO}` |
| Texto20 | ⚠️ | `{TITULO}` |
| Texto21 | ⚠️ | `{TITULO}` |
| Texto22 | ✅ | — |
| Texto23 | ✅ | — |
| Texto25 | ✅ | — |
| Texto26 | ✅ | — |
| Texto27 | ✅ | — |
| Texto28 | ✅ | — |
| Texto29 | ✅ | — |
| Texto31 | ⚠️ | Leitura(19min) |
| Texto32 | ✅ | — |
| Texto33 | ✅ | — |
| Texto34 | ✅ | — |
| Texto35 | ✅ | — |

## Observações e limites da varredura

- O tempo mínimo de leitura de 20 min só é cobrado a partir do Texto13 (regra documentada no `CLAUDE.md`; Texto11 do 3º ano ficou em 16 min por decisão explícita e não entra como problema). Apliquei o mesmo corte por número de texto para 1º e 2º ano por analogia — essa suposição não está confirmada em nenhum documento, os dois anos podem ter tido um cronograma de regras diferente do 3º ano.
- O bloco "Sugestões de Livros" só é cobrado a partir do Texto26 (padrão documentado a partir daí). Mesma ressalva sobre 1º e 2º ano.
- A contagem de termos e travessões é sensível à forma como o texto foi escrito; vale conferir manualmente os casos limítrofes antes de editar.
- O botão flutuante "voltar ao topo" (`w3-pale-green`) foi excluído da checagem de paleta por ser componente de UI do site, não bloco de conteúdo.
- Esta varredura é só diagnóstico — não editou nenhum arquivo.