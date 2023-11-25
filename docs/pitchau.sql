CREATE DATABASE Pitchau;
Use Pitchau;

CREATE TABLE Usuario (
    id INT AUTO_INCREMENT PRIMARY KEY,
    email VARCHAR(255) NOT NULL,
    senha VARCHAR(255) NOT NULL,
    nome VARCHAR(255) NOT NULL
);
ALTER TABLE Usuario ADD COLUMN isAdmin BOOLEAN NOT NULL DEFAULT FALSE;

INSERT INTO Usuario 
    (email, senha, nome, isAdmin)
    VALUES ('admin@example.com', 'senha_admin', 'Admin Name', TRUE
);

CREATE TABLE Produto (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(255) NOT NULL,
    descricao TEXT,
    foto VARCHAR(255),
    valor DECIMAL(10, 2) NOT NULL,
    categoria VARCHAR(255) NOT NULL,
    FOREIGN KEY(categoria) REFERENCES Categoria(id)
);

CREATE TABLE Slider (
    id INT AUTO_INCREMENT PRIMARY KEY,
    url_img VARCHAR(255) NOT NULL
);

CREATE TABLE Compra  (
    id INT AUTO_INCREMENT PRIMARY KEY,
    usuario_id INT,
    datahora DATETIME,
    FOREIGN KEY (usuario_id) REFERENCES Usuario (id)
);

CREATE TABLE ProdutoCompra (
    produto_id INT,
    compra_id INT,
    quantidade INT,
    FOREIGN KEY (produto_id) REFERENCES Produto (id),
    FOREIGN KEY (compra_id) REFERENCES Compra (id)
);

-- usuario id = 12
-- compra id = 277
-- produtos id 2 7 22
-- quantidades 1 3 1

-- tabela Compra
-- 277 12 '2023-11-18 09:49'

-- tabela ProdutoCompra
-- 2 277 1
-- 7 277 3
-- 22 277 1

CREATE TABLE Categoria (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(255) NOT NULL
);