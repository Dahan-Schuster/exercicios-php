<!DOCTYPE html>
<html lang="PT-br">
<head>
    <title>Usuários</title>
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
    $usuarios = $conexao->query("SELECT * FROM usuarios");

?>
<br>
<div class="right">
    <a class='link' href='paginaInicial.php'>Voltar à página inicial</a>
</div>
<table align="center" class="tabela" cellpadding="3" cellspacing="0" border="1" style="border-color: #  c4440d;">
    <tr>
        <th>Login</th>
        <th>Senha</th>
        <th>Tipo</th>
    </tr>

<?php
    while ($usuario = $usuarios->fetch_array()) {
        echo "<tr>" .
                "<td>" . $usuario['login'] . "</td>" .
                "<td>" . $usuario['senha'] . "</td>" .
                "<td>" . $usuario['tipo'] . "</td>" .
            "</tr>";
    }

    if (isset($_SESSION['tipo_usuario'])) {
        if ($_SESSION['tipo_usuario'] == 'Administrador') {
?>
    <form action='cadastrarUsuario.php' method='POST'>
        <tr>
            <td> <input type='text' name='login'> </td>
            <td> <input type='text' name='senha'> </td>
            <td><select name="tipo">
                <option value="Administrador">Administrador</option>
                <option value="Colaborador">Colaborador</option>
                <option value="Visitante" selected>Visitante</option>
            </select></td>
        </tr>
            <tr><td colspan='3' align='right'><input style='width: 90px;' type='submit' value='Cadastrar'></td></tr></form>

<?php
        }
    } else {
        header('location:index.php');
    }
?>

</table>
<div class="right">
    <a class='link' href='paginaInicial.php'>Voltar à página inicial</a>
</div>
<br>
        



<?php include('footer.php');?>
</div>
</body>
</html>