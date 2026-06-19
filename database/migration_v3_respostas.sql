-- =============================================================
--  MIGRATION v3 — Questões erradas por aluno×aula (versão enxuta)
--  Rode UMA vez no phpMyAdmin (local e online). Idempotente.
--  Uma linha por aluno×aula; a última tentativa sobrescreve.
-- =============================================================

USE duvid;

CREATE TABLE IF NOT EXISTS respostas_aulas (
    id             INT       AUTO_INCREMENT PRIMARY KEY,
    aluno_id       INT       NOT NULL,
    aula_id        SMALLINT  NOT NULL,
    total_questoes TINYINT   NOT NULL DEFAULT 0,
    acertos        TINYINT   NOT NULL DEFAULT 0,
    erradas_json   TEXT      DEFAULT NULL,   -- JSON: [{"pergunta":"...","correta":"..."}]
    tentativas     INT       NOT NULL DEFAULT 0,
    atualizado_em  TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
    UNIQUE KEY uq_resp_aluno_aula (aluno_id, aula_id),
    FOREIGN KEY (aluno_id) REFERENCES alunos(id) ON DELETE CASCADE,
    FOREIGN KEY (aula_id)  REFERENCES aulas(id)  ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
