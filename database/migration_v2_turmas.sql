-- =============================================================
--  MIGRATION v2 — Login obrigatório (email + PIN) e Turmas por código
--  PORTÁVEL: roda em MariaDB E em MySQL 5.7/8 (puro).
--  Rode UMA vez no phpMyAdmin (local e online: mysql.duvid.com.br).
--  É idempotente: pode rodar de novo sem quebrar.
--
--  Como funciona: as alterações que não têm "IF NOT EXISTS" no
--  MySQL puro (ADD COLUMN, ADD KEY, ADD CONSTRAINT) são aplicadas
--  dentro de um PROCEDURE que checa o information_schema antes.
--  CREATE TABLE / INSERT IGNORE / UPDATE / CREATE OR REPLACE VIEW
--  já são portáveis e ficam fora do procedure.
-- =============================================================

USE duvid;
SET NAMES utf8mb4;

-- -------------------------------------------------------------
-- 1) Garante a tabela turmas (caso ainda não exista no online)
-- -------------------------------------------------------------
CREATE TABLE IF NOT EXISTS turmas (
    id          INT AUTO_INCREMENT PRIMARY KEY,
    nome        VARCHAR(100) NOT NULL,
    codigo      VARCHAR(40)  DEFAULT NULL,
    ano_escolar TINYINT      NOT NULL DEFAULT 0,
    senha       VARCHAR(100) DEFAULT NULL,
    ativa       TINYINT(1)   NOT NULL DEFAULT 1,
    criado_em   TIMESTAMP    NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- -------------------------------------------------------------
-- 2) Alterações condicionais (colunas, índices e FK)
-- -------------------------------------------------------------
DROP PROCEDURE IF EXISTS _duvid_migrar_v2;
DELIMITER $$
CREATE PROCEDURE _duvid_migrar_v2()
BEGIN
    DECLARE db VARCHAR(64);
    SET db = DATABASE();

    -- alunos.email
    IF NOT EXISTS (SELECT 1 FROM information_schema.COLUMNS
        WHERE TABLE_SCHEMA = db AND TABLE_NAME = 'alunos' AND COLUMN_NAME = 'email') THEN
        ALTER TABLE alunos ADD COLUMN email VARCHAR(150) NULL AFTER nome;
    END IF;

    -- alunos.pin_hash
    IF NOT EXISTS (SELECT 1 FROM information_schema.COLUMNS
        WHERE TABLE_SCHEMA = db AND TABLE_NAME = 'alunos' AND COLUMN_NAME = 'pin_hash') THEN
        ALTER TABLE alunos ADD COLUMN pin_hash VARCHAR(255) NULL AFTER email;
    END IF;

    -- alunos.turma_id
    IF NOT EXISTS (SELECT 1 FROM information_schema.COLUMNS
        WHERE TABLE_SCHEMA = db AND TABLE_NAME = 'alunos' AND COLUMN_NAME = 'turma_id') THEN
        ALTER TABLE alunos ADD COLUMN turma_id INT NULL AFTER patente;
    END IF;

    -- alunos: índice de email único (uk_email)
    IF NOT EXISTS (SELECT 1 FROM information_schema.STATISTICS
        WHERE TABLE_SCHEMA = db AND TABLE_NAME = 'alunos' AND INDEX_NAME = 'uk_email') THEN
        ALTER TABLE alunos ADD UNIQUE KEY uk_email (email);
    END IF;

    -- alunos: índice de turma
    IF NOT EXISTS (SELECT 1 FROM information_schema.STATISTICS
        WHERE TABLE_SCHEMA = db AND TABLE_NAME = 'alunos' AND INDEX_NAME = 'idx_aluno_turma') THEN
        ALTER TABLE alunos ADD INDEX idx_aluno_turma (turma_id);
    END IF;

    -- turmas.codigo
    IF NOT EXISTS (SELECT 1 FROM information_schema.COLUMNS
        WHERE TABLE_SCHEMA = db AND TABLE_NAME = 'turmas' AND COLUMN_NAME = 'codigo') THEN
        ALTER TABLE turmas ADD COLUMN codigo VARCHAR(40) NULL AFTER nome;
    END IF;

    -- turmas: código único (uk_turma_codigo)
    IF NOT EXISTS (SELECT 1 FROM information_schema.STATISTICS
        WHERE TABLE_SCHEMA = db AND TABLE_NAME = 'turmas' AND INDEX_NAME = 'uk_turma_codigo') THEN
        ALTER TABLE turmas ADD UNIQUE KEY uk_turma_codigo (codigo);
    END IF;

    -- chave estrangeira alunos.turma_id -> turmas.id
    IF NOT EXISTS (SELECT 1 FROM information_schema.TABLE_CONSTRAINTS
        WHERE CONSTRAINT_SCHEMA = db AND TABLE_NAME = 'alunos'
          AND CONSTRAINT_NAME = 'fk_aluno_turma') THEN
        ALTER TABLE alunos ADD CONSTRAINT fk_aluno_turma
            FOREIGN KEY (turma_id) REFERENCES turmas(id) ON DELETE SET NULL;
    END IF;
END$$
DELIMITER ;

CALL _duvid_migrar_v2();
DROP PROCEDURE _duvid_migrar_v2;

-- -------------------------------------------------------------
-- 3) Turma padrão "Livre" + backfill dos alunos existentes
-- -------------------------------------------------------------
INSERT IGNORE INTO turmas (nome, codigo, ano_escolar, ativa)
VALUES ('Livre', 'LIVRE', 0, 1);

UPDATE alunos
   SET turma_id = (SELECT id FROM turmas WHERE codigo = 'LIVRE' LIMIT 1)
 WHERE turma_id IS NULL;

-- -------------------------------------------------------------
-- 4) View "ranking" com a turma (nome + código) — portável
-- -------------------------------------------------------------
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
    COUNT(DISTINCT ca.conquista_id)   AS conquistas
FROM alunos a
LEFT JOIN turmas t             ON t.id = a.turma_id
LEFT JOIN conquistas_alunos ca ON ca.aluno_id = a.id
GROUP BY a.id, a.nome, a.turma_id, t.nome, t.codigo,
         a.globinhos_total, a.lvl, a.patente
ORDER BY a.globinhos_total DESC;

-- -------------------------------------------------------------
-- 5) (OPCIONAL) Crie as turmas reais do professor.
--    O "codigo" é o que o aluno digita no cadastro.
-- -------------------------------------------------------------
-- INSERT IGNORE INTO turmas (nome, codigo, ano_escolar, ativa) VALUES
--   ('1º A - 2026', 'GEO-1A-2026', 1, 1),
--   ('2º A - 2026', 'GEO-2A-2026', 2, 1),
--   ('3º A - 2026', 'GEO-3A-2026', 3, 1);

-- Confirmação
SELECT id, nome, codigo, ano_escolar, ativa FROM turmas;
SELECT VERSION() AS versao_do_banco;
