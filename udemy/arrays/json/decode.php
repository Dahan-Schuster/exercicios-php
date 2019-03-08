<?php

# json que pode ser recebido por url, por ajax ou qualquer outra forma
$json = '[{"nome":"Jo\u00e3o","idade":20},{"nome":"Glaucio","idade":25}]';

# o parâmetro assoc como true transforma o valor em array, em vez de objeto
$data_array = json_decode($json, true);
$data_objeto = json_decode($json);

echo "<b>Json convertido em array:</b><br/>";
var_dump($data_array);
echo "<br/>";
echo "<b>Json convertido em objeto:</b><br/>";
var_dump($data_objeto);

?>