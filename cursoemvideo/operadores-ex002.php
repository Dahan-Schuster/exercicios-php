<!DOCTYPE html>
<html lang="br">
<head>
    <meta charset="utf-8"/>
    <title>Operadores e Funcoes Aritméticas</title>
    <link rel="stylesheet" type="text/css" href="_css/estilo.css"/>
</head>
<body>
<div>
    <h4>Mostrar se um eleitor é obrigado a votar ou não</h4>
<?php
/**
 * Created by PhpStorm.
 * User: dahan
 * Date: 18/02/19
 * Time: 22:53
 */
    $ano = $_GET['nascimento'];
    $idade = 2019 - $ano;

    echo "Idade: $idade <br/>";

    echo ($idade >= 18 and $idade < 65) ? "VOTO OBRIGATÓRIO" : ($idade < 16 ? "NÃO PODE VOTAR" : "VOTO OPCIONAL");

    /*
    if ($idade < 16)
        echo "Não pode votar.";
    elseif ($idade < 18 or $idade >= 65)
        echo "Voto não obrigatório";
    else
        echo "Voto obrigatório";
    */
?>
</div>
</body>
</html>