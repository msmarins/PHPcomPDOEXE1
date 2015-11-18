CREATE DATABASE IF NOT EXISTS pdo;

USE pdo;

CREATE TABLE IF NOT EXISTS `alunos` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `nota` int(10) NOT NULL,
  `nome` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
);

INSERT INTO alunos (id,nome,nota) VALUES
(1,'Marcio',8),
(2,'Carlos',3),
(3,'Andre',9),
(4,'Caique',8),
(5,'Alana',5),
(6,'Marta',0),
(7,'Alberto',6),
(8,'Valter',1),
(9,'Carleto',9),
(10,'Michel',7),
(11,'Horlando',10),
(12,'Angelica',9),
(13,'Maury',7),
(14,'Alan',10),
(15,'Cosme',5),
(16,'Joao',5),
(17,'Maite',4),
(18,'Bianca',10),
(19,'Osvaldo',2),
(20,'Debora',1);


