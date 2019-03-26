<?php include 'header.php' ?>
<hr>
<?php
    $saudacao = ($_POST['sexo'] == 'F' ? 'Prezada' : 'Prezado');
    $nome = $_POST['nome'];
    $email = $_POST['email'];

    echo "<h2>Inscrição concluída</h2>";
    echo "<p>$saudacao $nome, sua incrição foi realizada com sucesso. Aguarde a confirmação que será enviada para o email <u>$email</u>.</p>";
?>
<hr>
<?php include 'footer.php'?>
</body>
</html>
