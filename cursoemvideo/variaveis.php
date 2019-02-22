<!DOCTYPE html>

<htmL>
    <head>
    <meta charset="utf-8"/>
    <link rel="icon" type="text/css" href="_icones/variaveis.ico"/>
    <link rel="stylesheet" type="text/css" href="_css/estilo.css"/>
    </head>
<body>
    <div>
    <?php
        
        // variaveis globais
        
        $nome = $_GET["nome"];
        $peso = (float)$_GET["peso"];
        $idade = (int)$_GET["idade"];
        $deMaior = $idade >= 18;
        
        // variaveis: ?idade=18&nome=Dahan&peso=50.4
        
        function tipos() {
            
            // exemplos com a palavra-chave global
            global $idade, $deMaior;
            
            echo '<br><br>Nome: ' ;
            var_dump($GLOBALS['nome']); // exemplo com a superglobal $GLOBALS
            
            echo '<br>Peso: ';
            var_dump($GLOBALS['peso']); // exemplo com a superglobal $GLOBALS
            
            echo '<br>Idade: ';
            var_dump($idade);

            echo "<br>De maior: ";
            var_dump($deMaior);

            if ($deMaior == 1) 
                $deMaiorVerboso = "de maior";
            else
                $deMaiorVerboso = "de menor";


            echo"<br><br>" . $nome . " tem " . $idade . " anos, é $deMaiorVerboso e possui $peso" . "Kg";
            
        }
        
        function variaveisSuperGlobais() {
            $ip = $_SERVER["REMOTE_ADDR"];
            $script = $_SERVER["SCRIPT_NAME"];

            echo "<br><br>IP: $ip";
            echo "<br> Script: $script";

        }
        
        function Teste() {
            static $count = 0;

            $count++;
            echo $count;
            if ($count < 10) {
                Teste();
            }
            $count--;
        }
        
        tipos();
        variaveisSuperGlobais();
        Teste();
    
        ?>
    </div>
    </body>
</htmL>