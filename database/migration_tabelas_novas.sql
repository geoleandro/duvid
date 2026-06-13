-- =============================================================
--  DUVID — Migration 01: Tabelas novas
--  Execute APENAS UMA VEZ no banco "duvid" já existente.
--  Não altera nada que já está criado.
-- =============================================================

USE duvid;

-- 1. TURMAS
CREATE TABLE IF NOT EXISTS turmas (
    id          INT AUTO_INCREMENT PRIMARY KEY,
    nome        VARCHAR(100) NOT NULL,
    ano_escolar TINYINT      NOT NULL,
    senha       VARCHAR(100) DEFAULT NULL,
    ativa       TINYINT(1)   NOT NULL DEFAULT 1,
    criado_em   TIMESTAMP    NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB;

INSERT IGNORE INTO turmas (id, nome, ano_escolar, senha, ativa)
VALUES (1, 'Turma Livre', 0, NULL, 1);

-- 2. Adiciona turma_id em alunos (se ainda não existir)
ALTER TABLE alunos
    ADD COLUMN IF NOT EXISTS turma_id INT NOT NULL DEFAULT 1 AFTER senha_hash,
    ADD CONSTRAINT IF NOT EXISTS fk_aluno_turma
        FOREIGN KEY (turma_id) REFERENCES turmas(id);

-- 3. PROVAS
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
    criado_em       TIMESTAMP    NOT NULL DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY (turma_id) REFERENCES turmas(id),
    FOREIGN KEY (aula_id)  REFERENCES aulas(id)
) ENGINE=InnoDB;

-- 4. AVALIAÇÕES
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
) ENGINE=InnoDB;

-- 5. View notas_turma (painel do professor)
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

-- 6. Conquista extra para provas
INSERT IGNORE INTO conquistas (nome, descricao, icone, tipo, valor_necessario)
VALUES ('Nota 10!', 'Tire nota máxima em qualquer prova', '⭐', 'prova_nota10', 1);
