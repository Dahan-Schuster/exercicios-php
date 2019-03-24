<?php

# Função para converter data em timestamp
$timestamp = strtotime("+1 month +15 day +5 hours");

# Funcão para converter timestamp para data formatada
$date = date("l, d/m/Y H:i", $timestamp);

echo "<b>Timestamp:</b> $timestamp (função: strtotime())";
echo "<br/>";
echo "<b>Data:</b> $date (função: date())";

echo "<br/><br/>";
echo "A função strtotime() recebe como parâmetro uma data e retorna o timestamp correspondente";
echo "<br/>";
echo "A função date() recebe como parâmetro um timestamp e retorna a data correspondente";
echo "<br/><br/>";
echo "Expressões também são aceitas como parâmetro para a função strtotime()";
echo "<br/>";
echo "<pre>Exemplos:<br/>
    -> yyyy-mm-dd : recupera a data enviada (ex.: 2000-19-12)
    -> now : recupera data atual
    -> +N day : recupera o n-ésimo dia após a data atual
    -> +N week : recupera o dia correspondente à data atual mais N semanas
    -> +N month
    -> +N year
    -> ex.: +1 month +15 day +5 hours : recupera a data de um mês, quinze dias e cinco horas após a hora atual</pre>";

?>