-- =============================================================
--  DUVID GEOGRAFIA — Schema MySQL (completo)
--  Migração localStorage → MySQL + módulo de provas/notas
--  Como usar: phpMyAdmin → Importar → schema.sql
-- =============================================================

CREATE DATABASE IF NOT EXISTS duvid
    CHARACTER SET utf8mb4
    COLLATE utf8mb4_unicode_ci;

USE duvid;

-- =============================================================
-- BLOCO 1: USUÁRIOS E TURMAS
-- =============================================================

-- -------------------------------------------------------------
-- 1. TURMAS
--    O professor cria turmas; alunos se vinculam a elas.
--    Senha permite acesso controlado (como o logingrupos.php).
-- -------------------------------------------------------------
CREATE TABLE IF NOT EXISTS turmas (
    id           INT AUTO_INCREMENT PRIMARY KEY,
    nome         VARCHAR(100) NOT NULL,                  -- ex: "1º A 2025"
    ano_escolar  TINYINT      NOT NULL,                  -- 1, 2 ou 3
    senha        VARCHAR(100) DEFAULT NULL,              -- senha de acesso dos alunos
    ativa        TINYINT(1)   NOT NULL DEFAULT 1,
    criado_em    TIMESTAMP    NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB;

-- Turma padrão (alunos sem turma definida)
INSERT INTO turmas (nome, ano_escolar, senha, ativa) VALUES
('Turma Livre', 0, NULL, 1);


-- -------------------------------------------------------------
-- 2. ALUNOS
--    globinhos_total = contador central (≡ duvid_globinhos).
--    lvl e patente ficam em cache para não recalcular sempre.
-- -------------------------------------------------------------
CREATE TABLE IF NOT EXISTS alunos (
    id               INT AUTO_INCREMENT PRIMARY KEY,
    nome             VARCHAR(100) NOT NULL,
    email            VARCHAR(150) DEFAULT NULL UNIQUE,
    senha_hash       VARCHAR(255) DEFAULT NULL,
    turma_id         INT          NOT NULL DEFAULT 1,
    globinhos_total  INT          NOT NULL DEFAULT 0,
    lvl              TINYINT      NOT NULL DEFAULT 1,
    patente          VARCHAR(50)  NOT NULL DEFAULT 'NOVATO',
    criado_em        TIMESTAMP    NOT NULL DEFAULT CURRENT_TIMESTAMP,
    atualizado_em    TIMESTAMP    NOT NULL DEFAULT CURRENT_TIMESTAMP
                     ON UPDATE CURRENT_TIMESTAMP,
    FOREIGN KEY (turma_id) REFERENCES turmas(id)
) ENGINE=InnoDB;


-- =============================================================
-- BLOCO 2: CATÁLOGO DE AULAS
-- =============================================================

-- -------------------------------------------------------------
-- 3. AULAS
--    ID manual (101-134, 201-235, 301+), espelha os JSONs.
--    link_texto e link_questoes = caminho relativo ao htdocs.
-- -------------------------------------------------------------
CREATE TABLE IF NOT EXISTS aulas (
    id                 SMALLINT     NOT NULL PRIMARY KEY,
    titulo             VARCHAR(250) NOT NULL,
    ano_escolar        TINYINT      NOT NULL,
    tipo               ENUM('normal','revisao') NOT NULL DEFAULT 'normal',
    link_texto         VARCHAR(300) DEFAULT NULL,
    link_questoes      VARCHAR(300) DEFAULT NULL,
    imagem             VARCHAR(200) DEFAULT NULL,
    globinhos_texto    TINYINT      NOT NULL DEFAULT 10,
    globinhos_questoes TINYINT      NOT NULL DEFAULT 10
) ENGINE=InnoDB;

-- 1º ANO — 34 aulas (IDs 101–134)
INSERT INTO aulas (id, titulo, ano_escolar, tipo, link_texto, link_questoes, imagem) VALUES
(101, 'Conceitos fundamentais da Geografia',         1,'normal',  '1ano/Textos1/Texto01/tp1.php',  'questoes/modelo-questoes.php', 'fotoIndex/1ano/aula01.webp'),
(102, 'Coordenadas geográficas',                     1,'normal',  '1ano/Textos1/Texto02/tp2.php',  'questoes/modelo-questoes.php', 'fotoIndex/1ano/aula02.webp'),
(103, 'Fusos horários',                              1,'normal',  '1ano/Textos1/Texto03/tp3.php',  'questoes/modelo-questoes.php', 'fotoIndex/1ano/aula03.webp'),
(104, 'Escalas cartográficas',                       1,'normal',  '1ano/Textos1/Texto04/tp4.php',  'questoes/modelo-questoes.php', 'fotoIndex/1ano/aula04.webp'),
(105, 'Projeções cartográficas',                     1,'normal',  '1ano/Textos1/Texto05/tp5.php',  'questoes/modelo-questoes.php', 'fotoIndex/1ano/aula05.webp'),
(106, 'Revisão (Aulas 01 a 05)',                     1,'revisao', NULL,                             'questoes/modelo-questoes.php', 'fotoIndex/revisao.webp'),
(107, 'Sensoriamento remoto',                        1,'normal',  '1ano/Textos1/Texto07/tp7.php',  'questoes/modelo-questoes.php', 'fotoIndex/1ano/aula07.webp'),
(108, 'Eras geológicas e estrutura interna da Terra',1,'normal',  '1ano/Textos1/Texto08/tp8.php',  'questoes/modelo-questoes.php', 'fotoIndex/1ano/aula08.webp'),
(109, 'Deriva continental e tectônica',              1,'normal',  '1ano/Textos1/Texto09/tp9.php',  'questoes/modelo-questoes.php', 'fotoIndex/1ano/aula09.webp'),
(110, 'Dinâmica interna do relevo',                  1,'normal',  '1ano/Textos1/Texto10/tp10.php', 'questoes/modelo-questoes.php', 'fotoIndex/1ano/aula10.webp'),
(111, 'Dinâmica externa do relevo',                  1,'normal',  '1ano/Textos1/Texto11/tp11.php', 'questoes/modelo-questoes.php', 'fotoIndex/1ano/aula11.webp'),
(112, 'Revisão (Aulas 07 a 11)',                     1,'revisao', NULL,                             'questoes/modelo-questoes.php', 'fotoIndex/revisao.webp'),
(113, 'Ciclo das Rochas',                            1,'normal',  '1ano/Textos1/Texto13/tp13.php', 'questoes/modelo-questoes.php', 'fotoIndex/1ano/aula13.webp'),
(114, 'Estrutura geológica e relevo',                1,'normal',  '1ano/Textos1/Texto14/tp14.php', 'questoes/modelo-questoes.php', 'fotoIndex/1ano/aula14.webp'),
(115, 'Fontes de energia I',                         1,'normal',  '1ano/Textos1/Texto15/tp15.php', 'questoes/modelo-questoes.php', 'fotoIndex/1ano/aula15.webp'),
(116, 'Fontes de energia II',                        1,'normal',  '1ano/Textos1/Texto16/tp16.php', 'questoes/modelo-questoes.php', 'fotoIndex/1ano/aula16.webp'),
(117, 'Solos',                                       1,'normal',  '1ano/Textos1/Texto17/tp17.php', 'questoes/modelo-questoes.php', 'fotoIndex/1ano/aula17.webp'),
(118, 'Revisão (Aulas 13 a 17)',                     1,'revisao', NULL,                             'questoes/modelo-questoes.php', 'fotoIndex/revisao.webp'),
(119, 'Climatologia I',                              1,'normal',  '1ano/Textos1/Texto19/tp19.php', 'questoes/modelo-questoes.php', 'fotoIndex/1ano/aula19.webp'),
(120, 'Climatologia II',                             1,'normal',  '1ano/Textos1/Texto20/tp20.php', 'questoes/modelo-questoes.php', 'fotoIndex/1ano/aula20.webp'),
(121, 'Mudanças climáticas globais',                 1,'normal',  '1ano/Textos1/Texto21/tp21.php', 'questoes/modelo-questoes.php', 'fotoIndex/1ano/aula21.webp'),
(122, 'Mudanças climáticas locais',                  1,'normal',  '1ano/Textos1/Texto22/tp22.php', 'questoes/modelo-questoes.php', 'fotoIndex/1ano/aula22.webp'),
(123, 'Revisão (Aulas 19 a 22)',                     1,'revisao', NULL,                             'questoes/modelo-questoes.php', 'fotoIndex/revisao.webp'),
(124, 'Hidrografia',                                 1,'normal',  '1ano/Textos1/Texto24/tp24.php', 'questoes/modelo-questoes.php', 'fotoIndex/1ano/aula24.webp'),
(125, 'Relevo oceânico',                             1,'normal',  '1ano/Textos1/Texto25/tp25.php', 'questoes/modelo-questoes.php', 'fotoIndex/1ano/aula25.webp'),
(126, 'Sistemas fluviais',                           1,'normal',  '1ano/Textos1/Texto26/tp26.php', 'questoes/modelo-questoes.php', 'fotoIndex/1ano/aula26.webp'),
(127, 'O uso da água',                               1,'normal',  '1ano/Textos1/Texto27/tp27.php', 'questoes/modelo-questoes.php', 'fotoIndex/1ano/aula27.webp'),
(128, 'Revisão (Aulas 24 a 27)',                     1,'revisao', NULL,                             'questoes/modelo-questoes.php', 'fotoIndex/revisao.webp'),
(129, 'Biogeografia I',                              1,'normal',  '1ano/Textos1/Texto29/tp29.php', 'questoes/modelo-questoes.php', 'fotoIndex/1ano/aula29.webp'),
(130, 'Biogeografia II',                             1,'normal',  '1ano/Textos1/Texto30/tp30.php', 'questoes/modelo-questoes.php', 'fotoIndex/1ano/aula30.webp'),
(131, 'Biogeografia III',                            1,'normal',  '1ano/Textos1/Texto31/tp31.php', 'questoes/modelo-questoes.php', 'fotoIndex/1ano/aula31.webp'),
(132, 'Questão ambiental I',                         1,'normal',  '1ano/Textos1/Texto32/tp32.php', 'questoes/modelo-questoes.php', 'fotoIndex/1ano/aula32.webp'),
(133, 'Questão ambiental II',                        1,'normal',  '1ano/Textos1/Texto33/tp33.php', 'questoes/modelo-questoes.php', 'fotoIndex/1ano/aula33.webp'),
(134, 'Revisão (Aulas 29 a 33)',                     1,'revisao', NULL,                             'questoes/modelo-questoes.php', 'fotoIndex/revisao.webp');
-- Repita para 2ano (201+) e 3ano (301+) quando necessário.


-- =============================================================
-- BLOCO 3: PROGRESSO DO ALUNO
-- =============================================================

-- -------------------------------------------------------------
-- 4. PROGRESSO POR AULA
--    Espelha concluido_texto_N e concluido_questoes_N do localStorage.
-- -------------------------------------------------------------
CREATE TABLE IF NOT EXISTS progresso_aulas (
    id                        INT AUTO_INCREMENT PRIMARY KEY,
    aluno_id                  INT        NOT NULL,
    aula_id                   SMALLINT   NOT NULL,
    concluido_texto           TINYINT(1) NOT NULL DEFAULT 0,
    concluido_questoes        TINYINT(1) NOT NULL DEFAULT 0,
    globinhos_texto_ganhos    TINYINT    NOT NULL DEFAULT 0,
    globinhos_questoes_ganhos TINYINT    NOT NULL DEFAULT 0,
    atualizado_em             TIMESTAMP  NOT NULL DEFAULT CURRENT_TIMESTAMP
                              ON UPDATE CURRENT_TIMESTAMP,
    UNIQUE KEY uq_aluno_aula (aluno_id, aula_id),
    FOREIGN KEY (aluno_id) REFERENCES alunos(id)  ON DELETE CASCADE,
    FOREIGN KEY (aula_id)  REFERENCES aulas(id)   ON DELETE CASCADE
) ENGINE=InnoDB;


-- -------------------------------------------------------------
-- 5. LOG DE GLOBINHOS (auditoria)
--    Cada ganho/perda fica registrado com tipo e contexto.
-- -------------------------------------------------------------
CREATE TABLE IF NOT EXISTS globinhos_log (
    id          INT AUTO_INCREMENT PRIMARY KEY,
    aluno_id    INT        NOT NULL,
    aula_id     SMALLINT   DEFAULT NULL,
    tipo        ENUM('texto','questoes','glossario','prova','bonus','reset') NOT NULL,
    quantidade  SMALLINT   NOT NULL,
    criado_em   TIMESTAMP  NOT NULL DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY (aluno_id) REFERENCES alunos(id) ON DELETE CASCADE
) ENGINE=InnoDB;


-- =============================================================
-- BLOCO 4: PROVAS E NOTAS (módulo professor)
-- =============================================================

-- -------------------------------------------------------------
-- 6. PROVAS
--    O professor cria uma prova escolhendo questões do JSON.
--    questoes_json armazena o array de questões selecionadas
--    (id, enunciado, alternativas, gabarito, peso).
-- -------------------------------------------------------------
CREATE TABLE IF NOT EXISTS provas (
    id               INT AUTO_INCREMENT PRIMARY KEY,
    titulo           VARCHAR(200) NOT NULL,
    turma_id         INT          NOT NULL,
    aula_id          SMALLINT     DEFAULT NULL,        -- NULL = prova multi-aula
    questoes_json    JSON         NOT NULL,            -- array com as questões completas
    nota_maxima      DECIMAL(5,2) NOT NULL DEFAULT 10.00,
    globinhos_bonus  SMALLINT     NOT NULL DEFAULT 20, -- globinhos ao acertar tudo
    data_aplicacao   DATE         DEFAULT NULL,
    ativa            TINYINT(1)   NOT NULL DEFAULT 1,
    criado_em        TIMESTAMP    NOT NULL DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY (turma_id) REFERENCES turmas(id),
    FOREIGN KEY (aula_id)  REFERENCES aulas(id)
) ENGINE=InnoDB;


-- -------------------------------------------------------------
-- 7. AVALIAÇÕES (resultado do aluno em cada prova)
--    nota é calculada automaticamente pelo PHP ao corrigir.
--    respostas_json guarda o que o aluno marcou (para revisão).
-- -------------------------------------------------------------
CREATE TABLE IF NOT EXISTS avaliacoes (
    id               INT AUTO_INCREMENT PRIMARY KEY,
    aluno_id         INT          NOT NULL,
    prova_id         INT          NOT NULL,
    nota             DECIMAL(5,2) NOT NULL DEFAULT 0,
    acertos          TINYINT      NOT NULL DEFAULT 0,
    total_questoes   TINYINT      NOT NULL DEFAULT 0,
    globinhos_ganhos SMALLINT     NOT NULL DEFAULT 0,
    respostas_json   JSON         DEFAULT NULL,        -- {"q1":"c","q2":"a",...}
    realizada_em     TIMESTAMP    NOT NULL DEFAULT CURRENT_TIMESTAMP,
    UNIQUE KEY uq_aluno_prova (aluno_id, prova_id),   -- 1 tentativa por padrão
    FOREIGN KEY (aluno_id) REFERENCES alunos(id) ON DELETE CASCADE,
    FOREIGN KEY (prova_id) REFERENCES provas(id)  ON DELETE CASCADE
) ENGINE=InnoDB;


-- =============================================================
-- BLOCO 5: GAMIFICAÇÃO
-- =============================================================

-- -------------------------------------------------------------
-- 8. CONQUISTAS (catálogo de badges)
-- -------------------------------------------------------------
CREATE TABLE IF NOT EXISTS conquistas (
    id               INT AUTO_INCREMENT PRIMARY KEY,
    nome             VARCHAR(100) NOT NULL,
    descricao        VARCHAR(255) NOT NULL,
    icone            VARCHAR(10)  NOT NULL DEFAULT '🏆',
    tipo             ENUM('aulas_concluidas','globinhos_total','glossario','prova_nota10','especial') NOT NULL,
    valor_necessario INT          NOT NULL DEFAULT 1
) ENGINE=InnoDB;

INSERT INTO conquistas (nome, descricao, icone, tipo, valor_necessario) VALUES
('Primeira Missão',   'Conclua sua primeira aula (texto + questões)',  '🌍', 'aulas_concluidas',  1),
('Explorador',        'Conclua 5 aulas',                               '🧭', 'aulas_concluidas',  5),
('Geógrafo',          'Conclua 10 aulas',                              '📚', 'aulas_concluidas', 10),
('Mestre do 1º Ano',  'Conclua todas as 34 aulas do 1º ano',          '🎓', 'aulas_concluidas', 34),
('Globinheiro',       'Acumule 1.000 globinhos',                       '🌐', 'globinhos_total',  1000),
('Cartógrafo Rico',   'Acumule 3.500 globinhos',                       '💎', 'globinhos_total',  3500),
('Estrategista',      'Acumule 8.000 globinhos',                       '🏅', 'globinhos_total',  8000),
('Lenda da Terra',    'Acumule 20.000 globinhos',                      '👑', 'globinhos_total', 20000),
('Linguista',         'Desbloqueie 10 termos do glossário',            '📖', 'glossario',          10),
('Erudito',           'Desbloqueie 50 termos do glossário',            '🔬', 'glossario',          50),
('Nota 10!',          'Tire nota máxima em qualquer prova',            '⭐', 'prova_nota10',        1);


-- -------------------------------------------------------------
-- 9. CONQUISTAS DESBLOQUEADAS POR ALUNO
-- -------------------------------------------------------------
CREATE TABLE IF NOT EXISTS conquistas_alunos (
    id               INT AUTO_INCREMENT PRIMARY KEY,
    aluno_id         INT       NOT NULL,
    conquista_id     INT       NOT NULL,
    desbloqueada_em  TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
    UNIQUE KEY uq_aluno_conquista (aluno_id, conquista_id),
    FOREIGN KEY (aluno_id)     REFERENCES alunos(id)      ON DELETE CASCADE,
    FOREIGN KEY (conquista_id) REFERENCES conquistas(id)  ON DELETE CASCADE
) ENGINE=InnoDB;


-- =============================================================
-- BLOCO 6: VIEWS PRONTAS PARA USO
-- =============================================================

-- Ranking geral
CREATE OR REPLACE VIEW ranking AS
SELECT
    a.id,
    a.nome,
    t.nome                                              AS turma,
    a.globinhos_total,
    a.lvl,
    a.patente,
    (SELECT COUNT(*) FROM progresso_aulas p
     WHERE p.aluno_id = a.id
       AND p.concluido_texto = 1
       AND p.concluido_questoes = 1)                   AS aulas_100,
    COUNT(DISTINCT ca.conquista_id)                    AS conquistas
FROM alunos a
JOIN turmas t ON t.id = a.turma_id
LEFT JOIN conquistas_alunos ca ON ca.aluno_id = a.id
GROUP BY a.id, a.nome, t.nome, a.globinhos_total, a.lvl, a.patente
ORDER BY a.globinhos_total DESC;


-- Notas por turma (painel do professor)
CREATE OR REPLACE VIEW notas_turma AS
SELECT
    av.id            AS avaliacao_id,
    al.nome          AS aluno,
    t.nome           AS turma,
    pr.titulo        AS prova,
    au.titulo        AS aula,
    av.nota,
    av.acertos,
    av.total_questoes,
    av.globinhos_ganhos,
    av.realizada_em
FROM avaliacoes av
JOIN alunos  al ON al.id = av.aluno_id
JOIN provas  pr ON pr.id = av.prova_id
JOIN turmas  t  ON t.id  = al.turma_id
LEFT JOIN aulas au ON au.id = pr.aula_id
ORDER BY t.nome, al.nome, av.realizada_em DESC;
