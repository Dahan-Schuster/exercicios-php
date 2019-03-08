<?php

   function fatorial($numero) {
       return $numero > 1 ? fatorial($numero - 1) * $numero : 1;
    }

    $numero = intval($_POST["numero"]);
    echo fatorial($numero);

?>