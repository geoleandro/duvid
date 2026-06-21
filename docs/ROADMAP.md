# 🌍 Duvid — Roadmap

> Fonte de verdade do projeto. Atualizar aqui + no board Notion a cada sessão.
> Última atualização: 2026-06-18

---

## 🔴 Alta Prioridade

### 1. Comentários contextuais por aula/questão
- Tabela `comentarios(aluno_id, aula_id, texto, criado_em, aprovado)`
- Aluno comenta dúvidas direto na questão
- Professor vê agregado: "questão X gerou 12 dúvidas esta semana"
- **Responsável:** Leandro (banco + API) | **Status:** Ideia

### 2. Painel do Professor (Admin)
- Ver progresso da turma
- Quais aulas estão travando (menos conclusões)
- Questões mais erradas (usando tabela `respostas_aulas`)
- Ranking detalhado com Grid.js
- Gráficos com Chart.js
- **Responsável:** Leandro | **Status:** Ideia

### 3. Página de Status do Site
- `status.php` que pinga banco + APIs principais
- Semáforo verde/amarelo/vermelho
- Transparência para o aluno quando algo cair
- **Responsável:** Bolsista (com template) | **Status:** Ideia

---

## 🟡 Média Prioridade

### 4. Streak Diário
- Contador no `DuvidDB` que reseta à meia-noite
- Bônus de globinhos por dias consecutivos (dia 3 = +10, dia 7 = +30)
- Badge de "sequência ativa" no header
- **Responsável:** Leandro | **Status:** Ideia

### 5. Tela de Recompensa estilo Zelda
- Modal com baú se abrindo ao finalizar aula
- Exibe nome da habilidade desbloqueada
- Animação de globinhos caindo (Lottie)
- Fanfarra de 3s (Howler.js)
- **Responsável:** Leandro | **Status:** Ideia

### 6. Ranking Interescolar
- Adicionar campo `escola` nas turmas
- Ranking por escola além de por turma
- Orgulho coletivo → viralização entre escolas
- **Responsável:** Leandro | **Status:** Ideia

### 7. Padronizar JSONs de Questões (simulados-data/)
- Estrutura: `{ num, enunciado, ajuda, resposta, alternativas[], gabarito }`
- FUVEST e UNICAMP têm formatos distintos — unificar
- `simulado-renderer.js` monta o `<form>` dinamicamente
- **Responsável:** Bolsista | **Status:** Ideia

---

## 🟢 Baixa Prioridade (Futuro)

### 8. Batalha por Turnos (RPG de Questões)
- Questão = combate contra inimigo geográfico
- Alternativas = ataques com nome de técnica geográfica
- Acerto → dano crítico + som + animação pixel art
- Erro → contra-ataque + perde coração
- **Responsável:** Leandro | **Status:** Ideia

### 9. Cartas Colecionáveis Geográficas
- Cada aula concluída dropa 1 carta pixel (conceito, país, fenômeno)
- Raridade: comum / raro / lendário
- Álbum de cartas no perfil do aluno
- **Responsável:** Leandro | **Status:** Ideia

### 10. Onboarding para Aluno Novo
- Tour guiado com Shepherd.js no primeiro acesso
- Explica globinhos, ranking, como funciona
- **Responsável:** Bolsista (com conteúdo) | **Status:** Ideia

---

## 📱 Instagram @duvid (separado da vida pessoal)

### Tipos de conteúdo:
- "Aluno da semana" com print do ranking (com permissão)
- Questões relâmpago nos Stories
- Bastidores de criação das aulas
- Memes de geografia no Reels
- Conquistas desbloqueadas (screenshot gamificado)

### Tarefas iniciais:
- [ ] Criar conta @duvid (ou @duvidgeo)
- [ ] Definir identidade visual (Globinho como mascote)
- [ ] Criar 9 posts iniciais para lançar o grid
- **Responsável:** Bolsista | **Status:** Ideia

---

## 🔧 O que o Bolsista pode fazer AGORA (sem mexer no código)

1. Padronizar JSONs de questões (FUVEST/UNICAMP)
2. Testar o site em celulares diferentes e documentar bugs
3. Catalogar quais aulas já têm questões e quais faltam
4. Escrever feedbacks das questões que ainda estão genéricos
5. Criar conteúdo inicial do Instagram
6. Adicionar novas questões nos JSONs existentes seguindo o padrão
7. Subir aulas novas copiando template já pronto

---

## 📚 Bibliotecas Planejadas

| Biblioteca | Uso | Status |
|------------|-----|--------|
| GSAP | Animações suaves (barras de XP, cards) | Planejado |
| Lottie-web | Animações do Globinho e conquistas | Planejado |
| AOS | Revelar conteúdo no scroll das aulas | Planejado |
| Howler.js | Áudio robusto para mobile | Planejado |
| Chart.js | Gráficos do painel do professor | Planejado |
| Grid.js | Tabelas com busca/ordenação (ranking) | Planejado |
| Shepherd.js | Onboarding/tour para aluno novo | Planejado |
