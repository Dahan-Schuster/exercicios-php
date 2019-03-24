<?php

$pessoa = array(
    'nome' => 'Dahan',
    'idade' => 18
);

echo "<b>Array original:</b> ";
var_dump($pessoa);

echo "<br/><br/>";

echo "Iteração do array sem utilizar referência:<br/>";
echo "(foi utilizado um if para alterar o valor durante a iteração)<br/>";
foreach ($pessoa as $valor) {

    if (gettype($valor) === 'integer') $valor += 10;
    echo "  -> " . $valor . "<br/>";

}
echo "<br/>";
var_dump($pessoa);

echo "<br/><br/>";

echo "Iteração do array utilizando referência:<br/>";
echo "(foi utilizado um if para alterar o valor durante a iteração)<br/>";
foreach ($pessoa as &$valor) {

    if (gettype($valor) === 'integer') $valor += 10;
    echo "  -> " . $valor . "<br/>";

}
echo "<br/>";
var_dump($pessoa);

?>