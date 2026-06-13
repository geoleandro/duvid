-- =============================================================
--  DUVID GEOGRAFIA — Instalação completa (banco online)
--  Importar via phpMyAdmin do host: mysql.duvid.com.br
--  Banco: duvid
-- =============================================================

SET NAMES utf8mb4;
SET foreign_key_checks = 0;

-- =============================================================
-- TABELAS
-- =============================================================

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

CREATE TABLE IF NOT EXISTS alunos (
    id              INT AUTO_INCREMENT PRIMARY KEY,
    nome            VARCHAR(100) NOT NULL UNIQUE,
    email           VARCHAR(150) DEFAULT NULL UNIQUE,
    pin_hash        VARCHAR(255) DEFAULT NULL,
    senha_hash      VARCHAR(255) DEFAULT NULL,
    turma           ENUM('1ano','2ano','3ano','livre') NOT NULL DEFAULT 'livre',
    turma_id        INT          DEFAULT NULL,
    globinhos_total INT          NOT NULL DEFAULT 0,
    lvl             TINYINT      NOT NULL DEFAULT 1,
    patente         VARCHAR(50)  NOT NULL DEFAULT 'NOVATO',
    criado_em       TIMESTAMP    NOT NULL DEFAULT CURRENT_TIMESTAMP,
    atualizado_em   TIMESTAMP    NOT NULL DEFAULT CURRENT_TIMESTAMP
                    ON UPDATE CURRENT_TIMESTAMP,
    INDEX idx_aluno_turma (turma_id)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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
    FOREIGN KEY (aluno_id) REFERENCES alunos(id) ON DELETE CASCADE,
    FOREIGN KEY (aula_id)  REFERENCES aulas(id)  ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

CREATE TABLE IF NOT EXISTS globinhos_log (
    id         INT AUTO_INCREMENT PRIMARY KEY,
    aluno_id   INT      NOT NULL,
    aula_id    SMALLINT DEFAULT NULL,
    tipo       ENUM('texto','questoes','glossario','prova','bonus','reset') NOT NULL,
    quantidade SMALLINT NOT NULL,
    criado_em  TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY (aluno_id) REFERENCES alunos(id) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

CREATE TABLE IF NOT EXISTS conquistas (
    id               INT AUTO_INCREMENT PRIMARY KEY,
    nome             VARCHAR(100) NOT NULL,
    descricao        VARCHAR(255) NOT NULL,
    icone            VARCHAR(10)  NOT NULL DEFAULT '🏆',
    tipo             ENUM('aulas_concluidas','globinhos_total','glossario','prova_nota10','especial') NOT NULL,
    valor_necessario INT          NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

CREATE TABLE IF NOT EXISTS conquistas_alunos (
    id              INT AUTO_INCREMENT PRIMARY KEY,
    aluno_id        INT       NOT NULL,
    conquista_id    INT       NOT NULL,
    desbloqueada_em TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
    UNIQUE KEY uq_aluno_conquista (aluno_id, conquista_id),
    FOREIGN KEY (aluno_id)     REFERENCES alunos(id)      ON DELETE CASCADE,
    FOREIGN KEY (conquista_id) REFERENCES conquistas(id)  ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

CREATE TABLE IF NOT EXISTS turmas (
    id          INT AUTO_INCREMENT PRIMARY KEY,
    nome        VARCHAR(100) NOT NULL,
    codigo      VARCHAR(40)  DEFAULT NULL UNIQUE,   -- código de matrícula que o aluno digita
    ano_escolar TINYINT      NOT NULL,
    senha       VARCHAR(100) DEFAULT NULL,
    ativa       TINYINT(1)   NOT NULL DEFAULT 1,
    criado_em   TIMESTAMP    NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- Turma padrão "Livre" (quem não digitar código entra aqui)
INSERT IGNORE INTO turmas (nome, codigo, ano_escolar, ativa) VALUES ('Livre', 'LIVRE', 0, 1);

-- Vínculo aluno → turma (criado depois que ambas as tabelas existem)
ALTER TABLE alunos
    ADD CONSTRAINT fk_aluno_turma FOREIGN KEY (turma_id) REFERENCES turmas(id) ON DELETE SET NULL;

CREATE TABLE IF NOT EXISTS provas (
    id              INT AUTO_INCREMENT PRIMARY KEY,
    titulo          VARCHAR(200) NOT NULL,
    turma_id        INT          NOT NULL DEFAULT 1,
    aula_id         SMALLINT     DEFAULT NULL,
    questoes_json   JSON         NOT NULL,
    nota_maxima     DECIMAL(5,2) NOT NULL DEFAULT 10.00,
    globinhos_bonus SMALLINT     NOT NULL DEFAULT 20,
    data_aplicacao  DATE         DEFAULT NULL,
    ativa           TINYINT(1)   NOT NULL DEFAULT 1,
    criado_em       TIMESTAMP    NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

CREATE TABLE IF NOT EXISTS avaliacoes (
    id               INT AUTO_INCREMENT PRIMARY KEY,
    aluno_id         INT          NOT NULL,
    prova_id         INT          NOT NULL,
    nota             DECIMAL(5,2) NOT NULL DEFAULT 0,
    acertos          TINYINT      NOT NULL DEFAULT 0,
    total_questoes   TINYINT      NOT NULL DEFAULT 0,
    globinhos_ganhos SMALLINT     NOT NULL DEFAULT 0,
    respostas_json   JSON         DEFAULT NULL,
    realizada_em     TIMESTAMP    NOT NULL DEFAULT CURRENT_TIMESTAMP,
    UNIQUE KEY uq_aluno_prova (aluno_id, prova_id),
    FOREIGN KEY (aluno_id) REFERENCES alunos(id)  ON DELETE CASCADE,
    FOREIGN KEY (prova_id) REFERENCES provas(id)  ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- =============================================================
-- VIEWS
-- =============================================================

CREATE OR REPLACE VIEW ranking AS
SELECT
    a.id,
    a.nome,
    a.turma_id,
    t.nome   AS turma_nome,
    t.codigo AS turma_codigo,
    a.globinhos_total,
    a.lvl,
    a.patente,
    (SELECT COUNT(*) FROM progresso_aulas p
     WHERE p.aluno_id = a.id
       AND p.concluido_texto = 1
       AND p.concluido_questoes = 1) AS aulas_100,
    COUNT(DISTINCT ca.conquista_id)  AS conquistas
FROM alunos a
LEFT JOIN turmas t             ON t.id = a.turma_id
LEFT JOIN conquistas_alunos ca ON ca.aluno_id = a.id
GROUP BY a.id, a.nome, a.turma_id, t.nome, t.codigo,
         a.globinhos_total, a.lvl, a.patente
ORDER BY a.globinhos_total DESC;

-- =============================================================
-- CONQUISTAS (catálogo inicial)
-- =============================================================

INSERT IGNORE INTO conquistas (nome, descricao, icone, tipo, valor_necessario) VALUES
('Primeira Missão',  'Conclua sua primeira aula (texto + questões)', '🌍', 'aulas_concluidas',  1),
('Explorador',       'Conclua 5 aulas',                              '🧭', 'aulas_concluidas',  5),
('Geógrafo',         'Conclua 10 aulas',                             '📚', 'aulas_concluidas', 10),
('Mestre do 1º Ano', 'Conclua todas as 34 aulas do 1º ano',         '🎓', 'aulas_concluidas', 34),
('Globinheiro',      'Acumule 1.000 globinhos',                      '🌐', 'globinhos_total',  1000),
('Cartógrafo Rico',  'Acumule 3.500 globinhos',                      '💎', 'globinhos_total',  3500),
('Estrategista',     'Acumule 8.000 globinhos',                      '🏅', 'globinhos_total',  8000),
('Lenda da Terra',   'Acumule 20.000 globinhos',                     '👑', 'globinhos_total', 20000),
('Linguista',        'Desbloqueie 10 termos do glossário',           '📖', 'glossario',          10),
('Erudito',          'Desbloqueie 50 termos do glossário',           '🔬', 'glossario',          50),
('Nota 10!',         'Tire nota máxima em qualquer prova',           '⭐', 'prova_nota10',        1);

-- =============================================================
-- AULAS — 1º ANO (101–134)
-- =============================================================

INSERT IGNORE INTO aulas (id, titulo, ano_escolar, tipo, link_texto, link_questoes, imagem) VALUES
(101,'Conceitos fundamentais da Geografia',          1,'normal',  '1ano/Textos1/Texto01/tp1.php',  'questoes/modelo-questoes.php','fotoIndex/1ano/aula01.webp'),
(102,'Coordenadas geográficas',                      1,'normal',  '1ano/Textos1/Texto02/tp2.php',  'questoes/modelo-questoes.php','fotoIndex/1ano/aula02.webp'),
(103,'Cartografia: hemisférios, fusos e zonas',      1,'normal',  '1ano/Textos1/Texto03/tp3.php',  'questoes/modelo-questoes.php','fotoIndex/1ano/aula03.webp'),
(104,'Escala cartográfica e geográfica',             1,'normal',  '1ano/Textos1/Texto04/tp4.php',  'questoes/modelo-questoes.php','fotoIndex/1ano/aula04.webp'),
(105,'Projeções cartográficas',                      1,'normal',  '1ano/Textos1/Texto05/tp5.php',  'questoes/modelo-questoes.php','fotoIndex/1ano/aula05.webp'),
(106,'Revisão (Aulas 01 a 05)',                      1,'revisao', NULL,                             'questoes/modelo-questoes.php','fotoIndex/revisao.webp'),
(107,'Sensoriamento remoto e novas tecnologias',     1,'normal',  '1ano/Textos1/Texto07/tp7.php',  'questoes/modelo-questoes.php','fotoIndex/1ano/aula07.webp'),
(108,'Eras geológicas e estrutura interna da Terra', 1,'normal',  '1ano/Textos1/Texto08/tp8.php',  'questoes/modelo-questoes.php','fotoIndex/1ano/aula08.webp'),
(109,'Deriva dos continentes e tectônica de placas', 1,'normal',  '1ano/Textos1/Texto09/tp9.php',  'questoes/modelo-questoes.php','fotoIndex/1ano/aula09.webp'),
(110,'Dinâmicas internas do relevo: tectonismo',     1,'normal',  '1ano/Textos1/Texto10/tp10.php', 'questoes/modelo-questoes.php','fotoIndex/1ano/aula10.webp'),
(111,'Dinâmicas externas do relevo: intemperismo',   1,'normal',  '1ano/Textos1/Texto11/tp11.php', 'questoes/modelo-questoes.php','fotoIndex/1ano/aula11.webp'),
(112,'Revisão (Aulas 07 a 11)',                      1,'revisao', NULL,                             'questoes/modelo-questoes.php','fotoIndex/revisao.webp'),
(113,'Solos: formação e tipos',                      1,'normal',  '1ano/Textos1/Texto13/tp13.php', 'questoes/modelo-questoes.php','fotoIndex/1ano/aula13.webp'),
(114,'Hidrografia I – ciclo e bacias',               1,'normal',  '1ano/Textos1/Texto14/tp14.php', 'questoes/modelo-questoes.php','fotoIndex/1ano/aula14.webp'),
(115,'Hidrografia II – rios brasileiros',            1,'normal',  '1ano/Textos1/Texto15/tp15.php', 'questoes/modelo-questoes.php','fotoIndex/1ano/aula15.webp'),
(116,'Climas do mundo I – fatores e tipos',          1,'normal',  '1ano/Textos1/Texto16/tp16.php', 'questoes/modelo-questoes.php','fotoIndex/1ano/aula16.webp'),
(117,'Climas do mundo II – zonas climáticas',        1,'normal',  '1ano/Textos1/Texto17/tp17.php', 'questoes/modelo-questoes.php','fotoIndex/1ano/aula17.webp'),
(118,'Domínios vegetais do mundo',                   1,'normal',  '1ano/Textos1/Texto18/tp18.php', 'questoes/modelo-questoes.php','fotoIndex/1ano/aula18.webp'),
(119,'Revisão (Aulas 13 a 18)',                      1,'revisao', NULL,                             'questoes/modelo-questoes.php','fotoIndex/revisao.webp'),
(120,'Questão ambiental I – desmatamento',           1,'normal',  '1ano/Textos1/Texto20/tp20.php', 'questoes/modelo-questoes.php','fotoIndex/1ano/aula20.webp'),
(121,'Questão ambiental II – água',                  1,'normal',  '1ano/Textos1/Texto21/tp21.php', 'questoes/modelo-questoes.php','fotoIndex/1ano/aula21.webp'),
(122,'Questão ambiental III – atmosfera',            1,'normal',  '1ano/Textos1/Texto22/tp22.php', 'questoes/modelo-questoes.php','fotoIndex/1ano/aula22.webp'),
(123,'Desenvolvimento sustentável',                  1,'normal',  '1ano/Textos1/Texto23/tp23.php', 'questoes/modelo-questoes.php','fotoIndex/1ano/aula23.webp'),
(124,'Fontes de energia I – não renováveis',         1,'normal',  '1ano/Textos1/Texto24/tp24.php', 'questoes/modelo-questoes.php','fotoIndex/1ano/aula24.webp'),
(125,'Fontes de energia II – renováveis',            1,'normal',  '1ano/Textos1/Texto25/tp25.php', 'questoes/modelo-questoes.php','fotoIndex/1ano/aula25.webp'),
(126,'Revisão (Aulas 20 a 25)',                      1,'revisao', NULL,                             'questoes/modelo-questoes.php','fotoIndex/revisao.webp'),
(127,'A população mundial I – crescimento',          1,'normal',  '1ano/Textos1/Texto27/tp27.php', 'questoes/modelo-questoes.php','fotoIndex/1ano/aula27.webp'),
(128,'A população mundial II – estrutura',           1,'normal',  '1ano/Textos1/Texto28/tp28.php', 'questoes/modelo-questoes.php','fotoIndex/1ano/aula28.webp'),
(129,'A população mundial III – distribuição',       1,'normal',  '1ano/Textos1/Texto29/tp29.php', 'questoes/modelo-questoes.php','fotoIndex/1ano/aula29.webp'),
(130,'Urbanização mundial',                          1,'normal',  '1ano/Textos1/Texto30/tp30.php', 'questoes/modelo-questoes.php','fotoIndex/1ano/aula30.webp'),
(131,'Revisão (Aulas 27 a 30)',                      1,'revisao', NULL,                             'questoes/modelo-questoes.php','fotoIndex/revisao.webp'),
(132,'Globalização e geopolítica',                   1,'normal',  '1ano/Textos1/Texto32/tp32.php', 'questoes/modelo-questoes.php','fotoIndex/1ano/aula32.webp'),
(133,'Blocos econômicos',                            1,'normal',  '1ano/Textos1/Texto33/tp33.php', 'questoes/modelo-questoes.php','fotoIndex/1ano/aula33.webp'),
(134,'Revisão (Aulas 31 a 33)',                      1,'revisao', NULL,                             'questoes/modelo-questoes.php','fotoIndex/revisao.webp');

-- =============================================================
-- AULAS — 2º ANO (201–236)
-- =============================================================

INSERT IGNORE INTO aulas (id, titulo, ano_escolar, tipo, link_texto, link_questoes, imagem) VALUES
(201,'Formação territorial do Brasil',          2,'normal',  '2ano/Textos2/Texto01/ts1.php',  'questoes/modelo-questoes.php','fotoIndex/2ano/aula01.webp'),
(202,'Consolidação do território brasileiro',   2,'normal',  '2ano/Textos2/Texto02/ts2.php',  'questoes/modelo-questoes.php','fotoIndex/2ano/aula02.webp'),
(203,'População I – formação e estrutura',      2,'normal',  '2ano/Textos2/Texto03/ts3.php',  'questoes/modelo-questoes.php','fotoIndex/2ano/aula03.webp'),
(204,'Geografia agrária I - questão fundiária', 2,'normal',  '2ano/Textos2/Texto04/ts4.php',  'questoes/modelo-questoes.php','fotoIndex/2ano/aula04.webp'),
(205,'Estrutura geológica e relevo brasileiro', 2,'normal',  '2ano/Textos2/Texto05/ts5.php',  'questoes/modelo-questoes.php','fotoIndex/2ano/aula05.webp'),
(206,'Revisão (Aulas 01 a 05)',                 2,'revisao', NULL,                             'questoes/modelo-questoes.php','fotoIndex/revisao.webp'),
(207,'Classificação do relevo e litoral',       2,'normal',  '2ano/Textos2/Texto07/ts7.php',  'questoes/modelo-questoes.php','fotoIndex/2ano/aula07.webp'),
(208,'Recursos minerais do Brasil',             2,'normal',  '2ano/Textos2/Texto08/ts8.php',  'questoes/modelo-questoes.php','fotoIndex/2ano/aula08.webp'),
(209,'Industrialização brasileira I',           2,'normal',  '2ano/Textos2/Texto09/ts9.php',  'questoes/modelo-questoes.php','fotoIndex/2ano/aula09.webp'),
(210,'Industrialização brasileira II',          2,'normal',  '2ano/Textos2/Texto10/ts10.php', 'questoes/modelo-questoes.php','fotoIndex/2ano/aula10.webp'),
(211,'Sistema de transportes no Brasil',        2,'normal',  '2ano/Textos2/Texto11/ts11.php', 'questoes/modelo-questoes.php','fotoIndex/2ano/aula11.webp'),
(212,'Revisão (Aulas 07 a 11)',                 2,'revisao', NULL,                             'questoes/modelo-questoes.php','fotoIndex/revisao.webp'),
(213,'Fontes de energia I',                     2,'normal',  '2ano/Textos2/Texto13/ts13.php', 'questoes/modelo-questoes.php','fotoIndex/2ano/aula13.webp'),
(214,'Climas do Brasil I - Tipos',              2,'normal',  '2ano/Textos2/Texto14/ts14.php', 'questoes/modelo-questoes.php','fotoIndex/2ano/aula14.webp'),
(215,'Climas do Brasil II - Problemas',         2,'normal',  '2ano/Textos2/Texto15/ts15.php', 'questoes/modelo-questoes.php','fotoIndex/2ano/aula15.webp'),
(216,'Vegetação I - Domínios',                  2,'normal',  '2ano/Textos2/Texto16/ts16.php', 'questoes/modelo-questoes.php','fotoIndex/2ano/aula16.webp'),
(217,'Vegetação II - Domínios',                 2,'normal',  '2ano/Textos2/Texto17/ts17.php', 'questoes/modelo-questoes.php','fotoIndex/2ano/aula17.webp'),
(218,'Geografia agrária II',                    2,'normal',  '2ano/Textos2/Texto18/ts18.php', 'questoes/modelo-questoes.php','fotoIndex/2ano/aula18.webp'),
(219,'Revisão (Aulas 13 a 18)',                 2,'revisao', NULL,                             'questoes/modelo-questoes.php','fotoIndex/revisao.webp'),
(220,'Geografia agrária III',                   2,'normal',  '2ano/Textos2/Texto20/ts20.php', 'questoes/modelo-questoes.php','fotoIndex/2ano/aula20.webp'),
(221,'Hidrografia brasileira',                  2,'normal',  '2ano/Textos2/Texto21/ts21.php', 'questoes/modelo-questoes.php','fotoIndex/2ano/aula21.webp'),
(222,'Fontes de energia II',                    2,'normal',  '2ano/Textos2/Texto22/ts22.php', 'questoes/modelo-questoes.php','fotoIndex/2ano/aula22.webp'),
(223,'População II – Dinâmica',                 2,'normal',  '2ano/Textos2/Texto23/ts23.php', 'questoes/modelo-questoes.php','fotoIndex/2ano/aula23.webp'),
(224,'População III - Atividades',              2,'normal',  '2ano/Textos2/Texto24/ts24.php', 'questoes/modelo-questoes.php','fotoIndex/2ano/aula24.webp'),
(225,'População IV - Migrações',                2,'normal',  '2ano/Textos2/Texto25/ts25.php', 'questoes/modelo-questoes.php','fotoIndex/2ano/aula25.webp'),
(226,'Revisão (Aulas 20 a 25)',                 2,'revisao', NULL,                             'questoes/modelo-questoes.php','fotoIndex/revisao.webp'),
(227,'O processo de urbanização',               2,'normal',  '2ano/Textos2/Texto27/ts27.php', 'questoes/modelo-questoes.php','fotoIndex/2ano/aula27.webp'),
(228,'Redes e hierarquias urbanas',             2,'normal',  '2ano/Textos2/Texto28/ts28.php', 'questoes/modelo-questoes.php','fotoIndex/2ano/aula28.webp'),
(229,'O espaço das cidades',                    2,'normal',  '2ano/Textos2/Texto29/ts29.php', 'questoes/modelo-questoes.php','fotoIndex/2ano/aula29.webp'),
(230,'Problemas socioambientais urbanos',        2,'normal',  '2ano/Textos2/Texto30/ts30.php', 'questoes/modelo-questoes.php','fotoIndex/2ano/aula30.webp'),
(231,'Revisão (Aulas 27 a 30)',                 2,'revisao', NULL,                             'questoes/modelo-questoes.php','fotoIndex/revisao.webp'),
(232,'Fontes de energia III',                   2,'normal',  '2ano/Textos2/Texto32/ts32.php', 'questoes/modelo-questoes.php','fotoIndex/2ano/aula32.webp'),
(233,'Meio ambiente no Brasil',                 2,'normal',  '2ano/Textos2/Texto33/ts33.php', 'questoes/modelo-questoes.php','fotoIndex/2ano/aula33.webp'),
(234,'Síntese das regiões brasileiras',         2,'normal',  '2ano/Textos2/Texto34/ts34.php', 'questoes/modelo-questoes.php','fotoIndex/2ano/aula34.webp'),
(235,'Brasil na globalização',                  2,'normal',  '2ano/Textos2/Texto35/ts35.php', 'questoes/modelo-questoes.php','fotoIndex/2ano/aula35.webp'),
(236,'Revisão (Aulas 32 a 35)',                 2,'revisao', NULL,                             'questoes/modelo-questoes.php','fotoIndex/revisao.webp');

-- =============================================================
-- AULAS — 3º ANO (301–336)
-- =============================================================

INSERT IGNORE INTO aulas (id, titulo, ano_escolar, tipo, link_texto, link_questoes, imagem) VALUES
(301,'A Geografia no período atual',            3,'normal',  '3ano/Textos3/Texto01/tt1.php',  'questoes/modelo-questoes.php','fotoIndex/3ano/aula01.webp'),
(302,'A população no mundo',                    3,'normal',  '3ano/Textos3/Texto02/tt2.php',  'questoes/modelo-questoes.php','fotoIndex/3ano/aula02.webp'),
(303,'Migrações internacionais',                3,'normal',  '3ano/Textos3/Texto03/tt3.php',  'questoes/modelo-questoes.php','fotoIndex/3ano/aula03.webp'),
(304,'Os fatores do desenvolvimento',           3,'normal',  '3ano/Textos3/Texto04/tt4.php',  'questoes/modelo-questoes.php','fotoIndex/3ano/aula04.webp'),
(305,'Como medir o desenvolvimento?',           3,'normal',  '3ano/Textos3/Texto05/tt5.php',  'questoes/modelo-questoes.php','fotoIndex/3ano/aula05.webp'),
(306,'Revisão (Aulas 01 a 05)',                 3,'revisao', NULL,                             'questoes/modelo-questoes.php','fotoIndex/3ano/aula06.webp'),
(307,'Industrialização mundial I',              3,'normal',  '3ano/Textos3/Texto07/tt7.php',  'questoes/modelo-questoes.php','fotoIndex/3ano/aula07.webp'),
(308,'Industrialização mundial II',             3,'normal',  '3ano/Textos3/Texto08/tt8.php',  'questoes/modelo-questoes.php','fotoIndex/3ano/aula08.webp'),
(309,'Industrialização mundial III',            3,'normal',  '3ano/Textos3/Texto09/tt9.php',  'questoes/modelo-questoes.php','fotoIndex/3ano/aula09.webp'),
(310,'Geopolítica e regionalização I',          3,'normal',  '3ano/Textos3/Texto10/tt10.php', 'questoes/modelo-questoes.php','fotoIndex/3ano/aula10.webp'),
(311,'Geopolítica e regionalização II',         3,'normal',  '3ano/Textos3/Texto11/tt11.php', 'questoes/modelo-questoes.php','fotoIndex/3ano/aula11.webp'),
(312,'Revisão (Aulas 07 a 11)',                 3,'revisao', NULL,                             'questoes/modelo-questoes.php','fotoIndex/3ano/aula12.webp'),
(313,'Agropecuária mundial',                    3,'normal',  '3ano/Textos3/Texto13/tt13.php', 'questoes/modelo-questoes.php','fotoIndex/3ano/aula13.webp'),
(314,'A urbanização mundial',                   3,'normal',  '3ano/Textos3/Texto14/tt14.php', 'questoes/modelo-questoes.php','fotoIndex/3ano/aula14.webp'),
(315,'As redes do espaço geográfico',           3,'normal',  '3ano/Textos3/Texto15/tt15.php', 'questoes/modelo-questoes.php','fotoIndex/3ano/aula15.webp'),
(316,'Comércio multilateral',                   3,'normal',  '3ano/Textos3/Texto16/tt16.php', 'questoes/modelo-questoes.php','fotoIndex/3ano/aula16.webp'),
(317,'União Europeia I',                        3,'normal',  '3ano/Textos3/Texto17/tt17.php', 'questoes/modelo-questoes.php','fotoIndex/3ano/aula17.webp'),
(318,'União Europeia II',                       3,'normal',  '3ano/Textos3/Texto18/tt18.php', 'questoes/modelo-questoes.php','fotoIndex/3ano/aula18.webp'),
(319,'Revisão (Aulas 13 a 18)',                 3,'revisao', NULL,                             'questoes/modelo-questoes.php','fotoIndex/3ano/aula19.webp'),
(320,'América do Norte: Estados Unidos',        3,'normal',  '3ano/Textos3/Texto20/tt20.php', 'questoes/modelo-questoes.php','fotoIndex/3ano/aula20.webp'),
(321,'América do Norte: Canadá e México',       3,'normal',  '3ano/Textos3/Texto21/tt21.php', 'questoes/modelo-questoes.php','fotoIndex/3ano/aula21.webp'),
(322,'Américas Central e do Sul',               3,'normal',  '3ano/Textos3/Texto22/tt22.php', 'questoes/modelo-questoes.php','fotoIndex/3ano/aula22.webp'),
(323,'Conflitos e política na América',         3,'normal',  '3ano/Textos3/Texto23/tt23.php', 'questoes/modelo-questoes.php','fotoIndex/3ano/aula23.webp'),
(324,'Revisão (Aulas 20 a 23)',                 3,'revisao', NULL,                             'questoes/modelo-questoes.php','fotoIndex/3ano/aula24.webp'),
(325,'África I - Diversidade natural',          3,'normal',  '3ano/Textos3/Texto25/tt25.php', 'questoes/modelo-questoes.php','fotoIndex/3ano/aula25.webp'),
(326,'África II - Panorama atual',              3,'normal',  '3ano/Textos3/Texto26/tt26.php', 'questoes/modelo-questoes.php','fotoIndex/3ano/aula26.webp'),
(327,'África III - Conflitos',                  3,'normal',  '3ano/Textos3/Texto27/tt27.php', 'questoes/modelo-questoes.php','fotoIndex/3ano/aula27.webp'),
(328,'Conflitos no Oriente Médio',              3,'normal',  '3ano/Textos3/Texto28/tt28.php', 'questoes/modelo-questoes.php','fotoIndex/3ano/aula28.webp'),
(329,'Golfo Pérsico e Turquia',                 3,'normal',  '3ano/Textos3/Texto29/tt29.php', 'questoes/modelo-questoes.php','fotoIndex/3ano/aula29.webp'),
(330,'Revisão (Aulas 25 a 29)',                 3,'revisao', NULL,                             'questoes/modelo-questoes.php','fotoIndex/3ano/aula30.webp'),
(331,'Subcontinente indiano',                   3,'normal',  '3ano/Textos3/Texto31/tt31.php', 'questoes/modelo-questoes.php','fotoIndex/3ano/aula31.webp'),
(332,'Rússia - Características gerais',         3,'normal',  '3ano/Textos3/Texto32/tt32.php', 'questoes/modelo-questoes.php','fotoIndex/3ano/aula32.webp'),
(333,'O dinamismo da China',                    3,'normal',  '3ano/Textos3/Texto33/tt33.php', 'questoes/modelo-questoes.php','fotoIndex/3ano/aula33.webp'),
(334,'Conflitos internos na China',             3,'normal',  '3ano/Textos3/Texto34/tt34.php', 'questoes/modelo-questoes.php','fotoIndex/3ano/aula34.webp'),
(335,'Japão, Tigres e Oceania',                 3,'normal',  '3ano/Textos3/Texto35/tt35.php', 'questoes/modelo-questoes.php','fotoIndex/3ano/aula35.webp'),
(336,'Revisão (Aulas 31 a 35)',                 3,'revisao', NULL,                             'questoes/modelo-questoes.php','fotoIndex/3ano/aula36.webp');

SET foreign_key_checks = 1;

-- Confirmação
SELECT ano_escolar, COUNT(*) AS total FROM aulas GROUP BY ano_escolar;
