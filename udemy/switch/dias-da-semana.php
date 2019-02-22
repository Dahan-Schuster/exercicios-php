<?php

$diaDaSemana = date("w");  # http://php.net/manual/pt_BR/function.date.php
# $diaDaSemana = 8; # para forçar o uso do default

echo "Hoje é ";
switch ($diaDaSemana) {
    case 0:
        echo "Domingo";
        break;
    case 1:
        echo "Segunda";
        break;
    case 2:
        echo "Terça";
        break;
    case 3:
        echo "Quarta";
        break;
    case 4:
        echo "Quinta";
        break;
    case 5:
        echo "Sexta";
        break;
    case 6:
        echo "Sábado";
        break;
    default:
        echo "um dia muito lindo";
}

echo ".";


?>