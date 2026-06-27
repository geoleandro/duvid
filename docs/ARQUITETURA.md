# Arquitetura do Duvid Geografia (versão com PHP + MySQL)

> Última atualização: 2026-06-23

Este documento explica **como o sistema funciona por dentro**. A ideia é que você entenda não só o código, mas o desenho geral: quem faz o quê, por que, e como as partes se conversam.

---

## 1. A grande mudança: de onde vêm os dados

**Antes:** tudo ficava no `localStorage` do navegador. Cada aparelho era um mundo isolado — o aluno trocava de celular e perdia o progresso, e não dava para ter ranking.

**Agora:** o **banco de dados MySQL/MariaDB é a fonte da verdade**. O navegador guarda uma "carteirinha" leve (nome + id do aluno) e um cache temporário em memória para a tela não piscar. Quem manda é o banco.

> Regra de ouro: **se o dado importa de verdade (globinhos, conclusões, conta), ele mora no banco.** O `localStorage` é só conveniência de sessão.

---

## 2. As quatro camadas

```
[ NAVEGADOR ]  →  [ API PHP ]  →  [ PHP COMPARTILHADO ]  →  [ BANCO DE DADOS ]
  HTML + JS         endpoints        conexão + regras           MariaDB
```

### Camada 1 — Navegador (frontend)

O que o aluno vê e clica. É HTML gerado por arquivos `.php` mais módulos JavaScript:

- `duvid-db.js` — o "cérebro" do cliente. Fala com a API, mantém o cache em memória (`_cache`), faz atualização otimista e reconciliação. **É o único que conhece os endpoints.** Cache inclui: `globinhos`, `conclusoes`, `alunoId`, `sessaoAtiva`, `turmaNome`, `turmaCodigo`.
- `duvid-ui.js` — desenha/atualiza a interface (saldo no header, badges, modais, painel home com turma).
- `duvid-core.js` — funções gerais: login (`NomeAlunos`), logout (`executarReset`), **re-login por PIN** (`_mostrarRelogin`, `_executarRelogin`), edição de perfil.
- `duvid-cache.js` — cache de arquivos estáticos (JSON de aulas/questões).
- `jsquestoes-padrao.js`, `jstextos-padrao.js`, `aulas-geral.js`, `glossario.js` — lógica de cada tipo de página.

### Camada 2 — API PHP (endpoints em `/api/`)

Arquivos que recebem um pedido, mexem no banco e devolvem **JSON**. São a única porta de entrada ao banco.

| Endpoint | Métodos | O que faz |
|---|---|---|
| `aluno.php` | GET, POST | GET: lê dados do aluno + `sessao_ativa`; POST login/cadastro ou `acao: 'editar_perfil'` (nome, estado, cidade, escola, `codigo_turma`) |
| `globinhos.php` | POST | Soma globinhos avulsos (questão, glossário, bônus) |
| `progresso.php` | POST | Marca conclusão de aula + soma globinhos numa transação |
| `ranking.php` | GET | Ranking geral ou por código de turma |
| `turma.php` | GET, POST | GET: valida código de turma; POST: cria nova turma (código 6 chars: 3 letras + 3 números) |
| `stats-turma.php` | GET | Histograma anônimo de acertos por turma+aula |
| `reporte.php` | POST | Recebe reporte de erro de questão do aluno; salva na tabela `reportes` |
| `logout.php` | POST | Destroi sessão PHP |
| `respostas.php` | POST | Salva/atualiza `respostas_aulas` com acertos e erradas_json |
| `status-check.php` | GET | Pinga banco; retorna status (verde/vermelho) |

> **Nota:** o método PATCH está bloqueado em hospedagem compartilhada. Toda edição de perfil usa POST com campo `acao: 'editar_perfil'`.

### Camada 3 — PHP compartilhado (`/includes/`)

