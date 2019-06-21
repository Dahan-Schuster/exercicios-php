<?php

include('db.php');

$id_curso = $_POST['id_curso'];
$nome_curso = $_POST['nome_curso'];
$carga_horaria = $_POST['carga_horaria'];

$queryUpdateCurso = "UPDATE CURSOS SET nome_curso = '$nome_curso', carga_horaria = $carga_horaria WHERE id_curso = $id_curso";

mysqli_query($conexao, $queryUpdateCurso);

header('location:index.php?pagina=cursos');