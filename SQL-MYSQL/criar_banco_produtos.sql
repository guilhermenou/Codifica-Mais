CREATE DATABASE produtos;
USE produtos;
CREATE TABLE produtos(
id int AUTO_INCREMENT,
nome varchar(30),
sku bigint unique,
descricao text,
categoria varchar(30),
preco decimal(10,2),
unidade_medidda varchar(5),
peso decimal(6),
quantidade_estoque bigint(200),
fabricante varchar(40),
fornecedor varchar(30),
deleted_at varchar(10),
created_at varchar(10),
updated_at varchar(10),
);
