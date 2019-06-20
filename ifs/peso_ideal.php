<!DOCTYPE html>
<html lang="br">
    <head>
        <title>Peso ideal</title>
        <meta charset="utf-8"/>
        <meta name="author" content="Dahan Schuster"/>
    </head>
    
    <body>
        <form action="" method="post">
            <b>Vamos calcular seu peso ideal!</b><br/><br/>
            <label for="altura">ALTURA:</label>
            <input type="number" name="altura" step="0.01" id="altura"><br>
            <br/>
            SEXO: <br/>
            <label for="masculino">Masculino</label>
            <input type="radio" name="sexo" value="M" id="masculino"><br>
            <label for="feminino">Feminino</label>
            <input type="radio" name="sexo" value="F" id="feminino"><br>
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