-- =============================================================
--  DUVID GEOGRAFIA — Tabela de reportes de problemas
--  Alunos reportam erros em questões (gabarito, ortografia, etc.)
--  Execute uma vez no banco de produção
-- =============================================================

CREATE TABLE IF NOT EXISTS reportes (
    id          INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    aluno_id    INT UNSIGNED NOT NULL,
    aula_id     VARCHAR(20) NOT NULL,
    questao_num TINYINT UNSIGNED NOT NULL,
    tipo        ENUM('gabarito','ortografia','confusa','imagem','outro') NOT NULL DEFAULT 'outro',
    mensagem    TEXT,
    resolvido   TINYINT(1) NOT NULL DEFAULT 0,
    criado_em   TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    INDEX idx_aula    (aula_id),
    INDEX idx_aluno   (aluno_id),
    INDEX idx_pendentes (resolvido, criado_em)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
