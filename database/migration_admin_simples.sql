-- =============================================================
--  DUVID — Migration Admin SIMPLIFICADA
--  Versão sem DELIMITER/PROCEDURE — funciona em hospedagem compartilhada.
--  Execute no phpMyAdmin online: banco duvid → aba SQL → cole e execute.
-- =============================================================

USE duvid;
SET NAMES utf8mb4;

-- 1. Coluna tipo (ignora se já existir — MariaDB e MySQL 8+ suportam IF NOT EXISTS)
ALTER TABLE alunos
    ADD COLUMN IF NOT EXISTS tipo ENUM('aluno','professor','admin')
    NOT NULL DEFAULT 'aluno' AFTER escola;

-- 2. Coluna ultimo_acesso
ALTER TABLE alunos
    ADD COLUMN IF NOT EXISTS ultimo_acesso TIMESTAMP NULL DEFAULT NULL
    AFTER tipo;

-- 3. Índices (ignora duplicados automaticamente com IF NOT EXISTS)
ALTER TABLE alunos
    ADD INDEX IF NOT EXISTS idx_aluno_tipo (tipo);

ALTER TABLE alunos
    ADD INDEX IF NOT EXISTS idx_aluno_ultimo_acesso (ultimo_acesso);

-- 4. Colunas extras em turmas (professor_id, escola, cidade, estado)
ALTER TABLE turmas
    ADD COLUMN IF NOT EXISTS professor_id INT NULL AFTER criado_em;
ALTER TABLE turmas
    ADD COLUMN IF NOT EXISTS escola VARCHAR(150) NULL AFTER professor_id;
ALTER TABLE turmas
    ADD COLUMN IF NOT EXISTS cidade VARCHAR(100) NULL AFTER escola;
ALTER TABLE turmas
    ADD COLUMN IF NOT EXISTS estado CHAR(2) NULL AFTER cidade;

-- 5. Atualiza a view ranking para incluir campos de desempenho
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

-- 6. Confirmação
SELECT 'Migration concluída!' AS status;
DESCRIBE alunos;
