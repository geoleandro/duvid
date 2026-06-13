-- ================================================================
--  RESET DE TESTE — apaga progresso e zera globinhos do aluno
--  Use no phpMyAdmin para testar os 20 pontos de questões
--  SUBSTITUA 1 pelo id real do seu aluno de teste
-- ================================================================
USE duvid;

-- 1. Apaga o progresso das aulas (permite re-completar com 20 pts)
DELETE FROM progresso_aulas WHERE aluno_id = 1;

-- 2. Apaga logs de globinhos
DELETE FROM globinhos_log WHERE aluno_id = 1;

-- 3. Zera o total do aluno
UPDATE alunos SET globinhos_total = 0, lvl = 1, patente = 'NOVATO' WHERE id = 1;

-- Confirma
SELECT id, nome, globinhos_total FROM alunos WHERE id = 1;
