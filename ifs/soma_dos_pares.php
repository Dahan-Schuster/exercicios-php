<?php
    $limite_inferior = intval($_POST["inferior"]);
    $limite_superior = intval($_POST["superior"]);

    $ordem_crescente = $limite_inferior < $limite_superior;
    
    echo "Números pares entre $limite_inferior e $limite_superior, em ordem " . ($ordem_crescente ? "crescente" : "decrescente") . ": ";

    for ($i = $limite_inferior; $ordem_crescente ? $i <= $limite_superior : $i >= $limite_superior; $ordem_crescente ? $i++ : $i--) {
        static $soma = 0;
        if ($i % 2 == 0) {
            echo "-> $i ";
            $soma += $i;
        }
    }

    echo "<br><br>SOMA = $soma";
?>