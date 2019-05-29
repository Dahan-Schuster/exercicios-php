<?php session_start(); 
include("cabecalho.php");
include("functions.php");
?>

<div class="row">
	<h1 style='text-align: center;'>Resultados:</h1>
</div>
<div class="row">
    <div class="col">
            <form action="telaInicial.php" method="post">
            <div class="row">
                <div class="col-md-3">Mais velho(a):</div>
                <div class="col-md"><?php echo getOlder(); ?></div>
            </div>
            <div class="row">
                <div class="col-md-3">Mais cheinho(a):</div>
                <div class="col-md"><?php echo getHeavier(); ?></div>
            </div>
            <div class="row">
                <div class="col-md-3">Mais alto(a):</div>
                <div class="col-md"><?php echo getTaller(); ?></div>
            </div>
            <br>
            <div class="row">
                <div class="col"><input type="submit" value="Voltar à tela inicial"></div>
            </div>
        </form>
    </div>
</div> <!-- container -->
<hr>
</div>
</body>
</html>

