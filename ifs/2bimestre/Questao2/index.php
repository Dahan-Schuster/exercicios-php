<?php include('capitais.php'); ?>
<!DOCTYPE html>
<html lang="PT-br">
<head>
    <title>Capitais</title>
    <meta charset="utf-8"/>
    <meta name="author" content="Danielly Silva">
    <meta name="author" content="Dahan Schuster">
    <link rel="stylesheet" type="text/css" href="css/estilos.css">
    <link href="https://fonts.googleapis.com/css?family=Inconsolata" rel="stylesheet">
    <script type="text/javascript">
    	
    	function mostrarCapital()
    	{
			resetarElementos();

    		var capital = document.getElementById("capitalEscolhida").selectedIndex;
    		var linhaTabela = document.getElementById(capital);
			linhaTabela.style.background = "#32b446";
			document.getElementById("pagina").innerHTML = '<img id="capitalFoto" src="img/' + capital + '.png"></img>';
    		return false;
    	}	

		function calcularMedia()
		{
			resetarElementos();
    		document.getElementById("pagina").innerHTML = '<h2 style="text-align: center;">Média das populações da tabela:</h2><h3>' +
    														'<?php
    															echo number_format(media($capitais), 2);
    														?> Milhões de habitantes </h3>';
    		return false;
		}

		function ordenarPopulacao()
		{
			resetarElementos();
    		document.getElementById("pagina").innerHTML = '<h2 style="text-align: center;">Tabela ordenada por população em ordem decrescente:</h2>' +
    														'<?php
    															echo ordenarPopulacao($capitais);
    														?>';
    		return false;

		}

		function ordenarCapital()
		{
			resetarElementos();
			document.getElementById("pagina").innerHTML = '<h2 style="text-align: center;">Tabela ordenada por capital em ordem alfabética:</h2>' +
    														'<?php
    															echo ordenarCapital($capitais);
    														?>';
    		return false;
		}

		function infoMaisPopulosa()
		{

			resetarElementos()
			document.getElementById("pagina").innerHTML = '<h2 style="text-align: center;">Capital mais populosa:</h2>' +
    														'<?php
    															echo infoMaisPopulosa($capitais);
    														?>';
			return false;

		}

		function resetarElementos()
		{
			var aside = document.getElementById("info");
    		aside.style.display = "block";
    		document.getElementById("pagina").innerHTML = "";
    		limparLinhas();
		}

    	function limparLinhas()
		{
			var linhas = document.getElementsByClassName('linha');
			
			for(var i = 0, max = linhas.length; i < max; i++) 
			{
				linhas[i].style.background = "none";
			}
			
		}

    </script>
</head>
<body>
	<div id="interface">
		<?php 
		include('header.php');
		?>
		
		<section id="corpo">
			<h1 style="text-align: center; font-size: 18pt;">Aprenda um pouco sobre as capitais do Brasil!</h1>

			<div>
				<table class="capitais" align="center" width="600" cellpadding="2" cellspacing="0">
					<tr>
						<th>Capital</th>
						<th>População</th>
					</tr>
					<?php
						$i = 0;
						foreach ($capitais as $capital => $populacao) {
							echo "<tr id='$i' class='linha'>
									<td class='capital'><b>$capital</b></td>
									<td class='populacao'> " . number_format($populacao) . "</td>
								</tr>";
							$i++;
						}
					?>
				</table>
			</div>
			<br><br>
			<div id="interatividade">
				<table class="botoes" align="center" width="600" cellpadding="2" cellspacing="0">
					<tr>
						<th>Botão</th>
						<th>Ação</th>
					</tr>
					<tr>
						<td class="texto">Mostrar na página a capital selecionada</td>
						<form name="verPopulacao" onsubmit="return mostrarCapital();">
							<td class="botao">
								<select id="capitalEscolhida" name="capitalEscolhida">
									<?php
										foreach ($capitais as $capital => $populacao) {
											echo "<option value='$capital'>$capital</option>";
										}
									?>
								</select>
								<input type="submit" value="Mostrar!">
							</td>
						</form>
					</tr>
					<tr>
						<td class="texto">Calcular média populacional de todas as capitais</td>
						<td class="botao">
							<form onsubmit="return calcularMedia();">
								<input type="submit" value="Calcular!">
							</form>
						</td>
					</tr>
					<tr>
						<td class="texto">Ordenar lista por número de habitantes</td>
						<td class="botao">
							<form onsubmit="return ordenarPopulacao();">
								<input type="submit" value="Ordenar!">
							</form>
						</td>
					</tr>
					<tr>
						<td class="texto">Ordenar lista por ordem alfabética</td>
						<td class="botao">
							<form  onsubmit="return ordenarCapital();">
								<input type="submit" value="Ordenar!">
							</form>
						</td>
					</tr>
					<tr>
						<td class="texto">Informações sobre a capital mais populosa</td>
						<td class="botao">
							<form name="mediaPopulacao" onsubmit="return infoMaisPopulosa();">
								<input type="submit" value="Quero saber!">
							</form>
						</td>
					</tr>
				</table>
			</div>
			<br><br>
		</section>
		<aside id="info" style="display: none;">
			<div id="pagina">
			</div>
		</aside>

		<?php include('footer.php') ?>
	</div>
</body>
</html>
