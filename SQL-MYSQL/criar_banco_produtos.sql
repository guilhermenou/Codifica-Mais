CREATE DATABASE produtos;
USE produtos; 
CREATE TABLE produtos(
id int AUTO_INCREMENT PRIMARY KEY,
nome varchar(30),
sku bigint unique,
descricao text,
categoria varchar(40),
preco decimal(10,2),
unidade_medidda varchar(5),
peso decimal(6,2),
quantidade_estoque bigint,
fabricante varchar(40),
fornecedor varchar(30),
deleted_at timestamp default null,
created_at timestamp(6),
updated_at timestamp(6),
);
