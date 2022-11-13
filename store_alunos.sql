DROP TABLE IF EXISTS `alunos`;
CREATE TABLE `alunos` (
  `nome` varchar(45) NOT NULL,
  `cidade` varchar(45) DEFAULT NULL,
  `matricula` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`nome`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
LOCK TABLES `alunos` WRITE;
INSERT INTO `alunos` VALUES ('Paula','Caucaia','2'),('Sérgio','Aquiraz','1');
UNLOCK TABLES;
