<!DOCTYPE html>
<html>
    <head>
        <title>Sistema operacional</title>
        <meta charset="utf-8"/>
        <meta name="author" content="Dahan Schuster"/>
    </head>
    
    <body>
        <form action="" method="post">
            <b>Qual o seu sistema operacional?  </b><br/><br/>
            <input type="radio" name="sistema" value="Windows"> Win<br>
            <input type="radio" name="sistema" value="Linux"> Linux<br>
            <input type="radio" name="sistema" value="Mac"> Mac<br>
            <br/>
            <input type="submit" value="Enviar"/>
        </form>
        
        <?php
            if (isset( $_POST["sistema"])) {
                $sistema = $_POST["sistema"];
                echo "<br/>";
                echo $sistema == "Windows" ? "Meus pêsames..." : ($sistema == "Linux" ? "Pessoa esperta!" : "EU SOU RIIICAAAAAAAA!");
            }
        
            
        ?>
    </body>

</html>