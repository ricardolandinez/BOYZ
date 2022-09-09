CREATE DATABASE IF NOT EXISTS `boyz`;
USE `boyz`;

CREATE TABLE IF NOT EXISTS `boyz`.`users` (
  `id` INT PRIMARY KEY AUTO_INCREMENT,
  `usuario` VARCHAR(45) NOT NULL,
  `clave` VARCHAR(255) NOT NULL,
  `name` VARCHAR(45) NOT NULL
);

INSERT INTO `boyz`.`users` (`usuario`, `clave`, `name`) VALUES ('admin', '$2y$10$pqd6JZan3tH9nZS1J4vFNelmdMe1M.KEdUtIGMYINTsryxkFAhtfW', 'Administrador');