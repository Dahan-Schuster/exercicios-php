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
    if (isset($_SESSION['usuario']))
        echo "<h1 style='text-align: center; font-size: 18pt;'>Usuário logado: " . 
        $_SESSION['usuario'] . "</h1>" .
        "<div class='center'><a class='link' href='paginaInicial.php'>Voltar à página inicial</a><a id='sair' href='sair.php'>Sair</a></div>";
    else {
        include('formLogin.php');
    }
?>
    <h3 style="text-align: center;">É necessário criar um banco de dados chamado "Produtos" em seu MySQL. O programa se encarrega das tabelas.</h3>
    <h4 style="text-align: center;">Login inicial: admin <br> 
        Senha: 1234 </h4>

<?php include('footer.php');?>
</div>
</body>
</html>