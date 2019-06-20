<!DOCTYPE html>
<html lang="PT-br">
<head>
    <title>Login</title>
    <meta charset="utf-8"/>
    <meta name="author" content="Danielly Silva">
    <meta name="author" content="Dahan Schuster">
    <link rel="stylesheet" type="text/css" href="css/estilos.css">
    <link href="https://fonts.googleapis.com/css?family=Inconsolata" rel="stylesheet">
</head>
<body>
<div id="interface">
<?php
    include('header.php');
    session_start();
    
    echo "<h1 style='text-align: center; font-size: 18pt;'>Seja bem vindo, " . 
        $_SESSION['usuario'] . "</h1>" .
        "<br> <div style='display: flex; justify-content:center; margin-bottom: 15px;'><a href='sair.php'>Sair</a></div>";

    include('footer.php');
?>
</div>
</body>
</html>