<?php

    # exemplo de função enviada por parâmetro para ser chamada quando
    # o processo da função principal terminar

    function test($callback) {
        # Processo lento

        $callback();

    }

    test(function() {
        echo "Terminou!";
    });

    ##################################################################
    echo "<br/><br/>";
    ##################################################################

    # exemplo de função alocada em uma variável

    $fn = function ($a) {
        var_dump($a);
    };

    $fn("oi");

?>

