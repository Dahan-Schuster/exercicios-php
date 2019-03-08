<?php
/**
 * Created by PhpStorm.
 * User: Dahan Schuster
 * Date: 22/02/2019
 * Time: 14:00
 */

echo "OPERADORES DE ATRIBUIÇÃO<br><br>";

/* Strings */
$nome = "esse exemplo";              # sinal de igual: atribuição
echo $nome . " só faz sentido dando uma olhada no código<br>";  # sinal de ponto: concatenação
$nome .= " entendeu?";          # ponto-igual: concatena e atribui
echo $nome . "<br>";

######################
echo "<br>";
######################

$valorTotal = 0;
echo $valorTotal . "<br>";
$valorTotal += 100;             # mais-igual: acrescenta ao valor atual
echo $valorTotal . "<br>";
$valorTotal -= 50;              # menos-igual: subtrai do valor atual
echo $valorTotal . "<br>";
$valorTotal *= .5;              # vezes-igual: multiplica do valor atual
echo $valorTotal . "<br>";

######################
echo "<br>";
######################

echo "OPERADORES ARITIMÉTICOS<br><br>";

$a = 10; $b = 5;
echo "<b>Valor a: $a, valor b: $b</b><br><br>";

echo "SOMA: " . ($a + $b) . "<br>";
echo "SUBTRAÇÃO: " . ($a - $b) . "<br>";
echo "MULTIPLICAÇÃO: " . ($a * $b) . "<br>";
echo "DIVISÃO: " . ($a / $b) . "<br>";
echo "MÓDULO: " . ($a % $b) . "<br>";

######################
echo "<br>";
######################

echo "OPERADORES DE VALIDAÇÃO<br><br>";

$a = 5; $b = "5";
echo "<b>Valor a: $a, valor b: \"$b\"</b><br><br>";

echo "a é igual a b em valor: "; var_dump($a == $b);
echo "a é igual a b em valor e tipo: "; var_dump($a === $b);
echo "a é diferente de b em valor: "; var_dump($a != $b);
echo "a é diferente de b em valor e tipo: "; var_dump($a !== $b);

echo "a é maior que b: "; var_dump($a > $b);
echo "a é menor que b: "; var_dump($a < $b);
echo "a é maior-igual que b: "; var_dump($a >= $b);
echo "a é maior-igual que b: "; var_dump($a <= $b);

echo "PHP 7 APENAS<br>";
echo '<br>OPERADOR SPACESHIP: echo "Quem é maior? (1) -> a; (0) -> são iguais; (-1) -> b :"; var_dump($a <=> $b);';

?>