- `conexao.php` — abre conexão (singleton via `getDB()`), detecta ambiente (local × produção), oferece `jsonResponse()`, `requireAuth()` e `startSecureSession()`.
- `auth_aluno.php` — incluído no topo de páginas que exigem login. Configura cookies de sessão e redireciona para `index.php` se não autenticado.
- `rate_limit.php` — rate limit por IP usando tabela MySQL (`tentativas_login`). Funções: `checarRateLimit()`, `registrarFalha()`, `limparFalhas()`.
- `rpg.php` — `calcularRPG()`: converte globinhos em nível/patente.

### Camada 4 — Banco de dados (MariaDB)

Onde tudo fica guardado. Veja seção 6.

---

## 3. Sessões PHP e cookies

A autenticação usa **sessão PHP** (não apenas localStorage). Isso é essencial para proteger as APIs.

### Configuração de cookies (em `conexao.php` e `auth_aluno.php`)

```php
ini_set('session.cookie_httponly', 1);
ini_set('session.cookie_samesite', IS_LOCAL ? 'Strict' : 'Lax');
ini_set('session.cookie_secure',   IS_LOCAL ? '0' : '1');
ini_set('session.cookie_domain',   IS_LOCAL ? '' : '.duvid.com.br');
```

- O `cookie_domain` com ponto inicial (`.duvid.com.br`) faz a sessão ser aceita tanto em `www.duvid.com.br` quanto em `duvid.com.br`.
- `SameSite=Lax` em produção (era `Strict`) permite que links externos ainda mantenham a sessão.
- **Crítico:** `ini_set` deve ser chamado **antes** de `session_start()`. Chamar depois contamina a resposta JSON com warnings PHP.

### `sessao_ativa` no frontend

O GET `/api/aluno.php?id=N` retorna `sessao_ativa: true/false` — indica se existe uma sessão PHP ativa para aquele usuário no servidor. Isso é diferente de ter dados no `localStorage`.

O `duvid-db.js` armazena em `DuvidDB._cache.sessaoAtiva` e expõe `DuvidDB.temSessao()`.

### Fluxo de re-login (sessão expirada)

Quando `sessao_ativa === false` e o aluno tenta editar o perfil:

1. `prepararTrocaNome()` detecta `!DuvidDB.temSessao()` → abre mini modal com só o campo PIN
2. Aluno digita o PIN → `_executarRelogin()` faz POST login
3. PIN é guardado temporariamente em `window._reloginPinTemp` (1 min) para pré-preencher o modal de edição
4. Callback original (`prepararTrocaNome`) é chamado automaticamente

---

## 4. Os fluxos principais

### 4.1 Cadastro / Login

```
Formulário (home.php)
   → NomeAlunos()              [valida nome, e-mail, PIN, código de turma]
   → DuvidDB.salvarNome()      [POST /api/aluno.php]
   → aluno.php verifica se conta existe:
       - Conta com PIN: autentica só com nome + PIN (e-mail não é necessário)
       - Conta nova:    exige e-mail (único), cria PIN hash, resolve turma_id
   → sessão PHP iniciada
   → resposta JSON [id, saldo, conclusões, turma]
   → _cache preenchido + sessaoAtiva = true
```

### 4.2 Ganhar globinhos numa questão

```
Acertou → executarGatilhoResultado()
        → DuvidDB.addGlobinhos(n)
            1) soma no cache imediatamente (UI não pisca) = otimista
            2) POST /api/globinhos.php → UPDATE … SET globinhos_total = globinhos_total + n
            3) reconcilia cache com total real do banco
```

### 4.3 Concluir uma aula

```
salvarConclusao()
   → POST /api/progresso.php
       TRANSAÇÃO: grava conclusão + soma globinhos + checa conquistas
       Se já concluiu antes → NÃO soma de novo (idempotente)
   → reconcilia cache
```

### 4.4 Editar perfil (nome, estado, turma…)

```
prepararTrocaNome()
   → verifica DuvidDB.temSessao()
       - false → mini modal PIN → re-login → volta aqui
       - true  → abre modal de edição com campos nome/estado/cidade/escola/codigo_turma
   → POST /api/aluno.php { acao: 'editar_perfil', nome, estado, cidade, escola, pin, codigo_turma }
   → aluno.php: valida PIN, resolve turma_id pelo código, UPDATE alunos
```

