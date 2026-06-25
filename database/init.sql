-- ============================================================
--  INIT.SQL  –  Sistema de Vendas
--  Execute este arquivo no seu MySQL/MariaDB antes de rodar
--  as migrations do Laravel.
-- ============================================================

CREATE DATABASE IF NOT EXISTS sistema_vendas
    CHARACTER SET utf8mb4
    COLLATE utf8mb4_unicode_ci;

USE sistema_vendas;

-- ------------------------------------------------------------
-- Tabela de usuários (login)
-- ------------------------------------------------------------
CREATE TABLE IF NOT EXISTS users (
    id         BIGINT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    name       VARCHAR(120)  NOT NULL,
    email      VARCHAR(180)  NOT NULL UNIQUE,
    password   VARCHAR(255)  NOT NULL,
    created_at TIMESTAMP     NULL,
    updated_at TIMESTAMP     NULL
);

-- senha padrão: admin123  (já em hash bcrypt)
INSERT INTO users (name, email, password, created_at, updated_at)
VALUES (
    'Administrador',
    'admin@sistema.com',
    '$2y$12$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',
    NOW(),
    NOW()
);

-- ------------------------------------------------------------
-- Clientes
-- ------------------------------------------------------------
CREATE TABLE IF NOT EXISTS clientes (
    id         BIGINT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    nome       VARCHAR(120)  NOT NULL,
    email      VARCHAR(180)  NULL,
    telefone   VARCHAR(20)   NULL,
    cpf        VARCHAR(14)   NULL,
    endereco   VARCHAR(255)  NULL,
    created_at TIMESTAMP     NULL,
    updated_at TIMESTAMP     NULL
);

-- ------------------------------------------------------------
-- Produtos
-- ------------------------------------------------------------
CREATE TABLE IF NOT EXISTS produtos (
    id          BIGINT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    nome        VARCHAR(120)      NOT NULL,
    descricao   TEXT              NULL,
    preco       DECIMAL(10, 2)    NOT NULL DEFAULT 0.00,
    estoque     INT               NOT NULL DEFAULT 0,
    created_at  TIMESTAMP         NULL,
    updated_at  TIMESTAMP         NULL
);

-- ------------------------------------------------------------
-- Vendas
-- ------------------------------------------------------------
CREATE TABLE IF NOT EXISTS vendas (
    id           BIGINT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    cliente_id   BIGINT UNSIGNED  NOT NULL,
    produto_id   BIGINT UNSIGNED  NOT NULL,
    quantidade   INT              NOT NULL DEFAULT 1,
    valor_total  DECIMAL(10, 2)   NOT NULL DEFAULT 0.00,
    data_venda   DATE             NOT NULL,
    observacoes  TEXT             NULL,
    created_at   TIMESTAMP        NULL,
    updated_at   TIMESTAMP        NULL,

    CONSTRAINT fk_venda_cliente FOREIGN KEY (cliente_id) REFERENCES clientes(id),
    CONSTRAINT fk_venda_produto FOREIGN KEY (produto_id) REFERENCES produtos(id)
);
