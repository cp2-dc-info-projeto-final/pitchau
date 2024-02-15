CREATE DATABASE IF NOT EXISTS Pitchau;
USE Pitchau;

CREATE TABLE IF NOT EXISTS `Categoria` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

CREATE TABLE IF NOT EXISTS `Compra` (
  `id_compra` int(11) NOT NULL AUTO_INCREMENT,
  `usuario_id` int(11) DEFAULT NULL,
  `dataehora` datetime DEFAULT NULL,
  `valor` decimal(10,2) DEFAULT NULL,
  PRIMARY KEY (`id_compra`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

CREATE TABLE IF NOT EXISTS `Produto` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(255) NOT NULL,
  `descricao` text DEFAULT NULL,
  `foto` varchar(255) DEFAULT NULL,
  `valor` decimal(10,2) NOT NULL,
  `categoria_id` int(11) NOT NULL,
  `quantidade_estoque` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `categoria_id` (`categoria_id`),
  CONSTRAINT `Produto_ibfk_1` FOREIGN KEY (`categoria_id`) REFERENCES `Categoria` (`id`)
);

CREATE TABLE IF NOT EXISTS `Slider` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `url_img` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

CREATE TABLE IF NOT EXISTS `Usuario` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(255) NOT NULL,
  `senha` varchar(255) NOT NULL,
  `nome` varchar(255) NOT NULL,
  `isAdmin` tinyint(1) NOT NULL DEFAULT 0,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=496 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

CREATE TABLE IF NOT EXISTS `ProdutoCarrinho` (
  `usuario_id` INT(11) NOT NULL,
  `produto_id` INT(11) NOT NULL,
  `quantidade` int(11) DEFAULT NULL, 
   PRIMARY KEY(`usuario_id`, `produto_id`),
   FOREIGN KEY(`usuario_id`) REFERENCES `Usuario`(`id`),
   FOREIGN KEY(`produto_id`) REFERENCES `Produto` (`id`)
)