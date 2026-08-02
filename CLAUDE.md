# Memória de Trabalho — Leandro / Duvid

## Eu
**Leandro** — criador do Duvid Geografia (duvid.com.br).
Professor/desenvolvedor solo. Usa Claude Cowork como par de programação.
Tem bolsista que ajuda com tarefas menores (conversão de HTMLs, catalogação).

## O Projeto Principal
**Duvid** = plataforma educacional de Geografia para vestibular (ENEM, FUVEST, UNICAMP, UNESP).
- PHP + MySQL no XAMPP local / hospedagem compartilhada em produção
- Mascote: **Globinho** 🌍 (personagem central de gamificação)
- Moeda interna: **globinhos** (XP do aluno)
- URL produção: duvid.com.br
- FTP para deploy (não tem CI/CD)
- Instagram: @duvidgeo

## Stack Técnica
| Camada | Tecnologia |
|--------|-----------|
| Backend | PHP 8+, PDO, sessões PHP |
| Banco | MySQL (PDO singleton em `includes/conexao.php`) |
| Frontend | HTML/CSS/JS vanilla + W3.CSS |
| Auth aluno | PHP session (`$_SESSION['aluno_id']`) |
| Auth admin | Sessão separada (`$_SESSION['admin_logado']`) |
| Ambiente local | XAMPP, IS_LOCAL = true |
| Deploy | FTP manual |

## Arquitetura de Arquivos
```
/api/          — endpoints JSON (aluno, progresso, globinhos, respostas, logout)
/includes/     — conexao.php, auth_aluno.php, rate_limit.php
/paginas/      — ranking.php, criar-turma.php, stats-turma.php
/questoes/     — 107 arquivos JSON com questões por vestibular/ano
/js/           — duvid-core.js, duvid-ui.js, jsquestoes-padrao.js
/config/       — .env (produção, não vai ao git)
/database/     — migrations SQL
```

## Termos / Abreviações
| Termo | Significado |
|-------|-------------|
| globinhos | moeda/XP do aluno |
| Globinho | mascote da plataforma |
| IS_LOCAL | flag PHP que detecta XAMPP vs produção |
| auth_aluno | proteção de página por sessão PHP |
| requireAuth() | função PHP que exige sessão válida na API |
| bolsista | colaborador que faz tarefas operacionais |
| JSONs | arquivos de questões em /questoes/ |
| roadmap | banco Notion "🌍 Duvid — Roadmap" |

## Frentes de Trabalho
| Frente | Descrição |
|--------|-----------|
| 🔧 Infraestrutura | segurança, sessão, .env, .htaccess |
| 🎮 Gamificação | streak, Globinho, cartas, batalha RPG |
| 📚 Conteúdo | simulados, questões JSON, aulas |
| 👨‍🏫 Admin/Professor | painel, stats turma, criar prova |
| 📢 Instagram | @duvidgeo, grid de lançamento |
| 🤝 Comunidade | ranking, turmas, colaboração |

## Regra de Prioridade (combinada)
1. Algo quebrado para o aluno → resolve na hora
2. Desbloqueia outra frente → segundo
3. Features novas → terceiro
4. Máximo 3 frentes ativas ao mesmo tempo

## Dioramas (fundos panorâmicos)
- Estilo: **pixel art de alta resolução**, estética retro game (tipo SNES/GBA avançado)
- Dimensões: **2400×456px**, proporção ~5:1, exportar como **WebP ≤200KB**
- Localização: `/fotoIndex/tileset/`
- Injeção: automática via `jessica-walker.js` antes do `<footer>` (sem mexer no HTML)
- Arquivos:
  | Arquivo | Página | Status |
  |---------|--------|--------|
  | `fundo.webp` | home | ✅ pronto |
  | `fundo-natureza.webp` | Duvid1Ano.php | ✅ pronto |
  | `fundo-brasil.webp` | Duvid2Ano.php | 🔲 pendente |
  | `fundo-mundo.webp` | Duvid3Ano.php | 🔲 pendente |
- Tema dos dioramas: **geografia humana + física juntas** — contraste/conflito dentro da cena
- Cards renomeados: 1º ANO → 🌿 Natureza | 2º ANO → 🇧🇷 Brasil | 3º ANO → 🌍 Mundo

## Design System — Clean Pixel
Guia completo em `/docs/GUIA-DE-ESTILO.md`
- Fonte: **Montserrat** (corpo) + pixel font nos títulos
- Brand: `#2e7d32` (Forest Deep) / `#4caf50` (Forest Vibrant)
- Surface: `#f8f9fa` | Cards: `border-radius: 24px` + `box-shadow: 0 4px 12px rgba(0,0,0,0.05)`
- Sidebar: 260px | Max-width container: 1280px | Gutter: 24px
- Redesign em 4 fases: ① Sidebar nav → ② Home dashboard → ③ Quiz interface → ④ Aulas + Simulados

## Notion
Roadmap: https://app.notion.com/p/4773afa5a43947e2988d7bce25f6a2e6
Status usados: Ideia | Próxima | Bolsista | Feito | Bloqueado

## Backlog — Features Futuras (adicionar ao Notion)

### 🤝 Card de Ranking — versão colaborativa (mockup aprovado)
- **Meta da Turma**: barra de progresso coletivo no topo do card
  - Soma o XP de todos os membros da turma
  - Níveis: Bronze 10k → Prata 25k → Ouro 50k → Lenda 100k
  - Texto: "Faltam X XP para o Nível Bronze!"
  - Barra verde com % de progresso
- **Atividade Recente**: feed de eventos em tempo real abaixo do ranking
  - "Mariana Silva acabou de concluir Climatologia +15 XP para a turma!"
  - "João Pedro iniciou Geopolítica"
  - Ponto verde = concluiu, cinza = iniciou
  - Dados de `progresso_aulas` JOIN `aulas` JOIN `alunos` WHERE turma
  - Novo endpoint: `GET /api/turma-feed.php?turma=CODE`
- Só aparece para alunos com turma (não para LIVRE)

### 📊 Painel do Aluno (nova página)
- URL sugerida: `/painel.php` ou `/aluno/painel.php`
- Dados 100% disponíveis no banco atual (`respostas_aulas`)
- Seções planejadas:
  - **Visão geral**: média geral de acertos, total de questões respondidas, aulas concluídas
  - **Desempenho por aula**: lista ordenada por % de acerto (destaca as mais difíceis)
  - **Histórico recente**: últimas 5 aulas pelo `atualizado_em`
  - **Aulas em risco**: tentadas mas não aprovadas (acertos < 60% com tentativas > 1)
  - **Assuntos mais errados**: via `erradas_json` (já implementado no card de questões)
  - **Badges/conquistas**: baseado em tentativas, acertos, sequência de aulas
- Gráficos: Chart.js (doughnut geral + bar por aula)
- Sem migration necessária — usa só o que já existe
- Prerequisito: definir layout (sidebar igual às outras páginas ou full-width dashboard)

### 🎓 Certificados por Bloco de Aulas
- Cada módulo (Natureza/Brasil/Mundo) será dividido em blocos temáticos (ex: aulas 1–5, 6–10…)
- Ao concluir um bloco → aluno ganha certificado validado + nota
- Professor valida manualmente via painel admin (lista de alunos que completaram o bloco)
- Certificado aparece desbloqueado no Inventário da página de aulas
- Prerequisito: definir quais aulas formam cada bloco + criar tela admin de validação
