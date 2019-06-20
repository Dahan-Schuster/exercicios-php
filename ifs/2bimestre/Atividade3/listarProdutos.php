<!DOCTYPE html>
<html lang="PT-br">
<head>
    <title>Produtos</title>
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
    include('database.php');
    session_start();

    $produtos = $conexao->query("SELECT * FROM produtos");
    
?>
<br>
<div class="right">
	<a class='link' href='paginaInicial.php'>Voltar à página inicial</a>
</div>
<table align="center" class="tabela" cellpadding="3" cellspacing="0" border="1" style="border-color: #	c4440d;">
	<tr>
		<th>Produto</th>
		<th>Preço unitário (R$)</th>
		<th>Preço atacado (R$)</th>
		<th>Quantidade Mínima</th>
		<th>Em estoque</th>
	</tr>

<?php
	while ($produto = $produtos->fetch_array()) {
        echo "<tr>" .
        		"<td>" . $produto['descricao'] . "</td>" .
        		"<td>" . $produto['preco_unitario'] . "</td>" .
        		"<td>" . $produto['preco_atacado'] . "</td>" .
        		"<td>" . $produto['quantidade_minima'] . "</td>" .
        		"<td>" . $produto['quantidade_estoque'] . "</td>" .
        	"</tr>";
    }

    if (isset($_SESSION['tipo_usuario'])) {
		if ($_SESSION['tipo_usuario'] == 'Administrador' || $_SESSION['tipo_usuario'] == 'Colaborador'){
			echo "<form action='inserirProduto.php' method='POST'><tr>" .
	        		"<td> <input type='text' name='descricao'> </td>" .
	        		"<td> <input style='width: 50px;' type='number' step='0.01' name='preco_unitario'> </td>" .
	        		"<td> <input style='width: 50px;' type='number' step='0.01' name='preco_atacado'> </td>" .
	        		"<td> <input style='width: 50px;' type='number' name='quantidade_minima'> </td>" .
	        		"<td> <input style='width: 50px;' type='number' name='quantidade_estoque'> </td>" .
	        	"</tr>
	        		<tr><td colspan='5' align='right'><input style='width: 90px;' type='submit' value='Inserir'></td></tr></form>";
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