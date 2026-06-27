# Painel Admin — Moderação do Mural Duvid

## O que já existe
- Tabela `mural` com campos: `id`, `aluno_id`, `tipo`, `conteudo`, `status`, `ip_address`, `criado_em`, `moderado_em`
- `status` padrão: `pendente` — toda contribuição entra aqui e fica invisível até ser aprovada
- API: `POST /api/mural.php` — salva contribuição do aluno autenticado

---

## O que falta construir

### 1. Página de listagem — `paginas/admin/mural.php`

Tabela com filtro por status (pendente / aprovado / recusado):

```php
SELECT m.id, m.tipo, m.conteudo, m.status, m.ip_address,
       m.criado_em, a.nome AS aluno
FROM   mural m
JOIN   alunos a ON a.id = m.aluno_id
WHERE  m.status = 'pendente'          -- troca pelo filtro escolhido
ORDER  BY m.criado_em DESC
LIMIT  50;
```

Colunas da tabela: Data · Aluno · Tipo · Trecho do conteúdo · IP · Ações

### 2. Endpoint de moderação — `api/admin/mural-moderar.php`

```
POST { id: int, acao: "aprovado" | "recusado" }
Requer sessão admin ($_SESSION['admin_logado'])
```

```php
UPDATE mural
SET    status = :acao, moderado_em = NOW()
WHERE  id = :id;
```

### 3. Proteção de rota

Usar `$_SESSION['admin_logado']` já existente no projeto. Adicionar no topo da página:

```php
if (empty($_SESSION['admin_logado'])) {
    header('Location: /admin/login.php'); exit;
}
```

---

## Fluxo completo

```
Aluno clica Globinho
  → abre modal → escolhe tipo → envia texto
  → POST /api/mural.php → INSERT status='pendente'

Professor acessa /paginas/admin/mural.php
  → vê lista de pendentes
  → clica Aprovar ou Recusar
  → POST /api/admin/mural-moderar.php → UPDATE status + moderado_em

(Futuro) Conteúdo aprovado aparece em página pública /mural
```

---

## Prioridade dos tipos para moderar

| Tipo | Ação sugerida |
|------|--------------|
| `questao` | Verificar se tem gabarito e fonte |
| `texto` | Checar plágio / relevância geográfica |
| `pixelart` | Bolsista recebe descrição e cria a arte |
| `sugestao` | Ler e registrar no Notion Roadmap |

---

## Alertas de segurança ao construir

- Endpoint de moderação exige `admin_logado` — nunca expor sem autenticação
- Usar prepared statements no UPDATE (já é padrão no projeto)
- Logar IP das moderações para auditoria futura
- Limitar ações ao próprio domínio (SameSite já configurado no `conexao.php`)

---

## Arquivos a criar

```
paginas/admin/mural.php          ← listagem + botões
api/admin/mural-moderar.php      ← endpoint de UPDATE
```
