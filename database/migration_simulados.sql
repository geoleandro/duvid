-- =============================================================
--  DUVID GEOGRAFIA — Migration: Resultados de Simulados
--  Execução: uma vez, no banco local e em produção.
--  Segura para re-executar (IF NOT EXISTS).
-- =============================================================

CREATE TABLE IF NOT EXISTS respostas_simulados (
    id               INT AUTO_INCREMENT PRIMARY KEY,
    aluno_id         INT         NOT NULL,
    vestibular       VARCHAR(20) NOT NULL,       -- ex: "ENEM", "FUVEST"
    ano              VARCHAR(4)  NOT NULL,        -- ex: "2024"
    acertos          TINYINT     NOT NULL,
    total            TINYINT     NOT NULL,
    globinhos_ganhos SMALLINT    NOT NULL DEFAULT 0,
    realizado_em     TIMESTAMP   NOT NULL DEFAULT CURRENT_TIMESTAMP,

    FOREIGN KEY (aluno_id) REFERENCES alunos(id) ON DELETE CASCADE,
    INDEX idx_aluno   (aluno_id),
    INDEX idx_prova   (vestibular, ano)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
