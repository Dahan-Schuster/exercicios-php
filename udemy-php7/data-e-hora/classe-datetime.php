<?php

# vide documentação em : http://php.net/manual/pt_BR/class.datetime.php
$datetime = new DateTime();

echo $datetime->format("d/m/Y H:i:s");

echo "<br/>";

# vide documentação em : http://php.net/manual/pt_BR/dateinterval.construct.php
$periodo = new DateInterval("P15D");

$datetime->add($periodo);

echo $datetime->format("d/m/Y H:i:s");

?>