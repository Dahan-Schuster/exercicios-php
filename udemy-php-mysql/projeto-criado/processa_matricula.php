<?php

include_once 'db.php';

$curso = $_POST['curso'];
$aluno = $_POST['aluno'];

$queryInsertCurso = "INSERT INTO ALUNOS_CURSOS(id_aluno, id_curso) values 
('$aluno', '$curso')";


mysqli_query($conexao, $queryInsertCurso);

header('location:index.php?pagina=matriculas');