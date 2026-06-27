CREATE TABLE IF NOT EXISTS mural (
    id           INT AUTO_INCREMENT PRIMARY KEY,
    aluno_id     INT NOT NULL,
    tipo         ENUM('questao','texto','pixelart','sugestao') NOT NULL,
    conteudo     TEXT NOT NULL,
    status       ENUM('pendente','aprovado','recusado') NOT NULL DEFAULT 'pendente',
    ip_address   VARCHAR(45) DEFAULT NULL,          -- IPv4 e IPv6
    criado_em    DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,
    moderado_em  DATETIME DEFAULT NULL,             -- preenchido pelo painel admin
    FOREIGN KEY (aluno_id) REFERENCES alunos(id) ON DELETE CASCADE,
    INDEX idx_status (status),
    -- índice composto cobre a query de anti-spam (aluno_id + criado_em)
    INDEX idx_aluno_data (aluno_id, criado_em)
);
