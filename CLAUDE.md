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

## Notion
Roadmap: https://app.notion.com/p/4773afa5a43947e2988d7bce25f6a2e6
Status usados: Ideia | Próxima | Bolsista | Feito | Bloqueado
