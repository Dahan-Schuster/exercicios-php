<?php


include_once 'conexao.php';

$conexao->beginTransaction();

$statement = $conexao->prepare("DELETE FROM tb_usuarios WHERE login = ?");

$login = 'user';

$statement->execute(array($login));

# $conexao->commit();
$conexao->rollback();

echo "Dado não deletado!";