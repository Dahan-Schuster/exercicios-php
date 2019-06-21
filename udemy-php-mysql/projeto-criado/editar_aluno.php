<?php

include('db.php');

$id_aluno = $_POST['id_aluno'];
$nome_aluno = $_POST['nome_aluno'];
$email_aluno = $_POST['email_aluno'];
$data_nascimento = $_POST['data_nascimento'];

$queryUpdateAluno = "UPDATE ALUNOS SET nome_aluno = '$nome_aluno', email_aluno = '$email_aluno', data_nascimento = '$data_nascimento' WHERE id_aluno = $id_aluno";

mysqli_query($conexao, $queryUpdateAluno);

header('location:index.php?pagina=alunos');