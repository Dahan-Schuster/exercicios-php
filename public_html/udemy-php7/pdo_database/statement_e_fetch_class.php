<?php

include_once 'conexao.php';

# PREPARAÇÃO DE STATEMENT BÁSICO PARA CONSULTA
$statement = $conexao->prepare("SELECT * FROM tb_usuarios");

# EXECUÇÃO DO STATEMENT
$statement->execute();

# ALOCAÇÃO DOS RESULTADOS EM UM ARRAY RESULTADOS
##  PDO::FETCH_CLASS -> Cria instâncias da classe definida em 'fetch_argument', associando os nomes das
##  colunas aos atributos (caso ajam) ou criando os atributos com os nomes das colunas (caso contrário)
## Exemplo: a classe User não possui nenhum atributo. Eles são criados de acordo com o resultado da consulta.
$result = $statement->fetchAll(PDO::FETCH_CLASS, 'User');


# echo json_encode($result);


foreach ($result as $user) {
    echo $user->__toString();
    echo "<br>";
}

class User {
    public function __toString()
    {
        $link = $this->profileLink();
        return "My login is <b>$link</b>, and my password is <b>$this->senha</b>";
    }

    public function profileLink()
    {
        return sprintf('<a href="/udemy-php7/pdo_database/profile.php?login=%s&senha=%s">%s</a>',$this->login, $this->senha,$this->login);
    }
}
