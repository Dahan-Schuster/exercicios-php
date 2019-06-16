<!DOCTYPE html>
<html lang="PT-br">
<head>
    <title>Inserir produto</title>
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

    if (isset($_SESSION['tipo_usuario'])) {
    	if ($_SESSION['tipo_usuario'] == 'Visitante')
    		header('location:paginaInicial.php');
    } else
    	header('location:index.php');

    include('database.php');

    if (sizeof($_POST)  > 0) {
        if ($_POST['login'] == "" || $_POST['senha'] == "") {
            header('location:listarUsuarios.php');
        } else {
            $login = $_POST['login'];
            $senha = $_POST['senha'];
            $tipo  = $_POST['tipo'];
        }
        
        $comando_inserir_usuario = $conexao->prepare("INSERT INTO usuarios(login, senha, tipo) values(?, ?, ?)");

        $comando_inserir_usuario->bind_param("sss", $login, $senha, $tipo);

        $comando_inserir_usuario->execute();

        header('location:listarUsuarios.php');
    } else { ?>
        <br>
        <div class="right">
            <a class='link' href='paginaInicial.php'>Voltar à página inicial</a>
        </div>
        <table align="center" class="tabela" cellpadding="3" cellspacing="0" border="1" style="border-color: #c4440d;">
            <tr>
                <th>Login</th>
                <th>Senha</th>
                <th>Tipo</th>
            </tr>
            <form action='cadastrarUsuario.php' method='POST'>
                <tr>
                    <td> <input type='text' name='login'> </td>
                    <td> <input type='text' name='senha'> </td>
                    <td>
                        <select name="tipo">
                            <option value="Administrador">Administrador</option>
                            <option value="Colaborador">Colaborador</option>
                            <option value="Visitante" selected>Visitante</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td colspan='3' align='right'><input style='width: 90px;' type='submit' value='Cadastrar'></td>
                </tr>
            </form>
        </table>
        <div class="right">
            <a class='link' href='paginaInicial.php'>Voltar à página inicial</a>
        </div>
        <br>
    <?php }


?>
<?php include('footer.php');?>
</div>
</body>
</html>