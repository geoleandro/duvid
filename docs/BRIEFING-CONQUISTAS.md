# 🏅 Briefing — Sistema de Conquistas Duvid Geografia

## Contexto
Página `/conquistas.php` (ou `/aluno/conquistas.php`).  
Design já aprovado no mockup: grid de medalhas com raridade, filtros por módulo, stats de colecionador.  
Banco atual tem `respostas_aulas` e `progresso_aulas` com dados suficientes para calcular a maioria das conquistas.

---

## Estado atual (mockup)

| Elemento | Detalhe |
|---|---|
| Progresso | 15 / 45 medalhas |
| Filtros | Todas · Natureza · Brasil · Mundo |
| Card de medalha | Imagem · Nome · Descrição · Raridade · Data ou Progresso |
| Estados | Conquistada · Em progresso (barra) · Bloqueada |
| Stats | Maior Conquista · Taxa de Acerto Geral · Total XP |
| Raridades | COMUM · RARO · ÉPICO |

---

## Categorias de medalhas propostas (para chegar a 45+)

### 🌿 Módulo Natureza (aulas 1–15 aprox.)
| # | Nome | Critério | Raridade |
|---|---|---|---|
| 1 | Pioneiro Verde | Completar módulo Natureza sem erros | ÉPICO |
| 2 | Mestre do Clima | Acertar todas as questões de climatologia | COMUM |
| 3 | Raiz Profunda | Completar 5 aulas de Natureza consecutivas | RARO |
| 4 | Guardião da Amazônia | 100% no simulado de biomas | ÉPICO |
| 5 | Detetive do Solo | Acertar 10 questões sobre pedologia | COMUM |

### 🇧🇷 Módulo Brasil
| # | Nome | Critério | Raridade |
|---|---|---|---|
| 6 | Cartógrafo Brasileiro | Identificar todos os estados num quiz | RARO |
| 7 | Explorador do Nordeste | Completar aulas da região Nordeste | COMUM |
| 8 | Industrialista | 80%+ nas questões de industrialização | RARO |
| 9 | Campeão do IBGE | Acertar 10 questões de demografia | COMUM |
| 10 | Bússola de Ouro | 50 atividades no modo Explorar | RARO |

### 🌍 Módulo Mundo
| # | Nome | Critério | Raridade |
|---|---|---|---|
| 11 | Cartógrafo Global | Identificar todos os países da América do Sul | ÉPICO |
| 12 | Arqueólogo Urbano | Desafio de cidades históricas | RARO |
| 13 | Escalador Social | Top 10 do ranking por 3 semanas | RARO |
| 14 | Geopolítico | 80%+ em questões de geopolítica | COMUM |
| 15 | Cidadão do Mundo | Completar o módulo Mundo | ÉPICO |

### 🔥 Engajamento / Streak
| # | Nome | Critério | Raridade |
|---|---|---|---|
| 16 | Madrugador | Estudar antes das 8h por 3 dias | COMUM |
| 17 | Sequência de Fogo | 7 dias consecutivos na plataforma | RARO |
| 18 | Mês Perfeito | 30 dias ativos no mês | ÉPICO |
| 19 | Imparável | Combo de 5 acertos seguidos nas questões | COMUM |
| 20 | Lendário | Combo de 7+ acertos seguidos | ÉPICO |

### 📊 Desempenho
| # | Nome | Critério | Raridade |
|---|---|---|---|
| 21 | Precisão Cirúrgica | 100% numa lista de questões (10+) | RARO |
| 22 | Nota Máxima | Tirar nota 10 num simulado completo | ÉPICO |
| 23 | Resiliente | Reprovar e passar na mesma aula | COMUM |
| 24 | Acelerado | Completar uma aula em menos de 5 min | COMUM |
| 25 | Maratonista | Estudar 2h seguidas (tempo de sessão) | RARO |

### 👥 Turma / Social
| # | Nome | Critério | Raridade |
|---|---|---|---|
| 26 | Líder da Turma | Ser 1º no ranking da turma por 1 semana | ÉPICO |
| 27 | MVP da Turma | Contribuir 20% do XP coletivo da turma | RARO |
| 28 | Mentor | Ter 3 colegas que se cadastraram pelo seu link | ÉPICO |
| 29 | Colaborador | Enviar 5 reportes de melhorias de questões | COMUM |

