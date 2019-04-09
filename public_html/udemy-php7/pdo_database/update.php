<?php


include_once 'conexao.php';

$statement = $conexao->prepare("UPDATE tb_usuarios SET senha = :SENHA WHERE login = :LOGIN");

$login = 'user';
$senha = "senhaNova";

$statement->bindParam(":LOGIN", $login);
$statement->bindParam(":SENHA", $senha);

$statement->execute();

echo "Dados alterados!";
