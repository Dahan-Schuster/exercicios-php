<!DOCTYPE html>
<html lang="br">
    <head>
        <meta charset="utf-8"/>
        <title>Operadores e Funcoes Aritméticas</title>
        <link rel="icon" href="_icones/operadores.ico" type="image/x-icon"/>   
        <link rel="stylesheet" type="text/css" href="_css/estilo.css"/>    
    </head>
<body>
    <div>
        <?php
        
            $x = (float) $_GET['x'];
            $y = (float) $_GET['y'];
        
            function introducao() {
                global $x, $y;
                echo "Números: $x e $y <br>";
            }
        
            
            function operadoresBasicos(){ 
                global $x, $y;
                
                $soma = $x + $y;
                $subtracao = $x - $y;
                $multiplicacao = $x * $y;
                $divisao = $x / $y;
                $modulo = $x % $y;

                echo "<br>A soma vale $soma";
                echo "<br>A subtração vale $subtracao";
                echo "<br>A multiplicação vale $multiplicacao";
                echo "<br>A divisão vale $divisao";
                echo "<br>O resto da divisao vale $modulo";
            }

            function operadoresRelacionais() {
                global $x, $y;
                echo "<br><br>";
                echo $x >= $y?"$x é maior ou igual a $y" :"$y é maior que $x";
                echo "<br>";

                if ($x == $y)
                    echo $x === $y?"$x e $y são iguais e possuem o mesmo tipo" : "$x e $y são iguais mas não do mesmo tipo";

            }
        
            function ordemDePrecedencia(){     
                $media = ($GLOBALS['x'] + $GLOBALS['y']) / 2;
        
                echo "<br><br> A média vale $media";
            }
        
            function funcoesAritmeticas(){
                global $x, $y;
                
                echo "<br><br>Os valores absolutos de $x e de $y valem  " . abs($x) . " e " . abs($y) . ", respectivamente.";
                echo "<br>O valor de $x<sup>$y</sup> vale " . pow($x, $y);
                echo "<br>As raizes de $x e $y valem " . sqrt($x) . " e " . sqrt($y) . ", respectivamente.";
                echo "<br><br>$x arredondado ... <ul >";
                echo "<li>normalmente: " . round($x) . "</li>";
                echo "<li>para baixo: " . floor($x) . "</li>";
                echo "<li>para cima: " . ceil($x) . "</li></ul>";
                echo "<br>A parte inteira de $x vale " . intval($x);
            }
        
            function formatacao(){
                global $x;
                
                // variavel, casas decimais, separador de casas decimais e separador de milhar
                echo "<br>O valor de $x em moeda vale R$ " . number_format($x, 2, ",", ".");
            }
        
        
            introducao();
            operadoresBasicos();
            operadoresRelacionais();
            ordemDePrecedencia();
            funcoesAritmeticas();
            formatacao();
        ?>
    </div>
</body>

</html>