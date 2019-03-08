<!DOCTYPE html>
<html>
    <head>
        <title>Peso ideal</title>
        <meta charset="utf-8"/>
        <meta name="author" content="Dahan Schuster"/>
    </head>
    
    <body>
        <form action="" method="post">
            <b>Vamos calcular seu peso ideal!</b><br/><br/>
            ALTURA: <input type="number" name="altura" step="0.01"><br>
            <br/>
            SEXO: <br/>
            <input type="radio" name="sexo" value="M"> Masculino<br>
            <input type="radio" name="sexo" value="F"> Feminino<br>
            <br/>
            <input type="submit" value="Enviar"/>
        </form>
        <br/>
        Peso ideal: 
        <?php
            if (isset( $_POST["sexo"])) {
                $sexo = $_POST["sexo"];
                $altura = floatval($_POST["altura"]);
                echo $sexo == "M" ? ((72.7 * $altura) - 58) : ($sexo == "F" ? ((62.1 * $altura) - 44.7) : "Selecione o sexo.");
            }
        
            
        ?>
    </body>

</html>