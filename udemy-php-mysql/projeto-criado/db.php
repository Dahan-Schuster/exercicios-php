<?php

$servidor = "localhost";
$usuario = "root";
$senha = "";
$database = "aula-php-crud";


$conexao = mysqli_connect($servidor, $usuario, $senha, $database);

# Criando tabelas usando PHP ************************************************
# Tabela cursos (nome do curso, carga horaria)
$query = "CREATE TABLE IF NOT EXISTS CURSOS(
	id_curso int not null auto_increment,
	nome_curso varchar(255) not null,
	carga_horaria int not null,
	primary key(id_curso)
)";
 
$executar = mysqli_query($conexao, $query);
 
# Tabela alunos (nome do aluno, data de nascimento)
$query = "CREATE TABLE IF NOT EXISTS ALUNOS(
	id_aluno int not null auto_increment,
	nome_aluno varchar(255) not null,
	email_aluno varchar(255) not null,
	data_nascimento varchar(255),
	primary key(id_aluno)
)";
 
$executar = mysqli_query($conexao, $query);
 
# Tabela alunos_cursos (aluno, curso)
$query = "CREATE TABLE IF NOT EXISTS ALUNOS_CURSOS(
	id_aluno_curso int not null auto_increment,
	id_aluno int not null,
	id_curso int not null,
	primary key(id_aluno_curso)
)";
 
$executar = mysqli_query($conexao, $query);

# Fim criação de tabelas *****************************************************

# Preparando lista de registros de cada tabela *******************************

$buscaCursos = "SELECT * FROM CURSOS";
$listaDeCursos = mysqli_query($conexao, $buscaCursos);

$buscaAlunos = "SELECT * FROM ALUNOS";
$listaDeAlunos = mysqli_query($conexao, $buscaAlunos);

$buscaMatriculas = "SELECT ALUNOS.nome_aluno as Aluno, CURSOS.nome_curso as Curso, ALUNOS_CURSOS.id_aluno_curso
                    FROM ALUNOS_CURSOS, ALUNOS, CURSOS WHERE 
                    ALUNOS.id_aluno = ALUNOS_CURSOS.id_aluno AND
                    CURSOS.id_curso = ALUNOS_CURSOS.id_curso;";
                    
$listaDeMatriculas = mysqli_query($conexao, $buscaMatriculas);

# Fim listagem de registros **************************************************

function buscarPorCampo($tabela, $campo, $valor)
{
	global $conexao;
	$busca = "SELECT * FROM $tabela WHERE $campo = $valor";
	return mysqli_query($conexao, $busca);
}
