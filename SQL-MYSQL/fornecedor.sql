CREATE DATABASE fornecedor;
USE produtos;
CREATE TABLE (
id int AUTO_INCREMENT PRIMARY KEY,
nome_categoria varchar(30),
deleted_at timestamp default null,
created_at timestamp(6),
updated_at timestamp(6)
);