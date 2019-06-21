<?php

include_once 'db.php';

$id = base64_decode($_GET['id']);

$queryRemoveMatriculasDoCurso = "DELETE FROM ALUNOS_CURSOS WHERE id_curso = $id";

mysqli_query($conexao, $queryRemoveMatriculasDoCurso);

$queryRemoveCurso = "DELETE FROM CURSOS WHERE id_curso = $id";

mysqli_query($conexao, $queryRemoveCurso);

header('location:index.php?pagina=cursos');