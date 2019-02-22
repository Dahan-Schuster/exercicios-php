<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8"/>
    <link rel="stylesheet" href="_css/estilo.css" type="text/css"/>
    <title>Exercício 001 de Operdores</title>
</head>

<body>
<div>
<?php
/**
 * Created by PhpStorm.
 * User: dahan
 * Date: 18/02/19
 * Time: 22:36
 */

    $n1 = $_GET["a"];
    $n2 = $_GET["b"];
    $operacao = $_GET["op"];

    $resultado = $operacao == "soma" ? $n1 + $n2 : $n1 - $n2;

    echo ($operacao == "soma" ? "Soma: $n1 + $n2" : "Subtração: $n1 - $n2") . " = $resultado";

?>
</div>
</body>

</html>