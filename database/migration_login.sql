-- =============================================================
--  MIGRATION: Adiciona email e PIN à tabela alunos
--  Execute no phpMyAdmin (local e online)
-- =============================================================

USE duvid;

ALTER TABLE alunos
    ADD COLUMN IF NOT EXISTS email    VARCHAR(150) NULL AFTER nome,
    ADD COLUMN IF NOT EXISTS pin_hash VARCHAR(255) NULL AFTER email;

ALTER TABLE alunos
    ADD UNIQUE KEY IF NOT EXISTS uk_email (email);

-- Confirmação
DESCRIBE alunos;
