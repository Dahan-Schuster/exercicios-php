<?php

include_once 'db.php';

$curso = $_POST['curso'];
$aluno = $_POST['aluno'];
date_default_timezone_set("America/Maceio");
$data_matricula = date('Y/m/d', time());

$queryInsertCurso = "INSERT INTO ALUNOS_CURSOS(id_aluno, id_curso, data_matricula) values 
('$aluno', '$curso', '$data_matricula')";


mysqli_query($conexao, $queryInsertCurso);

header('location:index.php?pagina=matriculas');