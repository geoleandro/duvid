# PROMPT — Continuação dos Feedbacks das Questões (1º Ano)

## Contexto do projeto

Site educacional de Geografia para Ensino Médio chamado **Duvid Geografia** (duvid.com.br).  
Cada aula tem um arquivo JSON com 10 questões de vestibular. O sistema exibe, para cada alternativa **errada** que o aluno marca, um **feedback personalizado** explicando por que aquela opção está incorreta.

Os feedbacks das aulas 101 a 109 já estão prontos. Precisamos fazer as aulas **110 a 134**.

---

## Estrutura do JSON

Cada questão é um objeto dentro de um array. O campo `feedbacks` é um objeto onde:

- **A chave** é o índice (0-based) da alternativa **errada**
- **O valor** é o texto do feedback para aquela alternativa
- A alternativa **correta** (`"correta": N`) **NÃO entra** no objeto feedbacks (ela já recebe uma mensagem de parabéns automática)

```json
{
  "id": 1,
  "instituicao": "FUVEST",
  "ano": "2019",
  "pergunta": "...",
  "alternativas": [
    "Alternativa A",   ← índice 0
    "Alternativa B",   ← índice 1
    "Alternativa C",   ← índice 2
    "Alternativa D",   ← índice 3
    "Alternativa E"    ← índice 4
  ],
  "correta": 3,
  "comentario": "...",
  "ajuda": "...",
  "feedbacks": {
    "0": "Texto explicando por que A está errada.",
    "1": "Texto explicando por que B está errada.",
    "2": "Texto explicando por que C está errada.",
    "4": "Texto explicando por que E está errada."
  }
}
```

---

## Regras para escrever os feedbacks

1. **Tom pedagógico, direto, sem ser condescendente** — fala com o aluno como um professor que quer que ele entenda, não que o humilha.
2. **Máximo de 2 frases por feedback.** Seja conciso. Não repita o que o comentário já diz extensamente.
3. **Explique o erro específico** — não diga apenas "está errada". Diga *por quê* está errada.
4. **Use o conteúdo do `comentario`** como base, mas reescreva de forma mais curta e direta, endereçada ao aluno.
5. **Não use a palavra "Incorreta"** no início. Varie: "Essa opção confunde...", "Essa alternativa inverte...", "Não é bem isso...", etc.
6. **Para questões que pedem o item INCORRETO/FALSO**, o feedback das alternativas erradas (que são as corretas) deve dizer algo como: "A questão pede a alternativa INCORRETA, e esta está correta: [explicação]. Portanto, não é a resposta."
7. **Para questões de associação** (marcar I, II, III, IV), o feedback deve indicar qual afirmativa está sendo incluída ou excluída erroneamente.
8. **Não crie feedbacks para a alternativa correta** — apenas para as erradas.

---

## Exemplos de feedbacks bem escritos (do 109.json)

### Exemplo 1 — questão simples
```json
"correta": 3,
"feedbacks": {
  "0": "As divisões internas dos continentes do Hemisfério Norte não foram o ponto de partida de Wegener. Ele se baseou principalmente no encaixe das costas e em evidências como fósseis iguais em continentes separados.",
  "1": "Não há continuidade de sistemas fluviais entre a América e a África, e os rios não foram a evidência usada por Wegener. O que chamou sua atenção foi a semelhança entre os contornos das costas.",
  "2": "Não existem ligações de terra atuais entre os continentes do Hemisfério Sul; eles estão separados pelo oceano. A pista que inspirou Wegener foi justamente o encaixe das costas hoje separadas.",
  "4": "O oceano único (Pantalassa) é parte da reconstrução da Pangeia proposta pela teoria, não a observação inicial que a inspirou. O fator básico foi a semelhança dos contornos das costas da América do Sul e da África."
}
```

### Exemplo 2 — questão que pede item INCORRETO
```json
"correta": 3,
"feedbacks": {
  "0": "A questão pede a alternativa INCORRETA, e esta está correta: os Andes surgiram mesmo do choque entre as placas de Nazca e Sul-Americana no Terciário. Logo, não é a resposta.",
  "1": "A questão pede a INCORRETA, e esta está correta: o Himalaia resultou da colisão entre as porções continentais da Índia e da Ásia. Portanto, não é a resposta.",
  "2": "A questão pede a INCORRETA, e esta está correta: as setas indicam mesmo movimentos convergentes (choque) e divergentes (separação). Não é a resposta procurada.",
  "4": "A questão pede a INCORRETA, e esta está correta: os 'hot spots' são pontos de intenso vulcanismo onde o magma ascende. A única alternativa errada é a que inverte litosfera e astenosfera."
}
```

