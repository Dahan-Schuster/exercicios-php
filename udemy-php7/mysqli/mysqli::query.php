<?php

/* REALIZANDO CONEXÃO COM O MYSQL COM A CLASSE mysqli */

$servidor = "localhost";
$usuario = "root";
$senha = "root";
$banco_dados = "Produtos";

$conexao = new mysqli($servidor, $usuario, $senha, $banco_dados);


/* REALIZANDO QUERYS COM A FUNÇÃO mysqli::query */

# retorna um objeto do tipo mysqli_result e atribui à variável $resultado
$resultado = $conexao->query("SELECT * FROM usuarios");

# o objeto mysqli_result $resultado possui o método fetch_array que percorre o resultado da query
# como a query foi do tipo consulta (SELECT ... FROM ...), o resultado será um array com as linhas
# (rows) que se encaixam na consulta.
$rows = array();
while ($row = $resultado->fetch_array()) {
    #array_push($rows, $row);
    if ($row['login'] == 'admin' && $row['senha'] == '1234') {
    	echo 'yeah!';
    }
}

#echo json_encode($rows);
