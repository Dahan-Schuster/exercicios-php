<?php
# Exemplo da difrença entre parâmetros por valor e por referência

#################################################
# parâmetro por valor : o valor da variável $a
# fora da função não se mistura com o valor
# da variável $a dentro da função (escopo)

$a = 10;

function trocaValorA($a) {
    $a = 50;

    return $a;
}

echo '<b>$a original:</b> ' . $a;
echo "<br/>";
echo '<b>$a com valor trocado:</b>  ' . trocaValorA($a);
echo "<br/>";
echo '<b>$a após a função:</b> ' . $a;

##################################################
echo "<br/><br/>";
##################################################
# parâmetro por referênia : o valor da variável $b
# fora da função é alterado após a chamada da função
# pois há uma referência que indica tal comportamento
# o uso de um 'E' comercial (&) faz isso

$b = 15;

function trocaValorB(&$b) {
    $b = 35;

    return $b;
}

echo '<b>$b original:</b> ' . $b;
echo "<br/>";
echo '<b>$b com valor trocado:</b>  ' . trocaValorB($b);
echo "<br/>";
echo '<b>$b após a função:</b> ' . $b;


?>