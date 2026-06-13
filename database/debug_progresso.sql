-- Cole no phpMyAdmin e rode para ver o estado real
USE duvid;

-- 1. Progresso do aluno de teste (troque 6 pelo id real)
SELECT p.*, a.titulo, a.ano_escolar
FROM progresso_aulas p
LEFT JOIN aulas a ON a.id = p.aula_id
WHERE p.aluno_id = 6;

-- 2. Existem aulas cadastradas?
SELECT COUNT(*) AS total_aulas FROM aulas;

-- 3. Log de globinhos
SELECT * FROM globinhos_log WHERE aluno_id = 6 ORDER BY id DESC LIMIT 10;
