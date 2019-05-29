<!DOCTYPE html>
<?php include("cabecalho.php"); ?>
<div class="row">
    <div class="col-md">
        <?php
        $form = ($_GET["form"]);
        echo "<h1 style='text-align: center;'>Preencha suas informações:<br>Formulário: $form </h1>";
        ?>
        </div>
</div>
<div class="row">
    <div class="col"></div>
    <div class="col">
            <form action="addDados.php" method="post">
            <div class="row">
                <div class="col-md-6"><label for="nome">Nome:</label></div>
                <div class="col-md"><input type="text" name="nome" id="nome"></div>
            </div>
            <div class="row">
                <div class="col-md-6"><label for="idade">Idade:</label></div>
                <div class="col-md"><input type="number" name="idade" id="idade"></div>
            </div>
            <div class="row">
                <div class="col-md-6"><label for="peso">Peso (Kg):</label></div>
                <div class="col-md"><input type="number" step="0.01" name="peso" id="peso"></div>
            </div>
            <div class="row">
                <div class="col-md-6"><label for="altura">Altura (m):</label></div>
                <div class="col-md"><input type="number" step="0.01" name="altura" id="altura"></div>
            </div>
            <br>
            <div class="row">
                <div class="col"><input type="submit" value="Próximo"></div>
            </div>
        </form>
    </div>
    <div class="col"></div>
</div> <!-- container -->
<hr>
</div>
</body>
</html>