# Duvid Geografia

**URL:** duvid.com.br  
**Instagram:** @duvidgeo  
**Stack:** PHP + MySQL + JS vanilla + W3.CSS  
**Deploy:** FTP manual para hospedagem compartilhada  

## Roadmap Notion
https://app.notion.com/p/4773afa5a43947e2988d7bce25f6a2e6

## Status atual (jun/2026)
- Segurança: ✅ sessão PHP, .env, rate limit, headers
- Admin/Professor: ✅ feito
- Simulado único: 🔜 próxima prioridade alta
- Gamificação: streak, Zelda, Globinho Dress Up — na fila
- Instagram: grid pronto, conta ainda não criada

## Arquitetura
- Questões em JSON: /questoes/**/*.json (107 arquivos, tags normalizadas)
- APIs: /api/ (aluno, progresso, globinhos, respostas, logout, ranking)
- Auth: PHP session para aluno, sessão separada para admin
- Banco: MySQL via PDO singleton (includes/conexao.php)
- Moeda: globinhos (XP), tabela `globinhos` no banco
- Turmas: código alfanumérico, turma "LIVRE" para alunos sem turma

## Convenções de código
- `requireAuth()` — exige sessão válida, retorna aluno_id
- `startSecureSession()` — inicia sessão sem exigir auth
- `jsonResponse($dados, $status)` — resposta JSON padronizada
- `IS_LOCAL` — true no XAMPP, false em produção
