<!DOCTYPE html>
<html lang="PT-br">
<head>
    <title>Fibonacci</title>
    <meta charset="utf-8"/>
    <meta name="author" content="Danielly Silva">
    <meta name="author" content="Dahan Schuster">
    <link rel="stylesheet" type="text/css" href="css/estilos.css">
    <link href="https://fonts.googleapis.com/css?family=Inconsolata" rel="stylesheet">
</head>
<body>
<div id="interface">
<?php include('header.php') ?>

<h1 style="text-align: center; font-size: 18pt;">Calcular série de Fibonacci</h1>

<table class="tabela" align="center" width="300" cellspacing="0" cellpadding="3">
	<tr>
		<th>Limite</th>
		<th>Calcular</th>
	</tr>
	<tr>
		<form action="" method="post">
			<td class="esq"><input type="number" step="1" name="limite"></td>
			<td class="dir"><input type="submit" value="Mostre-me!"></td>
		</form>
	</tr>

	<?php
		if (isset($_POST['limite'])):

			if ($_POST['limite'] > 1) 
			{

				$n = $_POST['limite'];
				$sequencia[] = fib($n);

				echo "<tr><td>Sequencia:</td>";
				$htmlString = "<td>";

					for ($i=0; $i < sizeof($sequencia); $i++) { 
						$htmlString .= $sequencia[$i] . " - ";
					}

				echo $htmlString . "</td></tr>";

				
			}
		endif;

		function fib($n)
		{
			if ($n == 1 || $n == 2) {
				return 1;
			} else {
				return $sequencia[] = fib($n - 1) + fib($n - 2);

			}

		}
	?>
</table>

<?php include('footer.php') ?>
</div>
</body>
</html>