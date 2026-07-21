# Prompt para outra aba — criar simulados/bancos/unesp2026-geografia.json

## Contexto do projeto

Você está trabalhando no projeto **Duvid** (`C:\ApacheXammp\htdocs`), plataforma educacional de Geografia para vestibular (PHP + MySQL). O arquivo de referência de formato é:

```
C:\ApacheXammp\htdocs\simulados\bancos\fuvest2026-geografia.json
```

Leia esse arquivo antes de começar para garantir que o formato está correto.

---

## Tarefa

Crie o arquivo:

```
C:\ApacheXammp\htdocs\simulados\bancos\unesp2026-geografia.json
```

usando Python `json.load()` / `json.dump()` (nunca Edit direto em JSON). O arquivo deve ser um array JSON com as 9 questões de geografia da UNESP 2026 1ª fase descritas abaixo.

---

## Estrutura de cada questão

```json
{
  "id": 1,
  "instituicao": "UNESP",
  "ano": "2026",
  "dificuldade": "media",
  "tags": ["tag1", "tag2"],
  "texto_apoio": "texto/contexto da questão ou null",
  "fonte_apoio": "fonte do texto ou null",
  "pergunta": "enunciado da pergunta",
  "alternativas": ["A", "B", "C", "D", "E"],
  "correta": 0,
  "comentario": "explicação da resposta correta (2-4 frases)",
  "ajuda": "dica que guia sem revelar a resposta",
  "imagem_apoio": null,
  "feedbacks": {
    "0": "Por que A está errada (2 frases).",
    "2": "Por que C está errada (2 frases)."
  }
}
```

**Regras críticas de feedbacks:**
- A chave do `feedbacks` correspondente à alternativa CORRETA (campo `correta`) NUNCA deve aparecer
- Cada feedback: exatamente 2 frases
- PROIBIDO usar travessão (— ou –) nos textos
- `correta` é índice 0-based (A=0, B=1, C=2, D=3, E=4)

---

## As 9 questões

### Q1 — Questão 37 da prova (EUA: expansão territorial)

**Imagem:** Mapa do crescimento do território dos EUA (Atlas of the North American Indian, 2000. Adaptado.)

**Pergunta:** O mapa mostra que

**Alternativas:**
- (A) as guerras internas e externas e a compra de terras junto a outras potências europeias definiram os limites do território estadunidense.
- (B) a ocupação territorial estadunidense iniciou-se no Leste, durante a colonização inglesa, e avançou para o Oeste após a vitória nortista na Guerra de Secessão.
- (C) as anexações das terras indígenas ao território estadunidense ocorreram por meio de acordos e negociações pacíficas ao longo dos séculos XVIII e XIX.
- (D) as anexações, por meio da compra, de terras antes pertencentes ao México completaram o processo de expansão do território estadunidense.
- (E) a diversidade da colonização europeia na América do Norte, entre os séculos XVII e XIX, impediu a completa unificação territorial estadunidense.

**Gabarito:** A (índice 0)

**Aula Duvid relacionada:** 320 (América do Norte: EUA)

**Imagem_apoio:** `"unesp/unesp2026/unesp26q37.png"` (mapa — arquivo ainda não existe, só registrar o caminho)

---

### Q2 — Questão 43 da prova (Sul Global / G20)

**Texto_apoio:**
> No cenário geopolítico contemporâneo, marcado por mudanças e desafios significativos, o conceito de "Sul Global" vem ganhando destaque como um vetor crucial para o debate sobre desenvolvimento inclusivo e equitativo. Esse termo transcende as fronteiras geográficas tradicionais, reunindo países que compartilham desafios socioeconômicos similares e uma história de marginalização nas relações internacionais. A presidência brasileira do G20, entre 2023 e 2024, seguida pela da África do Sul, simboliza a emergência das nações do "Sul Global" no cenário mundial, redefinindo as dinâmicas de cooperação internacional.

**Fonte:** https://relacoesexteriores.com.br. Adaptado.

**Pergunta:** A construção geopolítica do termo "Sul Global" evidencia uma

