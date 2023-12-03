CREATE DATABASE if NOT EXISTS Pitchau;
Use Pitchau;

CREATE TABLE if NOT EXISTS Usuario(
    id INT AUTO_INCREMENT PRIMARY KEY,
    email VARCHAR(255) NOT NULL,
    senha VARCHAR(255) NOT NULL,
    nome VARCHAR(255) NOT NULL,
    isAdmin BOOLEAN NOT NULL DEFAULT FALSE 
);
-- ALTER TABLE Usuario ADD COLUMN isAdmin BOOLEAN NOT NULL DEFAULT FALSE;
-- Passar esse alter table pra direto na tabela

CREATE TABLE if NOT EXISTS Categoria(
    id INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(255) NOT NULL
);

CREATE TABLE if NOT EXISTS Produto (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(255) NOT NULL,
    descricao TEXT,
    foto VARCHAR(255),
    valor DECIMAL(10, 2) NOT NULL,
    categoria_id INT NOT NULL,
    quantidade_estoque INT,
    FOREIGN KEY(categoria_id) REFERENCES Categoria(id)
);

CREATE TABLE if NOT EXISTS Slider (
    id INT AUTO_INCREMENT PRIMARY KEY,
    url_img VARCHAR(255) NOT NULL
);

CREATE TABLE if NOT EXISTS Compra  (
    id INT AUTO_INCREMENT PRIMARY KEY,
    usuario_id INT,
    datahora DATETIME,
    FOREIGN KEY (usuario_id) REFERENCES Usuario (id)
);

CREATE TABLE if NOT EXISTS ProdutoCompra (
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


-- Inserções ao Banco de Dados
use Pitchau;
INSERT INTO Usuario (email, senha, nome, isAdmin) VALUES('admin@example.com', 'senha_admin', 'Admin Name', TRUE);

INSERT INTO Categoria(nome) VALUES('Sopro');
INSERT INTO Categoria(nome) VALUES('Cordas');
INSERT INTO Categoria(nome) VALUES('Percussão');
INSERT INTO Categoria(nome) VALUES('Teclas');

INSERT INTO Produto(nome, descricao, foto, valor, categoria_id) VALUES('Violão de aço', 'Violao com cordas de aço', 'img/img_produto/imagem1.png', 1600, 1);
INSERT INTO Produto(nome, descricao, foto, valor, categoria_id) VALUES("Violão de Nylon", "Violão com cordas de nylon", "img/img_produto/imagem2.png", 1400, 1);
INSERT INTO Produto(nome, descricao, foto, valor, categoria_id) VALUES("Guitarra EletroAcustica", "Guitarra eletroacústica com cordas de aço", "img/img_produto/imagem3.png", 3800, 1);
-- SELECT 'id' FROM Categoria WHERE nome LIKE 'Cordas'
-- Identificar 'id' da tabela Categoria onde 'nome' for o da categoria

INSERT INTO Slider(url_img) VALUES("img/img_slider/slider.png");