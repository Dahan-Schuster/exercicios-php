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
	data_matricula date not null default current_timestamp(),
	primary key(id_aluno_curso)
)";
 
$executar = mysqli_query($conexao, $query);

# Fim criação de tabelas *****************************************************

# Preparando lista de registros de cada tabela *******************************

$orderCursoBy = (isset($_GET['orderCursoBy']) ? $_GET['orderCursoBy'] : "nome_curso");

$buscaCursos = "SELECT * FROM CURSOS ORDER BY $orderCursoBy";
$listaDeCursos = mysqli_query($conexao, $buscaCursos);

$orderAlunoBy = (isset($_GET['orderAlunoBy']) ? $_GET['orderAlunoBy'] : "nome_aluno");

$buscaAlunos = "SELECT * FROM ALUNOS ORDER BY $orderAlunoBy";
$listaDeAlunos = mysqli_query($conexao, $buscaAlunos);

$orderMatBy = (isset($_GET['orderMatBy']) ? $_GET['orderMatBy'] : "Matricula");


$buscaMatriculas = "SELECT ALUNOS.nome_aluno as Aluno, CURSOS.nome_curso as Curso, ALUNOS_CURSOS.id_aluno_curso, ALUNOS_CURSOS.data_matricula as Matricula
                    FROM ALUNOS_CURSOS, ALUNOS, CURSOS WHERE 
                    ALUNOS.id_aluno = ALUNOS_CURSOS.id_aluno AND
                    CURSOS.id_curso = ALUNOS_CURSOS.id_curso ORDER BY $orderMatBy;";
                    
$listaDeMatriculas = mysqli_query($conexao, $buscaMatriculas);


# Fim listagem de registros **************************************************

function selectOrderByCampo($tabela, $campo){
	global $conexao;
	$busca = "SELECT * FROM $tabela ORDER BY $campo";
	return mysqli_query($conexao, $busca);
}

function buscarPorCampo($tabela, $campo, $valor)
{
	global $conexao;
	$busca = "SELECT * FROM $tabela WHERE $campo = $valor";
	return mysqli_query($conexao, $busca);
}
