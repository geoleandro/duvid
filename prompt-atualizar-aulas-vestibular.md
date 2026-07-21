# Prompt para outra aba — Atualizar aulas Duvid com temas de vestibulares recentes

## Contexto do projeto

**Duvid** (`C:\ApacheXammp\htdocs`) é uma plataforma educacional de Geografia para vestibular. Tem 106 aulas organizadas em 3 anos. Cada aula é um arquivo PHP com conteúdo em HTML estruturado em `<div class="topico">` sequenciais.

O objetivo desta sessão é: dado um conjunto de questões de vestibular recente (ENEM, FUVEST, UNESP, UNICAMP), verificar se o tema de cada questão já está coberto no corpo da aula correspondente. Se não estiver, inserir um ou dois parágrafos naturalmente dentro do tópico mais relacionado — como se sempre tivesse feito parte do texto.

**Não se cria uma seção especial "No vestibular".** O conteúdo novo deve se integrar ao fluxo do texto existente, ampliando o que já está lá.

---

## Estrutura dos arquivos de aula

| Ano | Pasta base | Exemplo aula 107 | Arquivo |
|-----|-----------|-------------------|---------|
| 1º ano (101–134) | `/1ano/Textos1/` | `Texto07/` | `tp7.php` |
| 2º ano (201–236) | `/2ano/Textos2/` | `Texto07/` | `ts7.php` |
| 3º ano (301–336) | `/3ano/Textos3/` | `Texto07/` | `tt7.php` |

**Regra de conversão ID → arquivo:**
- Aula 107 → `C:\ApacheXammp\htdocs\1ano\Textos1\Texto07\tp7.php`
- Aula 217 → `C:\ApacheXammp\htdocs\2ano\Textos2\Texto17\ts17.php`
- Aula 336 → `C:\ApacheXammp\htdocs\3ano\Textos3\Texto36\tt36.php`

O número da pasta usa zero à esquerda (Texto07), o arquivo não (tp7.php).

---

## Fluxo de trabalho para cada aula

### Passo 1 — Ler o arquivo inteiro

Use o Read tool. Entenda o que cada `<div class="topico">` cobre antes de editar qualquer coisa.

### Passo 2 — Verificar se o tema já existe

Procure no texto se o conceito central da questão do vestibular já é mencionado — mesmo que brevemente. Se sim, **não edite nada** nessa aula. Reporte ao usuário: "aula X — tema já coberto".

### Passo 3 — Se o tema não existe, inserir no tópico certo

Identifique o `<div class="topico">` cujo `<h2>` ou conteúdo é mais próximo do tema novo. Adicione um ou dois `<p>` ao final desse tópico, antes do seu `</div>` de fechamento. Use o Edit tool (PHP aceita Edit direto — não use Python).

O texto novo deve:
- Soar como continuação natural do que já está escrito naquele tópico
- Ter 2 a 4 frases, direto ao ponto
- Não usar travessão (— ou –)
- Não citar explicitamente "vestibular" ou "prova" no corpo — o conteúdo deve valer por si mesmo
- Usar o mesmo estilo do texto já existente (terceira pessoa, tom explicativo)

### Passo 4 — Caso o tema exija um tópico novo

Se nenhum tópico existente é adequado para receber o conteúdo (o tema é realmente distinto de tudo que está na aula), crie um novo `<div class="topico">` com `<h2>` e `<p>` próprios, inserido antes do bloco `<!-- TÓPICO N: FINALIZAR -->`. Esse é o caso menos comum — prefira sempre encaixar em tópico existente.

---

## Exemplo — aula 107 / UNESP 2026 Q54 (RadamBrasil)

**Tema da questão:** Por que o projeto RadamBrasil usou radar em vez de sensores ópticos? Resposta: alta nebulosidade na Amazônia impede luz visível; radar atravessa nuvens.

**Arquivo:** `C:\ApacheXammp\htdocs\1ano\Textos1\Texto07\tp7.php`

**Ação:** Ler o arquivo. Verificar se há algum tópico sobre sensoriamento remoto ativo (radar, microondas, cobertura de nuvens). Se não houver:

1. Localizar o tópico que fala sobre tipos de sensores ou aplicações do sensoriamento remoto
2. Adicionar ao final desse tópico, antes do `</div>`:

```html
            <p>Uma limitação importante dos sensores ópticos é a cobertura de nuvens: eles dependem da luz solar refletida e não conseguem registrar superfícies encoberta por nebulosidade densa. O radar resolve esse problema porque emite suas próprias ondas eletromagnéticas e as recebe de volta independente das condições atmosféricas. Foi exatamente por isso que o projeto RadamBrasil (1975) optou pelo radar para mapear o território brasileiro: grande parte da Amazônia fica encoberta por nuvens durante a maior parte do ano, inviabilizando o uso de sensores ópticos convencionais.</p>
```

---

## Mapeamento de referência — UNESP 2026

Use este mapeamento para saber quais aulas verificar nesta sessão:

| Q prova | Tema central | Aula Duvid |
|---------|-------------|------------|
| Q37 | Expansão territorial dos EUA: guerras e compra de terras de potências europeias | 320 |
| Q43 | Sul Global: representatividade de paises perifericos, G20 Brasil/Africa do Sul | 310 ou 311 |
| Q44 | Divisão Internacional do Trabalho: valor agregado, especializacao produtiva | 316 |
| Q47 | Transgênicos e CRISPR: acesso de pequenos agricultores, mecanismos naturais de defesa | 313 |
| Q48 | Quatro Brasis, e-commerce, meio tecnico-cientifico-informacional (Milton Santos) | 235 |
| Q50 | Ilhas havaianas: pontos quentes intraplaca, nao sao limites tectonicos | 109 |
| Q51 | Argila, silte, areia: textura do solo e aplicacao na construcao civil | 117 |
| Q53 | Vereda, buriti: formacao tipica do Cerrado, baixo percentual de area protegida | 216 ou 217 |
| Q54 | RadamBrasil: radar penetra nuvens, sensores opticos nao funcionam na Amazonia | 107 |

---

## Sobre aulas com ID duplo no mapeamento (ex: 310 ou 311)

Leia as duas aulas. Insira apenas naquela cujo conteúdo é mais diretamente relacionado ao tema. Se forem igualmente relevantes, insira nas duas.

---

## Ao final

Reporte para o usuário uma tabela com:
- Aula | Tema | Ação feita (inserido / já coberto / novo tópico criado)
