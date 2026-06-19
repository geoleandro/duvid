# Arquitetura do Duvid Geografia (versão com PHP + MySQL)

Este documento explica **como o sistema funciona por dentro** depois da migração de
`localStorage` para banco de dados. A ideia é que você entenda não só o código, mas
o desenho geral: quem faz o quê, por que, e como as partes se conversam.

---

## 1. A grande mudança: de onde vêm os dados

**Antes:** tudo ficava no `localStorage` do navegador. Cada aparelho era um mundo
isolado — o aluno trocava de celular e perdia o progresso, e não dava para ter
ranking (um navegador não enxerga o outro).

**Agora:** o **banco de dados MySQL/MariaDB é a fonte da verdade**. O navegador só
guarda uma "carteirinha" leve (nome + id do aluno) e um cache temporário em memória
para a tela não piscar. Quem manda é o banco.

> Regra de ouro: **se o dado importa de verdade (globinhos, conclusões, conta), ele
> mora no banco.** O `localStorage` é só conveniência de sessão.

---

## 2. As quatro camadas

```
[ NAVEGADOR ]  →  [ API PHP ]  →  [ PHP COMPARTILHADO ]  →  [ BANCO DE DADOS ]
  HTML + JS         endpoints        conexão + regras           MariaDB
```

### Camada 1 — Navegador (frontend)
O que o aluno vê e clica. É HTML gerado por arquivos `.php` (ex: `home.php`,
`Duvid1Ano.php`) mais módulos JavaScript que controlam a lógica da tela:

- `duvid-db.js` — o "cérebro" do cliente. Fala com a API, mantém o cache em memória
  (`_cache`), faz atualização otimista e reconciliação. **É o único que conhece os
  endpoints.**
- `duvid-ui.js` — desenha/atualiza a interface (saldo no header, badges, modais).
- `duvid-core.js` — funções gerais (login `NomeAlunos`, logout `executarReset`, etc.).
- `duvid-cache.js` — cache de arquivos estáticos (JSON de aulas/questões).
- `jsquestoes-padrao.js`, `jstextos-padrao.js`, `aulas-geral.js`, `glossario.js` —
  lógica de cada tipo de página (quiz, texto, lista de aulas, glossário).

### Camada 2 — API PHP (os endpoints)
Arquivos pequenos em `/api/` que recebem um pedido, mexem no banco e devolvem **JSON**.
São a única porta de entrada ao banco — o navegador nunca toca no MySQL direto.

- `api/aluno.php` — cadastro/login (POST), leitura do aluno (GET), edição de perfil (PATCH: nome, estado, cidade, escola — exige PIN).
- `api/globinhos.php` — soma globinhos avulsos (por questão, glossário, bônus).
- `api/progresso.php` — marca conclusão de aula **e** soma os globinhos da conclusão,
  tudo numa transação.
- `api/ranking.php` — devolve o ranking (geral ou por turma).
- `api/turma.php` — verifica código de turma (GET) ou cria nova turma (POST), gerando código único de 6 caracteres (3 letras + 3 números).
- `api/stats-turma.php` — estatísticas anônimas de uma turma por aula (GET): distribuição de acertos (0–10), média da sala, total de alunos. Sem nomes.

### Camada 3 — PHP compartilhado (`/includes/`)
Código reaproveitado por todos os endpoints:

- `includes/conexao.php` — **abre a conexão com o banco** (padrão *singleton* via
  `getDB()`), **detecta o ambiente** (local x produção) e oferece o `jsonResponse()`.
- `includes/rpg.php` — `calcularRPG()`: converte globinhos em nível/patente.

### Camada 4 — Banco de dados (MariaDB)
Onde tudo fica guardado de verdade. Tabelas + uma *view* de ranking (detalhe na seção 6).

---

## 3. Por que PHP? (e por que a versão importa)

O PHP roda **no servidor**, não no navegador. Isso é essencial por dois motivos:

1. **Segurança:** a senha do banco e as regras ficam no servidor. O aluno nunca vê
   o código nem consegue burlar (ex: fingir que concluiu 50 aulas).
2. **Autoridade:** regras como "e-mail e PIN são obrigatórios" ou "não pontuar a
   mesma conclusão duas vezes" precisam ser garantidas no servidor, porque o
   JavaScript do navegador pode ser adulterado.

O código usa **tipagem moderna** (ex: `function calcularRPG(int $globinhos): array`).
Isso exige **PHP 7.0 ou superior**. Foi exatamente o que quebrou na publicação: o
servidor estava num PHP 5.x antigo, que não entende essa sintaxe → todos os
endpoints davam *Parse error*. Solução: subir a versão do PHP do host para 8.x.

