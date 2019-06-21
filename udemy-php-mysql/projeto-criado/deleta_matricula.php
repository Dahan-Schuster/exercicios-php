<?php

include_once 'db.php';

$id = base64_decode($_GET['id']);

$queryRemoveMatricula = "DELETE FROM ALUNOS_CURSOS WHERE id_aluno_curso = $id";

mysqli_query($conexao, $queryRemoveMatricula);

header('location:index.php?pagina=matriculas');