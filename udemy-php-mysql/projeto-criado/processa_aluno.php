<?php

include_once 'db.php';

$nome_aluno = $_POST['nome_aluno'];
$email_aluno = $_POST['email_aluno'];
$data_nascimento = $_POST['data_nascimento'];

$queryInsertAluno = "INSERT INTO ALUNOS(nome_aluno, email_aluno, data_nascimento) values 
('$nome_aluno', '$email_aluno', '$data_nascimento')";

var_dump(mysqli_query($conexao, $queryInsertAluno));

header('location:index.php?pagina=alunos');

