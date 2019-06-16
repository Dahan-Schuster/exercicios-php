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
    	$descricao = ($_POST['descricao'] == "" ? "Não informado." : $_POST['descricao']);
    	$preco_unitario = ($_POST['preco_unitario'] == "" ? 0.0 : $_POST['preco_unitario']);
    	$preco_atacado  = ($_POST['preco_atacado'] == "" ? 0.0 : $_POST['preco_atacado']);
    	$quantidade_minima = ($_POST['quantidade_minima'] == "" ? 0 : $_POST['quantidade_minima']);
    	$quantidade_estoque = ($_POST['quantidade_estoque'] == "" ? 0 : $_POST['quantidade_estoque']);
		
		$comando_inserir_produto = $conexao->prepare("INSERT INTO produtos(descricao, preco_atacado, preco_unitario, quantidade_minima, quantidade_estoque) values(?, ?, ?, ?, ?)");

		$comando_inserir_produto->bind_param("sddii", $descricao, $preco_unitario, $preco_atacado, $quantidade_minima, $quantidade_estoque);

		$comando_inserir_produto->execute();

		header('location:listarProdutos.php');

    } else { ?>
    	<br>
        <div class="right">
            <a class='link' href='paginaInicial.php'>Voltar à página inicial</a>
        </div>
    	<table align='center' class='tabela' cellpadding='3' cellspacing='0' border='1' style='border-color: #c4440d;'>
			<tr>
				<th>Produto</th>
				<th>Preço unitário (R$)</th>
				<th>Preço atacado (R$)</th>
				<th>Quantidade Mínima</th>
				<th>Em estoque</th>
			</tr>
			<form action='inserirProduto.php' method='POST'>
				<tr>
	        		<td> <input type='text' name='descricao'> </td>
	        		<td> <input style='width: 50px;' type='number' step='0.01' name='preco_unitario'> </td>
	        		<td> <input style='width: 50px;' type='number' step='0.01' name='preco_atacado'> </td>
	        		<td> <input style='width: 50px;' type='number' name='quantidade_minima'> </td>
	        		<td> <input style='width: 50px;' type='number' name='quantidade_estoque'> </td>
	        	</tr>
        		<tr>
        			<td colspan='5' align='right'><input style='width: 90px;' type='submit' value='Inserir'></td>
        		</tr>
        	</form>
	    </table>
	    <br>
        <div class="right">
            <a class='link' href='paginaInicial.php'>Voltar à página inicial</a>
        </div>
   <?php }
    
?>
<?php include('footer.php');?>
</div>
</body>
</html>