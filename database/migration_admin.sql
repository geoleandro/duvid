-- =============================================================
--  DUVID GEOGRAFIA — Migration: Painel Admin
--  Adiciona coluna `tipo` à tabela alunos e cria conta admin.
--  É idempotente: pode rodar mais de uma vez sem quebrar.
--
--  PASSOS:
--  1. Execute este arquivo no phpMyAdmin (banco duvid).
--  2. Troque o e-mail e a senha abaixo antes de rodar.
--  3. Guarde a senha — o hash bcrypt é gerado na linha abaixo.
--
--  Para gerar o hash fora do MySQL, rode no terminal:
--    php -r "echo password_hash('SUA_SENHA_AQUI', PASSWORD_DEFAULT);"
--  e cole o resultado na linha do INSERT abaixo.
-- =============================================================

USE duvid;
SET NAMES utf8mb4;

-- =============================================================
-- 1. Adiciona coluna `tipo` na tabela alunos (se não existir)
-- =============================================================
DROP PROCEDURE IF EXISTS _duvid_migrar_admin;
DELIMITER $$
CREATE PROCEDURE _duvid_migrar_admin()
BEGIN
    DECLARE db VARCHAR(64);
    SET db = DATABASE();

    -- Coluna tipo
    IF NOT EXISTS (
        SELECT 1 FROM information_schema.COLUMNS
        WHERE TABLE_SCHEMA = db AND TABLE_NAME = 'alunos' AND COLUMN_NAME = 'tipo'
    ) THEN
        ALTER TABLE alunos
            ADD COLUMN tipo ENUM('aluno','professor','admin') NOT NULL DEFAULT 'aluno'
            AFTER escola;
    END IF;

    -- Coluna ultimo_acesso (utile para o dashboard: "ativos nos últimos 7 dias")
    IF NOT EXISTS (
        SELECT 1 FROM information_schema.COLUMNS
        WHERE TABLE_SCHEMA = db AND TABLE_NAME = 'alunos' AND COLUMN_NAME = 'ultimo_acesso'
    ) THEN
        ALTER TABLE alunos
            ADD COLUMN ultimo_acesso TIMESTAMP NULL DEFAULT NULL
            AFTER tipo;
    END IF;

    -- Índice para consultas rápidas por tipo
    IF NOT EXISTS (
        SELECT 1 FROM information_schema.STATISTICS
        WHERE TABLE_SCHEMA = db AND TABLE_NAME = 'alunos' AND INDEX_NAME = 'idx_aluno_tipo'
    ) THEN
        ALTER TABLE alunos ADD INDEX idx_aluno_tipo (tipo);
    END IF;

    -- Índice para consultas rápidas por ultimo_acesso
    IF NOT EXISTS (
        SELECT 1 FROM information_schema.STATISTICS
        WHERE TABLE_SCHEMA = db AND TABLE_NAME = 'alunos' AND INDEX_NAME = 'idx_aluno_ultimo_acesso'
    ) THEN
        ALTER TABLE alunos ADD INDEX idx_aluno_ultimo_acesso (ultimo_acesso);
    END IF;

    -- Coluna professor_id em turmas (para rastrear quem criou a turma)
    IF NOT EXISTS (
        SELECT 1 FROM information_schema.COLUMNS
        WHERE TABLE_SCHEMA = db AND TABLE_NAME = 'turmas' AND COLUMN_NAME = 'professor_id'
    ) THEN
        ALTER TABLE turmas
            ADD COLUMN professor_id INT NULL AFTER criado_em,
            ADD COLUMN escola VARCHAR(150) NULL AFTER professor_id,
            ADD COLUMN cidade VARCHAR(100) NULL AFTER escola,
            ADD COLUMN estado CHAR(2)     NULL AFTER cidade;
    END IF;

END$$
DELIMITER ;

CALL _duvid_migrar_admin();
DROP PROCEDURE _duvid_migrar_admin;

-- =============================================================
-- 2. Atualiza view ranking para incluir colunas de desempenho
--    que o admin usa (total_questoes_respondidas, media_acertos_pct)
-- =============================================================
CREATE OR REPLACE VIEW ranking AS
SELECT
    a.id,
    a.nome,
    a.turma_id,
    t.nome        AS turma_nome,
    t.codigo      AS turma_codigo,
    a.globinhos_total,
    a.lvl,
    a.patente,
    a.estado,
    a.cidade,
    a.escola,
    a.ultimo_acesso,
    (SELECT COUNT(*)
       FROM progresso_aulas p
      WHERE p.aluno_id = a.id
        AND p.concluido_texto = 1
        AND p.concluido_questoes = 1)  AS aulas_100,
    COUNT(DISTINCT ca.conquista_id)    AS conquistas,
    COALESCE(SUM(ra.total_questoes), 0)  AS total_questoes_respondidas,
    COALESCE(SUM(ra.acertos), 0)         AS total_acertos,
    CASE
        WHEN COALESCE(SUM(ra.total_questoes), 0) = 0 THEN 0
        ELSE ROUND(SUM(ra.acertos) / SUM(ra.total_questoes) * 100, 1)
    END AS media_acertos_pct
FROM alunos a
LEFT JOIN turmas            t  ON t.id = a.turma_id
LEFT JOIN conquistas_alunos ca ON ca.aluno_id = a.id
LEFT JOIN respostas_aulas   ra ON ra.aluno_id = a.id
GROUP BY
    a.id, a.nome, a.turma_id, t.nome, t.codigo,
    a.globinhos_total, a.lvl, a.patente,
    a.estado, a.cidade, a.escola, a.ultimo_acesso
ORDER BY a.globinhos_total DESC;

-- =============================================================
-- 3. Cria conta admin
--    IMPORTANTE: troque o e-mail e o hash da senha abaixo!
--
--    Para gerar o hash no terminal PHP:
--      php -r "echo password_hash('minhasenha123', PASSWORD_DEFAULT);"
--
--    O hash abaixo corresponde à senha: Admin@Duvid2026
--    (troque antes de ir para produção)
-- =============================================================

-- Hash de exemplo para: Admin@Duvid2026
-- Gere o seu próprio com: php -r "echo password_hash('SuaSenha', PASSWORD_DEFAULT);"
SET @admin_email = 'geoleandro.henrique@gmail.com';
SET @admin_hash  = '$2y$12$examplehashchangemeXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX';

-- Insere ou atualiza a conta admin
INSERT INTO alunos (nome, email, pin_hash, turma_id, tipo)
VALUES (
    'Admin',
    @admin_email,
    @admin_hash,
    (SELECT id FROM turmas WHERE codigo = 'LIVRE' LIMIT 1),
    'admin'
)
ON DUPLICATE KEY UPDATE
    tipo     = 'admin',
    pin_hash = IF(@admin_hash LIKE '$2y$%', @admin_hash, pin_hash);

-- =============================================================
-- 4. Confirmação
-- =============================================================
SELECT id, nome, email, tipo, ultimo_acesso FROM alunos WHERE tipo = 'admin';
SELECT 'Migration admin concluída com sucesso!' AS status;
