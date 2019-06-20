<?php

# PREPARA AS VARIÁVEIS PARA O CONSTRUTOR DA CLASSE PDO
$dsn = "mysql:dbname=dbphp7;host=localhost";
$user = "root";
$password = "root";

# NOVA INSTÂNCIA DA CLASSE PDO
$conexao = new PDO($dsn, $user, $password);