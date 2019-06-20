<!doctype html>
<html>
<head>
	<!-- TODO head block -->
	<meta charset="utf-8"/>
	<title>CheckBox</title>
	<style>
		body {
			width: 500px;
			margin: auto;
		}
		div#coluna1 {
			position: absolute;
			left: 40%;
			margin-right: 30px;
		}
		div#coluna2 {
			position: absolute;
			left: 45%;
			margin-left: 30px;
		}
		div#newsletter {
			position: absolute;
			left: 40%;
			top: 11%;
		}
		input#enviar, input#reset {
			position: absolute;
			top: 14%;
		}
		input#reset {
			position: absolute;
			left: 44%;
			margin-left: 30px;
		}
		input#enviar {
			position: absolute;
			left: 40%;
			margin-right: 30px;
		}

	</style>
	</head>

	<body>
	<form action="" method="post">
		<b>Escolha os números de sua preferência:</b><br/>
		<div id="coluna1">
			<input type="checkbox" name="numeros[]" id="cb1" value="10"/>
			<label for="cb1">10</label><br/>
			<input type="checkbox" name="numeros[]" id="cb2" value="100"/>
			<label for="cb2">100</label><br/>
			<input type="checkbox" name="numeros[]" id="cb3" value="1000"/>
			<label for="cb3">1000</label><br/>
			<input type="checkbox" name="numeros[]" id="cb4" value="10000"/>
			<label for="cb4">10000</label><br/>
		</div>
		<div id="coluna2">
			<input type="checkbox" name="numeros[]" id="cb5" value="90"/>
			<label for="cb5">90</label><br/>
			<input type="checkbox" name="numeros[]" id="cb6" value="50"/>
			<label for="cb6">50</label><br/>
			<input type="checkbox" name="numeros[]" id="cb7" value="30"/>
			<label for="cb7">30</label><br/>
			<input type="checkbox" name="numeros[]" id="cb8" value="15"/>
			<label for="cb8">15</label><br/>
		</div>
		<div id="newsletter"/>
			<input type="checkbox" name="news" id="cbNews" value="1"/>
			<label for="cbNews">Receber Newsletter?</label><br/><br/>
		</div>
		
		<input type="submit" id="enviar"/>
		<input type="reset" id="reset"/>
		</form>
	</body>
	
	<?php
		if(sizeof($_POST) > 0){
			if (isset($_POST["numeros"])):
				echo "<br/>Os números de sua preferência são:";

				foreach ($_POST["numeros"] as $numero)
					echo "<br/>--> $numero";
	
			else:
				echo "Você não escolheu nenhum número.";
			endif;

			echo "<br/><br/>";
			$desejaReceberNewsletter = (isset($_POST["news"])) ? "" : "não";
			echo "Você $desejaReceberNewsletter deseja receber as novidades por email.";
		}
	
	?>
</html>