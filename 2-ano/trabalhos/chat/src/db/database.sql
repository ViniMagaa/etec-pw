CREATE DATABASE chat;
USE chat;

CREATE TABLE conversas (
	id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
	data DATE,
	hora TIME,
	remetente VARCHAR(50),
	destinatario VARCHAR(50),
	mensagem LONGTEXT
);

CREATE TABLE usuarios (
	id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
	login VARCHAR(50),
	senha VARCHAR(8),
	UNIQUE(login)
);