<?php

include_once 'db.php';

$id = base64_decode($_GET['id']);

$queryRemoveMatriculasDoAluno = "DELETE FROM ALUNOS_CURSOS WHERE id_aluno = $id";

mysqli_query($conexao, $queryRemoveMatriculasDoAluno);

$queryRemoveAlunos = "DELETE FROM ALUNOS WHERE id_aluno = $id";

mysqli_query($conexao, $queryRemoveAlunos);

header('location:index.php?pagina=alunos');