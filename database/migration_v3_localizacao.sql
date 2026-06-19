USE duvid;

ALTER TABLE alunos
    ADD COLUMN estado CHAR(2)      NULL AFTER turma_id,
    ADD COLUMN cidade VARCHAR(100) NULL AFTER estado,
    ADD COLUMN escola VARCHAR(150) NULL AFTER cidade;

ALTER TABLE alunos
    ADD INDEX idx_aluno_estado (estado);
