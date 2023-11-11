 CREATE DATABASE Pitchau;
 
 CREATE TABLE Usuario (
    id INT AUTO_INCREMENT PRIMARY KEY,
    email VARCHAR(255) NOT NULL,
    senha VARCHAR(255) NOT NULL,
    nome VARCHAR(255) NOT NULL
);
ALTER TABLE Usuario (
    ADD COLUMN isAdmin BOOLEAN NOT NULL DEFAULT FALSE
);
INSERT INTO Usuario 
    (email, senha, nome, isAdmin)
    VALUES ('admin@example.com', 'senha_admin', 'Admin Name', TRUE
);

CREATE TABLE Produto (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(255) NOT NULL,
    descricao TEXT,
    foto VARCHAR(255),
    valor DECIMAL(10, 2) NOT NULL
);

CREATE TABLE Slider (
    id INT AUTO_INCREMENT PRIMARY KEY,
    url_img VARCHAR(255) NOT NULL
);

