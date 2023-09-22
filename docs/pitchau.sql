CREATE TABLE Usuario (
    id INT AUTO_INCREMENT PRIMARY KEY,
    email VARCHAR(255) NOT NULL,
    senha VARCHAR(255) NOT NULL,
    nome VARCHAR(255) NOT NULL
);

CREATE TABLE Produto (
    id INT AUTO_INCREMENT PRIMARY KEY,
    id_cat int
    nome VARCHAR(255) NOT NULL,
    descricao TEXT,
    foto VARCHAR(255),
    valor DECIMAL(10, 2) NOT NULL,
    id_vendedor int,
    FOREIGN KEY (id_vendedor) REFERENCES Usuario(id),
    FOREIGN Key(id_cad) REFERENCES Categoria(IDcat)
);

Create table Categoria(
    IDcat int Not Null Primary Key,
    Nome varchar(255),
    descricao varchar(255)
 );

CREATE TABLE Slider (
    id INT AUTO_INCREMENT PRIMARY KEY,
    url_img VARCHAR(255) NOT NULL
)";