<?php

include_once 'Documento.php';
include_once 'CPF.php';

$doc = new CPF();

$doc->setNumero("12345678900");

echo ($doc);

echo "<br/>";