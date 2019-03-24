<?php

require "funcoes/somar.php";
# exige que o arquivo exista e esteja funcionando corretamente.
# causa um erro fatal (encerra o programa*) caso não.
# *: a partir do PHP 7, erros fatais podem ser tratados como exceções

require_once "funcoes/somar.php";
# chama o arquivo apenas se ainda não chamou, evitando erros de duplicação de funções


echo somar(5, 8);
?>