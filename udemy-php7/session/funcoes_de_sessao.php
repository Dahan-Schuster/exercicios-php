<?php

echo "<b>session_status: </b>". session_status();
echo "<ul><li>Retornos:
        <ol>
        <li> Sessões desabilitadas</li>
        <li> Sessões habilitadas, mas nenhuma existente</li>
        <li> Sessões habilitadas e há uma sessão existente.</li>
        </ol>
        </li></ul>";

echo "<br/><br/>";

echo "<b>session_abort:</b> finaliza a sessão sem salvar dados.";
echo "<br/><br/>";

echo "<b>session_cache_limiter:</b> define o limite para o armazenamento de dados no cache no cliente.";
echo "<ul><li>Parâmetros:
        <ul> 
        <li>public -> permite armazenamento de cache</li>
        <li>private -> restringe um pouco em relação ao public</li>
        <li>private_no_expire -> headers expirados não são salvos</li>
        <li>nocache -> rejeita qualquer armazenamento de cache</li>
        </ul>
        </li></ul>";

echo "<br/><br/>";

echo "<b>session_cache_expire: </b> define o tempo (em minutos) para que os dados a serem armazenados em cache expirem";

echo "<br/><br/>";

echo '<b>session_decode: </b> Decodifica informações de uma sessão a partir de uma string com dados codificados e popula o superglobal $_SESSION';
echo "<br/>";
echo '<b>session_enconde: </b> Codifica os dados presentes atualmente no superglobal $_SESSION em uma string';

?>