### 🎖️ Marcos de XP / Level
| # | Nome | Critério | Raridade |
|---|---|---|---|
| 30 | Novato Corajoso | Atingir nível 2 | COMUM |
| 31 | Cartógrafo | Atingir nível 3 | COMUM |
| 32 | Estrategista | Atingir nível 4 | RARO |
| 33 | Geógrafo Sênior | Atingir nível 5 | RARO |
| 34 | Lenda da Terra | Atingir nível 6 (máx.) | ÉPICO |

### 🎓 ENEM / Vestibular
| # | Nome | Critério | Raridade |
|---|---|---|---|
| 35 | Caçador de FUVEST | Completar 1 simulado FUVEST | COMUM |
| 36 | Especialista UNICAMP | Completar 1 simulado UNICAMP | COMUM |
| 37 | Ás do ENEM | 80%+ no simulado ENEM de geografia | RARO |
| 38 | Veterano | Completar simulados de 3 vestibulares diferentes | ÉPICO |

### ⭐ Secretas / Easter Eggs
| # | Nome | Critério | Raridade |
|---|---|---|---|
| 39 | Globinho Fan | Clicar no Globinho 10x | COMUM |
| 40 | Madrugada Geográfica | Estudar entre 00h e 04h | RARO |
| 41 | Primeiro Dia | Completar a primeira aula | COMUM |
| 42 | Explorador Total | Visitar todas as seções da plataforma | RARO |
| 43 | Mestre Geógrafo | Conquistar 40+ medalhas | ÉPICO |
| 44 | Perfeicionista | 100% em TODOS os módulos | ÉPICO LENDÁRIO |
| 45 | Duvid OG | Cadastrado nos primeiros 100 alunos | ÉPICO |

---

## Arquitetura técnica sugerida

### Banco de dados
```sql
-- Tabela de definição de conquistas
CREATE TABLE conquistas (
    id        INT PRIMARY KEY AUTO_INCREMENT,
    slug      VARCHAR(60) UNIQUE,       -- 'pioneiro-verde'
    nome      VARCHAR(100),
    descricao TEXT,
    criterio  VARCHAR(200),             -- descrição legível
    raridade  ENUM('COMUM','RARO','ÉPICO','LENDÁRIO'),
    modulo    ENUM('NATUREZA','BRASIL','MUNDO','ENGAJAMENTO','DESEMPENHO','SOCIAL','MARCO','ENEM','SECRETA'),
    imagem    VARCHAR(200),             -- caminho da imagem da medalha
    ativo     TINYINT DEFAULT 1
);

-- Tabela de conquistas do aluno
CREATE TABLE aluno_conquistas (
    id           INT PRIMARY KEY AUTO_INCREMENT,
    aluno_id     INT,
    conquista_id INT,
    conquistado_em DATETIME DEFAULT NOW(),
    progresso    INT DEFAULT 0,         -- para conquistas com barra
    meta         INT DEFAULT 0,
    UNIQUE KEY (aluno_id, conquista_id)
);
```

### API
- `GET /api/conquistas.php?aluno_id=X` → retorna todas as conquistas + status do aluno
- `POST /api/conquistas.php` → chamada pelo backend ao detectar critério cumprido

### Trigger de verificação
- Chamar `verificarConquistas(aluno_id)` após: salvar conclusão de aula, responder simulado, fazer login (streak), subir de nível.

### Frontend
- Página `/conquistas.php` — grid com filtros via JS (sem reload)
- Cards com 3 estados: `conquistada` (colorida + data) / `progresso` (barra) / `bloqueada` (grayscale + cadeado)
- Notificação inline quando uma nova conquista é desbloqueada (já existe `_exibirConquista` no `duvid-db.js`)

---

## Próximos passos sugeridos
1. Criar migration SQL (`/database/005_conquistas.sql`)
2. Criar seed com as 45 medalhas (slug, nome, raridade, imagem placeholder)
3. Criar `/api/conquistas.php` — leitura + escrita
4. Criar `/conquistas.php` — HTML + JS com filtros
5. Implementar imagens das medalhas (pixel art estilo Globinho)
6. Conectar triggers nos pontos certos (salvarConclusao, addGlobinhos, login)