**Alternativas:**
- (A) maior representatividade e relevância para os países periféricos no cenário internacional.
- (B) autonomia ao mundo oriental para o crescimento econômico sustentável.
- (C) participação político-militar dos países emergentes em decisões de âmbito global.
- (D) transferência do centro do poder mundial para os países subdesenvolvidos do hemisfério Sul.
- (E) menor dependência política e econômica dos países ocidentais perante os organismos internacionais.

**Gabarito:** A (índice 0)

**Aula Duvid relacionada:** 310 ou 311 (Geopolítica e regionalização mundial)

---

### Q3 — Questão 44 da prova (Charge DIT)

**Texto_apoio:** Charge do cartunista Adão Iturrusgarai (https://umbrasil.com) — imagem mostrando a Divisão Internacional do Trabalho de forma irônica.

**Pergunta:** A charge ironiza

**Alternativas:**
- (A) o cálculo do Índice de Desenvolvimento Humano Ajustado à Desigualdade, revelador do grau de concentração de renda entre as pessoas de um país.
- (B) o neocolonialismo como expressão de dominação econômica, sujeitando países agroexportadores à importação de bens industrializados.
- (C) a desigual Divisão Internacional do Trabalho, enfatizando a especialização produtiva dos países por meio do valor agregado dos produtos.
- (D) a ordem mundial bipolar entre distintos modelos de produção, reforçando desigualdades entre países desenvolvidos e países subdesenvolvidos.
- (E) o monopólio industrial como indutor de novos mercados, condição para que países subdesenvolvidos tenham acesso a bens de consumo duráveis.

**Gabarito:** C (índice 2)

**Aula Duvid relacionada:** 316 (Comércio multilateral / DIT)

**Imagem_apoio:** `"unesp/unesp2026/unesp26q44.png"` (charge — ainda não existe)

---

### Q4 — Questão 47 da prova (Transgênicos / CRISPR)

**Texto_apoio:**
> Maquiando os transgênicos — Mostarda mais palatável que alface? Indústria alimentícia usa técnica premiada com o Nobel para tornar alimentos mais atrativos e tentar quebrar resistência de parte dos consumidores.
>
> O primeiro protótipo tem previsão de lançamento no mercado ainda em 2025: uma folha de mostarda geneticamente modificada para remover sua picância. A proposta foi originalmente desenvolvida pela startup de tecnologia agrícola Pairwise, que firmou um acordo exclusivo de licenciamento de produto com a multinacional alemã Bayer para desenvolver e comercializar o vegetal. As modificações foram feitas a partir de uma técnica capaz de alterar com alta precisão o DNA de animais, plantas e microrganismos, a mesma que, em 2020, rendeu às pesquisadoras Emmanuelle Charpentier e Jennifer A. Doudna o Prêmio Nobel de Química.

**Fonte:** Raoni Schroeder. https://cienciahoje.org.br, maio de 2025. Adaptado.

**Pergunta:** Sob os pontos de vista da geografia e da biologia, a produção de gêneros agrícolas transgênicos promove, respectivamente,

**Alternativas:**
- (A) a redefinição do conceito de espaço rural e a validade da teoria da evolução das espécies na contemporaneidade.
- (B) o desenvolvimento de novas relações de trabalho no campo e a redução dos impactos antrópicos sobre os espaços naturais.
- (C) a ineficácia da modernização do campo diante da mão de obra não qualificada e a adaptação de espécies nativas em novos ambientes de cultivo.
- (D) a incorporação de saberes tradicionais nas áreas agrícolas e a interrupção de ciclos biogeoquímicos associados à vida vegetal.
- (E) a dificuldade no acesso de pequenos agricultores às sementes produzidas em laboratório e a descaracterização de mecanismos naturais de defesa contra predadores.

**Gabarito:** E (índice 4)

**Aula Duvid relacionada:** 313 (Agropecuária mundial / modernização do campo)

---

### Q5 — Questão 48 da prova (4 Brasis / e-commerce / MTCI)

**Texto_apoio:**
> O mapa a seguir está dividido segundo a regionalização dos Quatro Brasis e apresenta os prazos de entrega do comércio eletrônico no Brasil, em 2023.

**Fonte:** Igor Venceslau. Confins, no 65, 2024. Adaptado.

**Pergunta:** A variação no prazo de entrega do comércio eletrônico no território brasileiro e a regionalização adotada na elaboração desse mapa são determinadas

**Alternativas:**
- (A) pela delimitação das unidades político-administrativas.
- (B) pelo poder de compra equiparado entre as unidades da federação.
- (C) pela desconcentração das unidades produtivas no país.
- (D) pela densidade do meio técnico-científico-informacional.
- (E) pelo grau de desenvolvimento socioambiental das cidades.

**Gabarito:** D (índice 3)

**Aula Duvid relacionada:** 235 (Brasil na globalização / MTCI / Milton Santos)

**Imagem_apoio:** `"unesp/unesp2026/unesp26q48.png"` (mapa 4 Brasis — ainda não existe)

---

### Q6 — Questão 50 da prova (Ilhas havaianas / pontos quentes)

**Texto_apoio:**
> Esquema da formação da cadeia de ilhas havaianas. (www.notasgeo.com.br. Adaptado.) — Ma: milhões de anos.

**Pergunta:** Considerando o dinamismo da crosta terrestre, a formação apresentada no esquema é motivada por

**Alternativas:**
- (A) limites tectônicos transcorrentes.
- (B) limites tectônicos convergentes.
- (C) pontos quentes intraplaca.
- (D) forças modeladoras exógenas.
- (E) limites tectônicos divergentes.

**Gabarito:** C (índice 2)

**Aula Duvid relacionada:** 109 (Deriva continental e tectônica de placas)

**Imagem_apoio:** `"unesp/unesp2026/unesp26q50.png"` (esquema ilhas — ainda não existe)

---

### Q7 — Questão 51 da prova (Experimento tipos de solo)

**Texto_apoio:**
> Para fazer um teste de solo em um recipiente, primeiramente preencha-o até a metade com a amostra de solo. Em seguida, preencha o espaço restante com água, deixando um pouco de ar na parte superior. Após tampar o recipiente, agite-o vigorosamente até que todos os torrões de solo sejam desfeitos. Deixe o recipiente em um local onde não haja perturbação. Após 24 horas, o solo terá se sedimentado em camadas visíveis de argila, silte e areia. Ao medir as proporções relativas dessas três texturas no solo, é possível determinar qual tipo de solo você possui.

**Fonte:** https://ameliamurtha.wordpress.com. Adaptado.

**Pergunta:** Uma aplicação prática do experimento descrito é

**Alternativas:**
- (A) a investigação das condições para a formação de laterita no solo.
- (B) a investigação sobre a estratificação de voçorocas no solo.
- (C) o prognóstico das condições de assoreamento do solo.
- (D) a classificação dos diferentes tipos de horizontes do solo.
- (E) o estudo na construção civil sobre a estabilidade do solo.

**Gabarito:** E (índice 4)

**Aula Duvid relacionada:** 117 (Solos)

---

### Q8 — Questão 53 da prova (Vereda / buriti / Cerrado)

**Texto_apoio:**
> Uma vereda bordada à mão por uma família de Pirapora, no norte de Minas Gerais, acaba de ganhar o mundo. A obra "Vereda do Galhão", feita com agulhas, lãs, algodão e fios de seda, foi escolhida como presente oficial do presidente do Brasil ao imperador do Japão. Ao longo de oito meses de trabalho, a família retratou uma vereda real da região onde nasceram, cercada por buritis, palmeiras majestosas que só brotam onde há água. "O buriti nasce onde há nascente. Ele não cresce em qualquer lugar, apenas onde há vida. Essa planta é símbolo de resistência e cuidado. Ao bordar essa vereda, a gente quis mostrar a beleza, mas também chamar atenção para a urgência de preservar", contou Sávia Dumont, uma das autoras do bordado.

**Fonte:** https://cidadecult.com.br, 19.05.2025. Adaptado.

**Pergunta:** O bioma representado por essa obra é

**Alternativas:**
- (A) a Mata dos Cocais, caracterizada pelo predomínio de floresta ombrófila aberta.
- (B) o Cerrado, formado por vastos espaços abertos cobertos por plantas herbáceas.
- (C) o Cerrado, comprometido pela baixa porcentagem de área sob proteção integral.
- (D) a Caatinga, formada por alta diversidade de espécies endêmicas ameaçadas.
- (E) a Caatinga, caracterizada pela feição esbranquiçada dos troncos das plantas.

**Gabarito:** C (índice 2)

**Aula Duvid relacionada:** 216 ou 217 (Vegetação brasileira / Domínios morfoclimáticos)

---

### Q9 — Questão 54 da prova (RadamBrasil / sensoriamento remoto)

**Texto_apoio:**
> "O mais ousado projeto desenvolvido pelo homem depois do Apollo". Era assim que, em 23 de outubro de 1976, a revista Manchete descrevia, com o ufanismo da época, o projeto RadamBrasil. Implementado em 1975, o RadamBrasil era uma extensão do projeto Radam, sigla de Radar na Amazônia, criado cinco anos antes, e dava início a uma missão ainda mais audaciosa: mapear todo o território brasileiro e seus recursos naturais. Os relatórios técnicos e mapas do projeto RadamBrasil foram reunidos nos 38 volumes da série Levantamento de recursos naturais, disponíveis na biblioteca do Instituto Brasileiro de Geografia e Estatística (IBGE). As imagens de radar, impressas originalmente em papel comum e fotográfico, foram digitalizadas pelo Serviço Geológico do Brasil (SGB), por meio do projeto Radam-D, a partir de 2004.

**Fonte:** Suzel Tunes. https://revistapesquisa.fapesp.br, 17.05.2025. Adaptado.

**Pergunta:** No exercício do sensoriamento remoto, diferentes sensores podem ser utilizados. A opção pelo uso do radar no projeto RadamBrasil, conforme mencionado no excerto, é explicada pela

**Alternativas:**
- (A) dimensão continental do Brasil, característica que demandou radares operando com frequências na faixa da luz visível para otimizar os recursos financeiros empregados.
- (B) grande distância em relação ao solo dos voos civis no Brasil, condição que prejudicaria a nitidez das imagens em sensores ópticos eletromagnéticos.
- (C) rapidez no processamento das imagens geradas, condição que dispensou revelações fotográficas com sensores operando com frequências na faixa da luz visível.
- (D) diversidade de macroformas do relevo ao longo do território brasileiro, característica que impediria o uso de sensores ópticos pela variação na distância focal.
- (E) alta nebulosidade em parcelas do território brasileiro, característica que traria dificuldades de registro em sensores que não operam com ondas eletromagnéticas.

**Gabarito:** E (índice 4)

**Aula Duvid relacionada:** 107 (Sensoriamento remoto e cartografia)

---

## Passo a passo

1. Leia `simulados/bancos/fuvest2026-geografia.json` para verificar o formato exato (especialmente campos `null` vs string vazia)
2. Crie o arquivo em Python com `json.dump(..., ensure_ascii=False, indent=2)`
3. Valide: nenhuma chave de `feedbacks` pode coincidir com o valor de `correta` da mesma questão
4. Valide: nenhum travessão (— ou –) nos textos de feedbacks, comentarios ou ajuda

## Mapeamento questão → aula Duvid (para o campo `tags`)

| Q (id) | Q prova | Tema | Aula Duvid |
|--------|---------|------|------------|
| 1 | 37 | Expansão territorial EUA | 320 |
| 2 | 43 | Sul Global, G20 | 310/311 |
| 3 | 44 | Charge DIT | 316 |
| 4 | 47 | Transgênicos, CRISPR | 313 |
| 5 | 48 | 4 Brasis, e-commerce, MTCI | 235 |
| 6 | 50 | Ilhas havaianas, pontos quentes | 109 |
| 7 | 51 | Experimento tipos de solo | 117 |
| 8 | 53 | Vereda, buriti, Cerrado | 216/217 |
| 9 | 54 | RadamBrasil, sensoriamento remoto | 107 |
