<!doctype html>
<html>
<head>
	<meta charset="utf-8"/>
	<title>Calorias</title>
	<style>
		body {
			position: block;
			float: top;
			width: 600px;
			margin: auto;
			align: center;	
		}
		h2 {
			font-size: 16pt;
			margin-bottom: 5px;
			margin-top: -20px;
		}
		h1 {
			text-align: center;
			margin-bottom: 0px;
		}
		div#prato {
			position: inline-block;
			float: left;
			border-right: 1px solid black;
			padding-right: 15px;
			margin-right: 5px;
			margin-left: 100px;
		}
		div#sobremesa {
			position: inline-block;
			float: left;
			border-right: 1px solid black;
			padding-right: 15px;
			margin-right: 5px;
		}
		div#bebida {
			position: inline-block;
			float: left;
		}
		div#botoes {
			margin-top: 130px;
			margin-left: 250px;
		}

	</style>
	</head>

	<body id="input">
	<form action="" method="post">
		<h1>Escolha os números de sua preferência:</h1><br/><br/>
		<div id="checkboxes">
			<div id="prato">
			<h2>Prato</h2>
				<input type="CheckBox" name="pratos[]" id="veggie" value="180">
				<label for="veggie">Vegano</label><br/>
				<input type="CheckBox" name="pratos[]" id="peixe" value="230">
				<label for="peixe">Peixe</label><br/>
				<input type="CheckBox" name="pratos[]" id="frango" value="250">
				<label for="frango">Frango</label><br/>
				<input type="CheckBox" name="pratos[]" id="boi" value="450">
				<label for="boi">Carne vermelha</label><br/>
			</div>
			<div id="sobremesa">
			<h2>Sobremesa</h2>
				<input type="CheckBox" name="sobremesas[]" id="Abacaxi" value="75">
				<label for="Abacaxi">Abacaxi</label><br/>
				<input type="CheckBox" name="sobremesas[]" id="Sorvete_diet" value="110">
				<label for="Sorvete_diet">Sorvete diet</label><br/>
				<input type="CheckBox" name="sobremesas[]" id="Mousse_diet" value="170">
				<label for="Mousse_diet">Mousse diet</label><br/>
				<input type="CheckBox" name="sobremesas[]" id="Mousse_chocolate" value="200">
				<label for="Mousse_chocolate">Mousse chocolate</label><br/>
			</div>
			<div id="bebida">
			<h2>Bebida</h2>
				<input type="CheckBox" name="bebidas[]" id="cha" value="20">
				<label for="cha">Chá</label><br/>
				<input type="CheckBox" name="bebidas[]" id="suco_laranja" value="70">
				<label for="suco_laranja">Suco de laranja</label><br/>
				<input type="CheckBox" name="bebidas[]" id="suco_melao" value="100">
				<label for="suco_melao">Suco de melão</label><br/>
				<input type="CheckBox" name="bebidas[]" id="refri" value="65">
				<label for="refri">Refrigerante diet</label><br/>
			</div>
		</div>
		<div id="botoes">
			<input type="submit"/>
			<input type="reset"/>
		</div>
		</form>
	</body>

	<body id="output">
		<?php
			if (sizeof($_POST) > 0) {
				echo "<h1>Aqui está a quantidade de calorias do seu almoço:</h1><br/><br/>";
				
				if (isset($_POST["pratos"])):
					$totalDeCaloriasDosPratos = 0;
					foreach ($_POST["pratos"] as $valor) {
						$totalDeCaloriasDosPratos += $valor;
					}

					echo '<h2 style="position:inline-block;float:left;padding-right:20px;margin-left:60px;">Pratos: ' . "$totalDeCaloriasDosPratos cal  </h2> ";
				endif;

				if (isset($_POST["sobremesas"])):
					$totalDeCaloriasDasSobremesas = 0;
					foreach ($_POST["sobremesas"] as $valor) {
						$totalDeCaloriasDasSobremesas += $valor;
					}

					echo '<h2 style="position:inline-block;float:left;padding-right:20px;">Sobremesas: ' . "$totalDeCaloriasDasSobremesas cal  </h2> ";
				endif;

				if (isset($_POST["bebidas"])):
					$totalDeCaloriasDasBebidas = 0;
					foreach ($_POST["bebidas"] as $valor) {
						$totalDeCaloriasDasBebidas += $valor;
					}

					echo '<h2 style="position:inline-block;float:left;padding-right:20px;">Bebidas: ' . "$totalDeCaloriasDasBebidas cal </h2> ";
				endif;
			}
		?>
	</body>
</html>