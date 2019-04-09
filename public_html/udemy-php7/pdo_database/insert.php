<?php

include_once 'conexao.php';

$statement = $conexao->prepare("INSERT INTO tb_usuarios(login, senha) VALUES (:LOGIN, :SENHA)");

echo
"<form action=\"\" method=\"post\">
Login: <input type='text' name='login'><br>
Senha: <input type='password' name='senha'><br>
<br>
<input type='submit'>
</form>";


if (isset($_POST['login']) AND isset($_POST['senha']) ) {

    $login = $_POST['login'];
    $senha = $_POST['senha'];

    $statement->bindParam(":LOGIN", $login);
    $statement->bindParam(":SENHA", $senha);

    $statement->execute();


}