CREATE DATABASE db_login;
USE db_login;

CREATE TABLE tbl_usuario(
	id_usuario INT(5) AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(40),
    telefone VARCHAR(30),
    email VARCHAR(50),
    senha CHAR(32)
);
SELECT * FROM tbl_usuario;