<!DOCTYPE html/>
<html lang="pt-br">
    <head>
    <meta charset="utf-8"/>
    </head>
<body>
    <h3>Venda de picolés</h3>
    <h4>
    <?php
        $picole1 = (int) $_POST['picole1'];
        $picole2 = (int) $_POST['picole2'];
        $picole3 = (int) $_POST['picole3'];
 
        $quantidadeDeVendas = $picole1 + $picole2 + $picole3;
        $totalDeLucros = 0.0;
        
        calcularTotalDeLucros();
        mostrarResultados();
        
        ##########################################
        ################# FUNÇÕES ################
        ##########################################
        
        function calcularTotalDeLucros(){
            static $PRECO_PICOLE_1 = 0.5;
            static $PRECO_PICOLE_2 = 0.6;
            static $PRECO_PICOLE_3 = 0.75;
            global $totalDeLucros, $picole1, $picole2, $picole3;
            
            $totalDeLucros = ($picole1 * $PRECO_PICOLE_1) + ($picole2 * $PRECO_PICOLE_2) + ($picole3 * $PRECO_PICOLE_3); 
        }
        
        function mostrarResultados(){
            global $totalDeLucros, $quantidadeDeVendas;
            echo "Quantidade total de picolés vendidoss: $quantidadeDeVendas <br>";
            echo "Total de Lucros: R$ $totalDeLucros" ;
        }
    ?>
    </h4>
    </body>
</html>