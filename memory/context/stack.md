# Stack e Convenções — Duvid

## Ambiente
- Local: XAMPP (IS_LOCAL = true, sem senha BD)
- Produção: hospedagem compartilhada, credenciais em config/.env
- Deploy: FTP manual (sem git push para produção)

## Banco de dados
- MySQL, charset utf8mb4
- Conexão: includes/conexao.php (PDO singleton)
- Migrations em: database/migration_*.sql

## Tabelas principais
- alunos, turmas, aulas, progresso_aulas
- globinhos, respostas_aulas, tentativas_login
- tags (criada jun/2026)

## Arquivos críticos
- includes/conexao.php — DB + funções auth
- includes/auth_aluno.php — proteção de páginas
- includes/rate_limit.php — anti-brute-force login
- api/aluno.php — login/cadastro/perfil
- js/duvid-core.js — lógica central JS
- js/duvid-ui.js — UI e animações
- js/jsquestoes-padrao.js — motor de questões
