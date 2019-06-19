<!DOCTYPE html>
<html lang="PT-br">
<head>
    <title>Página inicial</title>
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
            "<h3 style='text-align: center;''>Você é um usuário " . $_SESSION['tipo_usuario'] . ". Estas são suas opções:" . 
            "</h3>";

    ?>

    <div class="center">
        <a class="link" href="listarProdutos.php">Listar produtos</a>
        <?php
            if ($_SESSION['tipo_usuario'] == 'Administrador' || $_SESSION['tipo_usuario'] == 'Colaborador') {
                echo "<a class='link' href='inserirProduto.php'>Inserir produtos</a>";
                echo "<a class='link' href='listarUsuarios.php'>Listar usuários</a>";
            }

            echo ($_SESSION['tipo_usuario'] == 'Administrador' ? "<a class='link' href='cadastrarUsuario.php'>Cadastrar usuários</a>" : "");
        ?>
    </div>
    <div class="center">
        <a id="sair" href='sair.php'>Sair</a>
    </div>
    
    <?php include('footer.php'); ?>
</div>
</body>
</html>