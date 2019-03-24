<?php

include "funcoes/somar.php";

include_once "funcoes/somar.php";
# chama o arquivo apenas se ainda não chamou, evitando erros de duplicação de funções

echo somar(2, 5);

?>