---

## 4. Os fluxos principais (passo a passo)

### 4.1 Cadastro / Login
```
Formulário (home.php)
   → NomeAlunos()            [duvid-core.js: valida nome, e-mail, PIN, código de turma]
   → DuvidDB.salvarNome()    [duvid-db.js: monta o payload e faz POST]
   → POST /api/aluno.php      [valida no servidor, resolve a turma pelo código,
                               cria a conta OU faz login conferindo o PIN]
   → resposta JSON           [id, saldo, conclusões, turma]
   → _cache preenchido + tela atualizada
```
O e-mail é único, o PIN é guardado como **hash** (nunca em texto). Conta antiga sem
PIN "reivindica" credenciais no primeiro login.

### 4.2 Ganhar globinhos numa questão
```
Acertou → executarGatilhoResultado()   [duvid-ui.js]
        → DuvidDB.addGlobinhos(n)       [duvid-db.js]
            1) soma no cache na hora (UI não pisca) = atualização OTIMISTA
            2) POST /api/globinhos.php  → UPDATE alunos SET globinhos_total = globinhos_total + n
            3) quando responde, RECONCILIA o cache com o total real do banco
```

### 4.3 Concluir uma aula (texto ou questões)
```
salvarConclusao()             [duvid-db.js: marca no cache + POST]
   → POST /api/progresso.php   [TRANSAÇÃO: grava conclusão + soma globinhos +
                                checa conquistas; se já concluiu, NÃO soma de novo]
   → reconcilia cache
```

### 4.4 Abrir a lista de aulas (cards coloridos)
```
DOMContentLoaded
   → await DuvidDB.pronto          [espera o sincronizarComBanco terminar]
       → GET /api/aluno.php?id=...  [traz saldo + conclusões do banco]
   → carregarAulas()               [aulas-geral.js: pinta cada card conforme
                                    estaConcluido() lê do cache]
```
> Detalhe que já corrigimos: o `DuvidDB.pronto` precisa existir **antes** da página
> esperar por ele. Como os scripts usam `defer`, criamos a promessa no carregamento
> do `duvid-db.js`, não dentro de um `DOMContentLoaded` — senão os cards renderizavam
> cinzas antes do banco responder.

### 4.5 Ranking
```
GET /api/ranking.php?turma=GEO-1A-2026
   → SELECT na VIEW "ranking" filtrando pelo código da turma
   → lista ordenada por globinhos
```

---

## 5. Os padrões-chave (o "porquê" das decisões)

**Fonte de verdade no banco.** O cache do navegador é descartável; no próximo
`sincronizarComBanco` o banco vence.

**Atualização otimista + reconciliação.** Para a UI ser instantânea, somamos no
cache antes da resposta do servidor. Quando a resposta chega, ajustamos o cache ao
valor real. Um contador de chamadas em voo (`_pendentes`) evita que uma resposta
atrasada reverta um ganho já aplicado, e quando todas terminam o banco vira a
verdade absoluta (corrige qualquer excesso otimista).

**SQL atômico contra "corrida".** Em vez de ler o total, somar no PHP e gravar
(o que faz duas chamadas paralelas se sobrescreverem), usamos
`UPDATE ... SET globinhos_total = globinhos_total + :n`. O próprio banco soma em
sequência, sem perder pontos.

**Idempotência / anti-dupla-contagem.** O `progresso.php` confere se a aula já foi
concluída e, se sim, não soma de novo. A revisão de questões erradas não re-pontua
por questão (flag `emRevisao`).

**Detecção de ambiente.** O `conexao.php` olha o `SERVER_NAME`: `localhost` →
banco do XAMPP; domínio real → banco de produção. O mesmo código roda nos dois
lugares sem edição manual.

---

## 6. O banco de dados

Tabelas principais:

- **alunos** — quem é o aluno: `nome`, `email`, `pin_hash`, `turma_id`,
  `globinhos_total`, `lvl`, `patente`, `estado` (CHAR 2), `cidade`, `escola`.
  Os três últimos são opcionais — habilitam o ranking nacional.
- **turmas** — `nome`, `codigo` (o que o aluno digita no cadastro), `ano_escolar`, `ativa`.
  Qualquer pessoa pode criar uma turma via `paginas/criar-turma.php`.
- **progresso_aulas** — uma linha por aluno+aula: `concluido_texto`,
  `concluido_questoes` e os globinhos ganhos. Chave única `(aluno_id, aula_id)`.
