<?php

$servidor = "localhost";
$usuario = "root";
$senha = "root";
$database = "aula-php-crud";


$conexao = mysqli_connect($servidor, $usuario, $senha, $database);

$buscaCursos = "SELECT * FROM CURSO";
$listaDeCursos = mysqli_query($conexao, $buscaCursos);

$buscaAlunos = "SELECT * FROM ALUNO";
$listaDeAlunos = mysqli_query($conexao, $buscaAlunos);

$buscaMatriculas = "SELECT ALUNO.nomeAluno as Aluno, CURSO.nomeCurso as Curso
                    FROM ALUNO_FAZ_CURSO, ALUNO, CURSO WHERE 
                    ALUNO.id = ALUNO_FAZ_CURSO.idAluno AND
                    CURSO.id = ALUNO_FAZ_CURSO.idCurso  ";
$listaDeMatriculas = mysqli_query($conexao, $buscaMatriculas);
