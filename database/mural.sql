CREATE TABLE IF NOT EXISTS mural (
    id         INT AUTO_INCREMENT PRIMARY KEY,
    aluno_id   INT NOT NULL,
    tipo       ENUM('questao','texto','pixelart','sugestao') NOT NULL,
    conteudo   TEXT NOT NULL,
    status     ENUM('pendente','aprovado','recusado') NOT NULL DEFAULT 'pendente',
    criado_em  DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY (aluno_id) REFERENCES alunos(id) ON DELETE CASCADE,
    INDEX idx_tipo (tipo),
    INDEX idx_status (status),
    INDEX idx_aluno (aluno_id)
);
