# TASKS — Duvid Geografia
> Máximo 3 frentes ativas. Atualizado: 2026-06-21
> Notion Roadmap: https://app.notion.com/p/4773afa5a43947e2988d7bce25f6a2e6

---

## 🔴 ESTA SEMANA (Ativas)

- [ ] **Subir arquivos de segurança no FTP** `Infraestrutura`
  - includes/auth_aluno.php, conexao.php, rate_limit.php
  - api/aluno.php, logout.php, globinhos.php, progresso.php, respostas.php
  - paginas/ranking.php, criar-turma.php, stats-turma.php
  - home.php, js/duvid-core.js, .htaccess, arquivosphp/logingrupos.php
  - Testar: logout → login → ranking (sem loop)

- [ ] **Simulado único com filtro por vestibular** `Conteúdo` `Alta`
  - simulado.php + PHP lê JSONs embaralhados
  - JS igual ao jsquestoes-padrao.js
  - Salva em respostas_simulados (aluno_id, vestibular, ano, acertos, total)
  - *Bolsista converte HTMLs antigos para JSON padrão*

- [ ] **Feedbacks das questões — formatação** `Conteúdo`
  - Verificar aulas 110–130 com problemas de renderização
  - Comentários já limpos nos JSONs (HTML normalizado)

---

## 🟡 PRÓXIMA (Fila)

- [ ] Streak diário de globinhos `Gamificação` `Média`
  - Contador no DuvidDB, reseta meia-noite
  - Bônus dia 3 = +10, dia 7 = +30, badge no header

- [ ] Tela de recompensa estilo Zelda `Gamificação`
  - Modal com baú ao finalizar aula, fanfarra 3s
  - Exibe habilidade desbloqueada + globinhos caindo

- [ ] Globinho Dress Up interativo `Gamificação`
  - Componente nos textos das aulas

- [ ] Jessica sprite walker `Gamificação`
  - Implementação do personagem andando na tela

- [ ] Onboarding aluno novo (Shepherd.js) `Comunidade`

- [ ] Catalogar aulas sem questões `Conteúdo` `Bolsista`

- [ ] Página de Status do Site `Infraestrutura`
  - status.php pinga banco + APIs, semáforo verde/amarelo/vermelho

- [ ] Testar site em celulares diferentes `Infraestrutura` `Bolsista`

- [ ] Criar conta @duvid no Instagram `Instagram`
  - Grid de lançamento v2 pronto no Notion

---

## ⬜ IDEIAS / FUTURO

- [ ] Batalha por turnos — RPG de questões `Gamificação`
- [ ] Cartas colecionáveis geográficas `Gamificação`
- [ ] Ranking interescolar `Comunidade`
- [ ] Sistema de colaboração de professores `Comunidade`
- [ ] Comentários dos alunos nos textos `Comunidade`
- [ ] Personagem Globinho temático por bloco `Gamificação`
- [ ] Conquistas compartilháveis para Stories `Instagram`

---

## ✅ FEITO

- [x] Security hardening — sessão PHP nas APIs
- [x] .env para credenciais do banco
- [x] Rate limit no login (10 tentativas / 15 min)
- [x] Proteção de páginas (ranking, criar-turma, stats-turma)
- [x] Banner amarelo na home para login obrigatório
- [x] Logout destrói sessão PHP
- [x] Headers de segurança no .htaccess
- [x] Painel do Professor (Admin)
- [x] Tags das questões normalizadas (107 JSONs, lowercase + singular)
- [x] Comentários dos JSONs limpos (HTML normalizado, cabeçalhos removidos)
- [x] Tabela `tags` criada no banco (1445 tags canônicas)
