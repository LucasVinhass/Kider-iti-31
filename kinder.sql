CREATE DATABASE kider;

USE kider;

CREATE TABLE conta(
login int NOT NULL,
senha varchar(100) NOT NULL,
nome varchar (100) NOT NULL,
email varchar(100) NOT NULL,
telefone int(14) NOT NULL
);

CREATE TABLE newsletter(
email varchar(100)
);

CREATE TABLE pergunta(
nomeCrianca varchar(100) NOT NULL,
nomePais varchar (100) NOT NULL,
email varchar(100) NOT NULL,
idade int(3) NOT NULL,
mensagem varchar(500)
);

CREATE TABLE professor(
nome varchar(100) NOT NULL,
escola varchar (100),
formacao varchar(100) NOT NULL,
tempoExp varchar(20),
turnoDis varchar(500)
);

