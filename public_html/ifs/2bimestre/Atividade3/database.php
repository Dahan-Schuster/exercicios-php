<?php

/* REALIZANDO CONEXÃO COM O MYSQL COM A CLASSE mysqli */

$servidor = "localhost";
$usuario = "root";
$senha = "root";
$banco_dados = "Produtos";

$conexao = new mysqli($servidor, $usuario, $senha, $banco_dados);

$conexao->query("CREATE TABLE IF NOT EXISTS produtos (
	codigo INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
	descricao varchar(255) NOT NULL,
	preco_unitario float NOT NULL,
	preco_atacado  float NOT NULL,
	quantidade_minima int NOT NULL,
	quantidade_estoque int NOT NULL);");

$conexao->query("CREATE TABLE IF NOT EXISTS usuarios (
	login varchar(255) NOT NULL PRIMARY KEY,
	senha varchar(255) NOT NULL,
	tipo varchar(30) NOT NULL);");

?>