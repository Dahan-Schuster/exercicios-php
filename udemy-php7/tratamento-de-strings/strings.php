<?php
$texto = "daHan schuSter";
echo "Texto: $texto<br/><br/>";

echo ' # upper case : ';
echo strtoupper($texto);

echo '<br/>';

echo ' # lower case : ';
echo strtolower($texto);

echo '<br/>';

echo ' # capitalize : ';
echo ucfirst($texto);

echo '<br/>';

echo ' # capitalize all : ';
echo ucwords($texto);

echo '<br/>';

echo ' # replace : ';
echo str_replace('a', '4', $texto);

echo '<br/>';

echo ' # index of : ';
echo '"r" - ' . strpos($texto, 'h');

echo '<br/>';

echo ' # substring : ';
echo substr($texto, 0, 5);

echo '<br/>';

echo ' # length : ';
echo strlen($texto);
?>