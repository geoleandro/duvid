-- =============================================================
--  Migration — Certificados (blocos de revisão + módulo completo)
--  Rodar uma vez via phpMyAdmin (local e produção).
-- =============================================================

CREATE TABLE IF NOT EXISTS certificados_alunos (
    id              INT AUTO_INCREMENT PRIMARY KEY,
    aluno_id        INT NOT NULL,
    tipo            ENUM('bloco','modulo') NOT NULL,
    -- tipo='bloco'  → referencia é o id da aula de Revisão que fecha o bloco
    -- tipo='modulo' → referencia é o ano_escolar (1, 2 ou 3)
    referencia      INT NOT NULL,
    -- Código público de verificação (8 caracteres hex), gerado UMA VEZ na
    -- emissão e gravado aqui — nunca recalculado, pra não poder ser
    -- forjado editando o HTML do certificado no navegador.
    codigo          VARCHAR(8) NOT NULL,
    conquistado_em  TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
    UNIQUE KEY uq_aluno_certificado (aluno_id, tipo, referencia),
    UNIQUE KEY uq_codigo (codigo),
    FOREIGN KEY (aluno_id) REFERENCES alunos(id) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
