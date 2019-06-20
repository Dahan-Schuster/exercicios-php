<?php include 'header.php'; ?>
<hr>
<?php
    $saudacao = ($_POST['sexo'] == 'F' ? 'Prezada' : 'Prezado');
    $nome = $_POST['nome'];

    echo "<h1>Inscrição cancelada.</h1>";
    echo "<p>$saudacao $nome, sua inscrição foi cancelada.</p>";
?>

<br>
<form action="index.php" method="post">
    <input type="submit" value="Voltar à tela de inscrição.">
</form>

<hr>
<?php include "footer.php"; ?>
</body>
</html>