### 4.5 Ranking

```
GET /api/ranking.php?turma=JTB735
   → SELECT na VIEW "ranking" WHERE turma_codigo = 'JTB735'
   → lista ordenada por globinhos_total
   → subtítulo mostra "Turma Tec em mecatrônica · JTB735" (código discreto)
```

### 4.6 Reportar erro em questão

```
Botão "Reportar problema" (jsquestoes-padrao.js)
   → POST /api/reporte.php { aluno_id, aula_id, questao_num, motivo }
   → INSERT INTO reportes
   → Admin vê na lista de reportes em /admin/
```

---

## 5. Os padrões-chave

**Fonte de verdade no banco.** O cache do navegador é descartável.

**Atualização otimista + reconciliação.** A UI é instantânea; quando o servidor responde, o cache é ajustado ao valor real. `_pendentes` evita que resposta atrasada reverta ganho já aplicado.

**SQL atômico.** `UPDATE … SET globinhos_total = globinhos_total + :n` — o banco soma em sequência, sem perda por concorrência.

**Idempotência.** `progresso.php` não re-pontua aula já concluída. Revisão de questões erradas não re-pontua por questão (flag `emRevisao`).

**Detecção de ambiente.** `IS_LOCAL` detecta XAMPP vs produção pelo `SERVER_NAME` — mesmo código roda nos dois sem edição.

**PATCH bloqueado no host compartilhado.** Toda edição usa POST + campo `acao`.

---

## 6. O banco de dados

### Tabelas principais

| Tabela | Colunas-chave | Notas |
|---|---|---|
| `alunos` | `nome`, `email`, `pin_hash`, `turma_id`, `globinhos_total`, `lvl`, `patente`, `estado`, `cidade`, `escola` | `turma_id` FK para `turmas.id`; `turma ENUM` legado existe mas não é usado |
| `turmas` | `nome`, `codigo` (6 chars), `ano_escolar`, `ativa` | Criada pelo professor; código é projetado na sala |
| `progresso_aulas` | `aluno_id`, `aula_id`, `concluido_texto`, `concluido_questoes`, `globinhos_ganhos` | Chave única `(aluno_id, aula_id)` |
| `respostas_aulas` | `aluno_id`, `aula_id`, `total_questoes`, `acertos`, `erradas_json`, `tentativas` | Alimenta stats-turma e ranking |
| `aulas` | `id`, `titulo`, `ano`, links | Catálogo das aulas |
| `globinhos_log` | `aluno_id`, `quantidade`, `motivo`, `criado_em` | Auditoria de ganhos |
| `conquistas` / `conquistas_alunos` | catálogo e posse | Medalhas do aluno |
| `tentativas_login` | `ip`, `tentativas`, `bloqueado_ate` | Rate limit de login por IP |
| `reportes` | `aluno_id`, `aula_id`, `questao_num`, `motivo`, `criado_em`, `resolvido` | Erros reportados em questões |
| `provas` / `avaliacoes` | — | Base para provas (uso futuro) |

### View `ranking`

Junta `alunos` + `turmas` + contagem de aulas 100% + conquistas + estatísticas de `respostas_aulas` (`total_questoes_respondidas`, `total_acertos`, `media_acertos_pct`) + localização. Ordenada por globinhos. `api/ranking.php` faz só `SELECT * FROM ranking [WHERE ...]`.

### Relações

```
alunos.turma_id → turmas.id
progresso_aulas.aluno_id → alunos.id
progresso_aulas.aula_id  → aulas.id
respostas_aulas.aluno_id → alunos.id
reportes.aluno_id        → alunos.id
tentativas_login (não tem FK — indexada por IP)
```

### Migrações aplicadas

