create database fcmm;

create table usuarios (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR (50) not null,
    email VARCHAR (255) not null,
    senha VARCHAR (255) not null
);