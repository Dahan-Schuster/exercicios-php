<?php

require_once ("definicao_de_sessao.php");


echo "<b>ID da sessão:</b> " . session_id();
echo "<br/>";
echo "<b>Nome da sessão:</b> " . $_SESSION['nome'];
echo "<br/>";

session_regenerate_id(); # ---> use sempre na hora
# de login para gerar outro ID de sessão,
# impedindo que hackers copiem o ID de um
# usuário e utilize em outro computador,
# conseguindo assim entrar na conta da
# vítima sem login e senha

echo "<b>Novo ID:</b> ". session_id();

?>