<?php

/* REALIZANDO CONEXÃO COM O MYSQL COM A CLASSE mysqli */

$servidor = "localhost";
$usuario = "root";
$senha = "root";
$banco_dados = "dbphp7";

$conexao = new mysqli($servidor, $usuario, $senha, $banco_dados);

if ($conexao->connect_error) {
    echo "Error: " . $conexao->connect_error;
} else {
    echo "Conectado!";
}

/* PREAPARANDO QUERYS COM A CLASSE mysqli_stmt E O MÉTODO mysqli::prepare */

# objeto mysqli_stmt
$comando_inserir_usuarios = $conexao->prepare("INSERT INTO tb_usuarios (login, senha) values(?, ?)");

# Os valores marcados com '?' na string 'query' serão substituidos pelos
# parâmetros enviados ao método mysqli_stmt::bind_param
# Note que o primeiro parâmetro refere-se aos tipos dos valores.
# Como, na tabela, os atributos 'login' e 'senha' são 'varchar', o parâmetro é 'ss'
# Isto porque valores varchar são string e, por isso, são referenciados com 's'
# Lista de siglas paras os diferentes valores:
#   String (char, varchar, enum) -> s
#   Integer (int)   -> i
#   Float/Double (decimal) -> d
#   Boolean (blob) -> b

$comando_inserir_usuarios->bind_param("ss", $novoUsuario, $senhaUsuaro);

/*
$novoUsuario = "user";
$senhaUsuaro = "12345";

$comando_inserir_usuarios->execute();


$novoUsuario = "user2";
$senhaUsuaro = "00000";


$comando_inserir_usuarios->execute();

*/