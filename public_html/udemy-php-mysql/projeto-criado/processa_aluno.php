<?php

include_once 'db.php';

$nome_aluno = $_POST['nome_aluno'];
$email_aluno = $_POST['email_aluno'];
$nascimento_aluno = $_POST['nascimento_aluno'];

echo $nome_aluno;
echo $email_aluno;
echo $nascimento_aluno;

$queryInsertAluno = "INSERT INTO ALUNO(nomeAluno, emailAluno, nascimentoAluno) values 
('$nome_aluno', '$email_aluno', '$nascimento_aluno')";

var_dump(mysqli_query($conexao, $queryInsertAluno));

header('location:index.php?pagina=alunos');

