<style>
    table.tabela-mae {
        border: medium solid black;
    }
    th, td {
        border: thin solid black;
    }
    td {
        text-align: center;
    }
</style>
<?php
/**
 * Created by PhpStorm.
 * User: dahan
 * Date: 24/03/19
 * Time: 13:27
 */

# mysqli -> Conexão com o banco de dados

$servidor = "localhost"; # em projetos profissionais esta variável teria como valor o IP do server
$usuario = "root";
$senha = "root";
$database = "aula-php-crud";

$conexao = mysqli_connect($servidor, $usuario, $senha, $database);

# -----------------------------------------------------------------

#criarTabelas();
#inserirDados();
apagarDados();
#atualizarDados();
consultarDados();

#------------------------------------------------------------------

function criarTabelas()
{
    global $conexao;

    # Tabela curso (nome, duração)

    $query_curso = "CREATE TABLE IF NOT EXISTS CURSO(
    id int not null auto_increment,
    nomeCurso varchar(45) not null,
    duracaoCurso int not null,
    primary key(id)
)";

    $executar = mysqli_query($conexao, $query_curso);

    # --------------------------------------
    # Tabela aluno (nome, email, nascimento)

    $query_aluno = "CREATE TABLE IF NOT EXISTS ALUNO(
    id int not null auto_increment,
    nomeAluno varchar(255) not null,
    emailAluno varchar(255) not null,
    nascimentoAluno date not null,
    primary key (id)
)";

    $executar = mysqli_query($conexao, $query_aluno);

    # -------------------------------------
    # Tabela aluno_faz_curso (aluno, curso)

    $query_aluno_faz_curso = "CREATE TABLE IF NOT EXISTS ALUNO_FAZ_CURSO(
    id int not null auto_increment,
    idAluno int not null,
    idCurso int not null,
    primary key (id),
    foreign key (idAluno) references ALUNO(id),
    foreign key (idCurso) references CURSO(id)
)";


    $executar = mysqli_query($conexao, $query_aluno_faz_curso);

}

function inserirDados()
{
    global $conexao;
# Inserindo dados na tabela ALUNO


    $query_insert_alunos = "INSERT INTO ALUNO(nomeAluno, emailAluno, nascimentoAluno) values 
    ('Jose', 'jose@email.com', '1990-01-01'),
    ('Maria', 'maria@email.com', '1989-05-11'),
    ('Lins', 'lins@email.com', '1992-07-14')";

    $executar = mysqli_query($conexao, $query_insert_alunos);

# -------------------------------
# Inserindo dados na tabela CURSO

    $query_insert_cursos = "INSERT INTO CURSO(nomeCurso, duracaoCurso) values 
    ('PHP7', 15),
    ('MySQL', 8),
    ('GIT', 4)";

    $executar = mysqli_query($conexao, $query_insert_cursos);

# -----------------------------------------
# Inserindo dados na tabela Aluno_faz_Curso

    $query_insert_aluno_faz_curso = "INSERT INTO ALUNO_FAZ_CURSO(idAluno, idCurso) values 
    (7, 1),
    (7, 2),
    (8, 3),
    (9, 1),
    (9, 3),
    (10, 1),
    (10, 2),
    (10, 3)";

    $executar = mysqli_query($conexao, $query_insert_aluno_faz_curso);

}

function apagarDados()
{
    global $conexao;
# Apagando dados da tabela  Aluno
    mysqli_query($conexao, "DELETE FROM ALUNO WHERE id > 10;");

# Apagando dados da tabela Curso
    mysqli_query($conexao, "DELETE FROM CURSO WHERE id > 3");

# Apagando dados da tabela Aluno_faz_curso (Matriculas)
    mysqli_query($conexao,  "DELETE FROM ALUNO_FAZ_CURSO WHERE ID > 8");

}

function atualizarDados()
{
    global $conexao;
# Atualizando dados na tabela ALUNO
    mysqli_query($conexao, "UPDATE ALUNO SET nomeAluno = 'Marcelo',
      emailAluno = 'marcelo@email.com',
      nascimentoALuno = '1991-12-04 '
      WHERE id = 10");
}

function consultarDados() {

    global $conexao;

    echo '<table class="tabela-mae">
            <tr>
                <th>Alunos</th>
                <th>Cursos</th>
            </tr>';
    echo '<tr>';
    echo '<td>';
    consultarTabelaALUNO($conexao);
    echo '</td><td>';
    consultarTabelaCURSO($conexao);
    echo '</td>';
    echo '</tr></table>';

}

function consultarTabelaALUNO($conexao) {
    # recebe um array como resultado
    $consulta_alunos = mysqli_query($conexao, "SELECT * FROM ALUNO;");

    # contruindo tabela HTML para mostrar os dados na tela
    echo '<table>
            <tr>
                <th>ID</th>
                <th>Nome</th>
                <th>Email</th>
                <th>Data de Nascimento</th>
            </tr>';

    # populando a tabela com os dados do array
    while ($linha = mysqli_fetch_array($consulta_alunos)) {
        echo '<tr>';
        echo '<td>';
        echo $linha['id'];
        echo '</td>';
        echo '<td>';
        echo $linha['nomeAluno'];
        echo '</td>';
        echo '<td>';
        echo $linha['emailAluno'];
        echo '</td>';
        echo '<td>';
        echo $linha['nascimentoAluno'];
        echo '</td>';
        echo '</tr>';
    }

    # fechando a tabela
    echo '</table>';
}

function consultarTabelaCURSO($conexao) {
    # recebe um array como resultado
    $consulta_cursos = mysqli_query($conexao, "SELECT * FROM CURSO;");

    # contruindo tabela HTML para mostrar os dados na tela
    echo '<table>
            <tr>
                <th>ID</th>
                <th>Nome</th>
                <th>Carga horária</th>
            </tr>';

    # populando a tabela com os dados do array
    while ($linha = mysqli_fetch_array($consulta_cursos)) {
        echo '<tr>';
        echo '<td>';
        echo $linha['id'];
        echo '</td>';
        echo '<td>';
        echo $linha['nomeCurso'];
        echo '</td>';
        echo '<td>';
        echo $linha['duracaoCurso'];
        echo '</td>';
        echo '</tr>';
    }

    # fechando a tabela
    echo '</table>';
}