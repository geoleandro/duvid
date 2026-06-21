-- =============================================================
--  migration_rate_limit.sql
--  Tabela de controle de tentativas de login por IP.
--  Execute uma vez no banco local e no de produção.
-- =============================================================

CREATE TABLE IF NOT EXISTS tentativas_login (
    ip            VARCHAR(45)  NOT NULL,          -- suporta IPv4 e IPv6
    tentativas    INT          NOT NULL DEFAULT 0,
    ultima_tentativa DATETIME  NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
    bloqueado_ate DATETIME     NULL DEFAULT NULL,  -- NULL = não bloqueado
    PRIMARY KEY (ip),
    INDEX idx_bloqueado_ate (bloqueado_ate)        -- limpa registros antigos com eficiência
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