- **respostas_aulas** — uma linha por aluno+aula com `total_questoes`, `acertos`,
  `erradas_json` e `tentativas`. Alimenta o `api/stats-turma.php`.
- **aulas** — catálogo das aulas (id, título, ano, links).
- **globinhos_log** — auditoria: cada ganho de globinho registrado.
- **conquistas** e **conquistas_alunos** — catálogo de medalhas e quais cada aluno tem.
- **provas** / **avaliacoes** — base para provas (uso futuro).

Relações importantes: `alunos.turma_id → turmas.id`;
`progresso_aulas.aluno_id → alunos.id`; `progresso_aulas.aula_id → aulas.id`;
`respostas_aulas.aluno_id → alunos.id`.

**View `ranking`** — junta aluno + turma + contagem de aulas 100% + conquistas +
estatísticas de `respostas_aulas` (`total_questoes_respondidas`, `total_acertos`,
`media_acertos_pct`) + localização (`estado`, `cidade`, `escola`).
Ordenada por globinhos. O `api/ranking.php` só faz `SELECT * FROM ranking [WHERE ...]`.

---

## 7. Segurança (o que protege o sistema)

- **PIN com hash** (`password_hash`) — nem você lê o PIN do aluno no banco.
- **Erro escondido em produção** — falha de conexão mostra mensagem genérica ao
  usuário e grava o detalhe só no log do servidor; o detalhe técnico só aparece no
  ambiente local.
- **`.htaccess`** — bloqueia listagem de pastas, acesso direto ao `conexao.php`,
  arquivos `.sql/.log/.env/.py`, páginas de teste (`teste*`) e a pasta `database/`.
- **Senha do banco no `conexao.php`** — fica no servidor; o PHP é executado, nunca
  servido como texto, então ninguém vê o conteúdo do arquivo pelo navegador.

---

## 8. Operação (publicar e manter)

- **Versão do PHP:** mantenha **8.x** no painel da hospedagem (cPanel →
  "Selecionar versão do PHP" / "Gerenciador de MultiPHP").
- **Mesmo código nos dois ambientes:** não troque nada ao subir; o `conexao.php`
  escolhe o banco sozinho pelo `SERVER_NAME`.
- **Banco:** alterações de estrutura vão por scripts de migração no phpMyAdmin.
  Migrações aplicadas até agora:
  - `migration_v2_turmas.sql` — criação da tabela `turmas` e coluna `turma_id` em `alunos`
  - `migration_v3_localizacao.sql` — ADD COLUMN `estado`, `cidade`, `escola` em `alunos`
  - VIEW `ranking` — sempre atualizar via `CREATE OR REPLACE VIEW ranking AS ...` (ver `schema.sql`)
- **NÃO suba:** `.git/`, `database/` (scripts já aplicados), `teste-*.html`,
  `sync_site_to_htdocs.py`, `xampp/`. **Suba sempre** o `.htaccess` (arquivo oculto).

### Páginas novas (junho 2026)
- `paginas/criar-turma.php` — professor ou aluno cria turma, recebe código de 6 chars para projetar na sala
- `paginas/ranking.php` — redesenhado: tabs Minha Turma / Geral, cards RPG com patente, barra de acertos, escola e localização
- `paginas/stats-turma.php` — histograma anônimo de desempenho por turma+aula (para o professor)

### Pontuação atual (junho 2026)
- **10 globinhos** por questão correta (`PONTOS_POR_QUESTAO`)
- Combos: +5 (3 seguidas), +10 (5 seguidas), +15 (7+ seguidas)
- +20 ao concluir a aula; +20 se não perder nenhuma vida
- Máximo teórico em 10 questões perfeitas: **230 globinhos**

---

## 9. Glossário rápido

- **Endpoint:** um arquivo PHP da API que responde a um pedido (ex: `aluno.php`).
- **JSON:** formato de texto que o PHP devolve e o JavaScript entende.
- **Cache:** cópia rápida em memória, descartável.
- **Otimista:** atualizar a tela antes da confirmação do servidor.
- **Reconciliar:** ajustar o cache ao valor real que o banco devolveu.
- **Atômico:** operação que o banco faz "de uma vez só", sem brecha para corrida.
- **Idempotente:** pode rodar/chamar de novo sem efeito duplicado.
- **Hash:** transformação irreversível (usada para guardar o PIN com segurança).
- **View:** consulta salva no banco que se comporta como uma tabela.
- **Singleton:** uma única conexão reaproveitada em toda a requisição.