### Exemplo 3 — questão de associação (I, II, III, IV)
```json
"correta": 0,
"feedbacks": {
  "1": "Inclui a afirmativa IV, que é falsa. A Dorsal Atlântica não resultou de um choque entre placas, e sim da separação (divergência) entre a placa sul-americana e a africana, onde se forma nova crosta oceânica.",
  "2": "Inclui a afirmativa IV (falsa, a Dorsal é divergente, não de choque) e exclui a I, que está correta: os continentes continuam se afastando.",
  "3": "Inclui a afirmativa IV (falsa) e deixa de fora a II, que está correta: rochas mais jovens perto da dorsal indicam placas divergentes.",
  "4": "Marca todas como corretas, mas a IV é falsa: a Dorsal Atlântica forma-se pela separação das placas (limite divergente), não por um choque entre elas."
}
```

---

## Arquivos que precisam de feedbacks (por ordem)

| Arquivo | Tema principal |
|---------|---------------|
| `questoes/1ano/110.json` | Vulcanismo, terremotos, tectonismo |
| `questoes/1ano/111.json` | Dinâmica externa do relevo |
| `questoes/1ano/112.json` | Cartografia (revisão) |
| `questoes/1ano/113.json` | Rochas magmáticas, ciclo das rochas |
| `questoes/1ano/114.json` | Estruturas geológicas e relevo |
| `questoes/1ano/115.json` | Petróleo e fontes de energia I |
| `questoes/1ano/116.json` | Recursos energéticos II |
| `questoes/1ano/117.json` | Solos |
| `questoes/1ano/118.json` | Revisão de relevo |
| `questoes/1ano/119.json` | Elementos climáticos |
| `questoes/1ano/120.json` | Ciclones e massas de ar |
| `questoes/1ano/121.json` | Aquecimento global |
| `questoes/1ano/122.json` | Poluição atmosférica e clima local |
| `questoes/1ano/123.json` | Fatores climáticos (revisão) |
| `questoes/1ano/124.json` | Oceanos |
| `questoes/1ano/125.json` | Plataforma continental e relevo oceânico |
| `questoes/1ano/126.json` | Hidrografia |
| `questoes/1ano/127.json` | Recursos hídricos |
| `questoes/1ano/128.json` | Bacias hidrográficas (revisão) |
| `questoes/1ano/129.json` | Biomas mundiais |
| `questoes/1ano/130.json` | Tipos climáticos mundiais |
| `questoes/1ano/131.json` | Zonas polares e biomas extremos |
| `questoes/1ano/132.json` | Sustentabilidade e questão ambiental |
| `questoes/1ano/133.json` | Acordos ambientais internacionais |
| `questoes/1ano/134.json` | Conferências ambientais (revisão) |

---

## Processo de trabalho sugerido

1. Leia o arquivo JSON completo do arquivo atual
2. Para cada questão, identifique `"correta"` e as alternativas erradas
3. Use o `"comentario"` como base de conteúdo
4. Escreva o objeto `"feedbacks"` com os índices das alternativas erradas
5. Salve o arquivo com os feedbacks inseridos (sem alterar nenhum outro campo)
6. Confirme com um resumo: "Arquivo X concluído — Y questões com feedbacks"

**Faça um arquivo por vez** e aguarde confirmação antes de passar para o próximo.

---

## Validação rápida

Após cada arquivo, verifique:
- O número de chaves em `feedbacks` = número de alternativas - 1 (exceto a correta)
- Nenhuma chave tem o valor de `"correta"`
- JSON válido (sem vírgulas extras, aspas abertas, etc.)
- Cada texto tem no máximo 2 frases curtas

---

## Início

**Comece pelo `questoes/1ano/110.json`** — aulas de Vulcanismo, Tectonismo e Dinâmica Interna do Relevo.  
Leia o arquivo, processe as 10 questões e salve com os feedbacks.