| Arquivo | O que faz |
|---|---|
| `install_completo.sql` | Estrutura inicial |
| `migration_v2_turmas.sql` | Tabela `turmas` + coluna `turma_id` em `alunos` |
| `migration_v3_localizacao.sql` | ADD COLUMN `estado`, `cidade`, `escola` em `alunos` |
| `migration_v3_respostas.sql` | Tabela `respostas_aulas` |
| `migration_login.sql` | Tabela `tentativas_login` para rate limit |
| `migration_reportes.sql` | Tabela `reportes` |
| `migration_tags.sql` | Tags de questões (uso futuro) |
| `migration_simulados.sql` | Base para simulados |

---

## 7. Segurança

- **PIN com hash** (`password_hash`) — nem o banco revela o PIN em texto.
- **Rate limit por IP** (`rate_limit.php` + tabela `tentativas_login`): 10 tentativas → bloqueio de 15 min.
- **Sessão PHP** com `httponly`, `secure`, `samesite=Lax`, `cookie_domain=.duvid.com.br`.
- **`requireAuth()`** em todos os endpoints que alteram dados. Retorna 401 com `login_required: true` se não autenticado.
- **Erro escondido em produção** — falha de conexão mostra mensagem genérica; detalhe técnico só no log do servidor.
- **`.htaccess`** — bloqueia listagem de pastas, acesso direto a `conexao.php`, arquivos `.sql/.log/.env/.py`, páginas de teste (`teste*`) e pasta `database/`.
- **Credenciais no `.env`** — fora do código-fonte, lido por `conexao.php` só em produção.

---

## 8. Estrutura de arquivos relevante

```
/api/           endpoints JSON
/includes/      conexao.php, auth_aluno.php, rate_limit.php, rpg.php
/paginas/       ranking.php, criar-turma.php, stats-turma.php, instrucoes.php
/questoes/      107 arquivos JSON com questões por vestibular/ano
/js/            duvid-core.js, duvid-ui.js, duvid-db.js, duvid-cache.js
                jsquestoes-padrao.js, jstextos-padrao.js, aulas-geral.js
/config/        .env (produção, não vai ao git)
/database/      migrations SQL (não subir ao servidor)
/docs/          esta documentação
/estilos/       index-estilo.css, navbar.css, rpg-sistema.css
/admin/         painel admin (sessão separada $_SESSION['admin_logado'])
```

---

## 9. Operação

- **Versão do PHP:** manter **8.x** no cPanel (Gerenciador de MultiPHP).
- **Deploy:** FTP manual. Não subir: `.git/`, `database/`, `teste-*.html`, `xampp/`. **Sempre subir** o `.htaccess`.
- **Banco:** alterações de estrutura via scripts SQL no phpMyAdmin. Nunca editar direto sem migration.
- **Novo simulado:** criar arquivo JSON em `/questoes/<vestibular><ano>.json` com array `{ num, enunciado, ajuda, resposta, alternativas[], gabarito }`.

---

## 10. Pontuação atual

| Evento | Globinhos |
|---|---|
| Questão correta | +10 |
| Combo 3 seguidas | +5 |
| Combo 5 seguidas | +10 |
| Combo 7+ seguidas | +15 |
| Concluir aula | +20 |
| Aula sem perder vida | +20 |
| **Máx. teórico (10 questões perfeitas)** | **230** |

---

## 11. Glossário rápido

| Termo | Significado |
|---|---|
| Endpoint | Arquivo PHP da API que responde a um pedido |
| JSON | Formato de texto que o PHP devolve e o JS entende |
| Cache | Cópia rápida em memória, descartável |
| Otimista | Atualizar a tela antes da confirmação do servidor |
| Reconciliar | Ajustar o cache ao valor real que o banco devolveu |
| Atômico | Operação que o banco faz de uma vez, sem brecha para corrida |
| Idempotente | Pode rodar de novo sem efeito duplicado |
| Hash | Transformação irreversível (usada para guardar o PIN) |
| View | Consulta salva no banco que se comporta como tabela |
| Singleton | Uma única conexão reaproveitada em toda a requisição |
| sessao_ativa | Flag que indica se existe sessão PHP ativa no servidor para o aluno |
| IS_LOCAL | Constante PHP: `true` no XAMPP, `false` em produção |
| turma_id | FK que liga o aluno a uma turma permanente (muda só via edição de perfil) |
