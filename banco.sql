CREATE DATABASE PROJETOPDO;
USE PROJETOPDO;

CREATE TABLE TB_USUARIO
(
	ID_USUARIO INT PRIMARY KEY AUTO_INCREMENT,
    NOME_USUARIO VARCHAR(100),
    EMAIL_USUARIO VARCHAR(100)
);

INSERT INTO TB_USUARIO(NOME_USUARIO, EMAIL_USUARIO)
VALUES('Alexander', 'alexander@email.com'),
('Waltinho', 'waltinho2@email.com'),
('Weliton', 'welintonto@calvo.com');

SELECT * FROM TB_USUARIO;
