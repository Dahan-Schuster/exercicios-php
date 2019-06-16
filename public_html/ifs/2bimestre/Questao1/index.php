
<?php include_once ('header.php');
require_once ('Model/Pedido.php');?>
<body>
	<h1 style="text-align: center;"">Faça seu pedido!</h1>
	<hr>
		<table align="center" width="700" cellspacing="5">
			<tr>
				<th><h2>CARDÁPIO NOSSO DE CADA DIA</h2></th>
			</tr>
			<tr>
				<td>
					<table class="pratos_e_precos" align="center" width="600" cellpadding="2" cellspacing="0">
						<tr>
							<th>Dia da Semana</th>
							<th>Prato do dia</th>
							<th>Preço (R$) por refeição</th>
						</tr>
						<?php
						foreach (Prato::$pratos as $dia => $prato) {
							echo "<tr class='prato' id='$dia' " .
									($dia == 'segunda' ? "style='background: #32b446;'>" : ">") .
									"<td class='dia'><b>$dia</b></td>" .
									"<td>" . $prato['prato'] . "</td>" .
									"<td class='preco'> " . number_format($prato['preco'], 2) . "</td>
								</tr>";
						}
						?>
					</table>
				<td>
			</tr>
			<tr>
				<th><h2>SEU PEDIDO</h2></th>
			</tr>
			<tr>
				<td>
					<table class="pedido" width="700" align="center" cellpadding="3" cellspacing="5">
						<form name="formA" action="" method="post">
							<tr>
								<th>Dia:</th>
								<td class="radio"><input type="radio" name="dia" value="segunda" checked>Segunda</td>
								<td class="radio"><input type="radio" name="dia" value="terça">Terça</td>
								<td class="radio"><input type="radio" name="dia" value="quarta">Quarta</td>
								<td class="radio"><input type="radio" name="dia" value="quinta">Quinta</td>
								<td class="radio"><input type="radio" name="dia" value="sexta">Sexta</td>
								<td class="radio"><input type="radio" name="dia" value="sábado">Sábado</td>
								<td class="radio"><input type="radio" name="dia" value="domingo"> Domingo</td>
							</tr>
							<tr>
								<th>Quantidade:</th>
								<td>
									<select name="quantidade">
										<option value="1">1</option>
										<option value="2">2</option>
										<option value="3">3</option>
										<option value="4">4</option>
										<option value="5">5</option>
									</select>
								</td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
								<td><input type="submit" value="Enviar pedido"></td>
							</tr>
						</form>
					</table>
				</td>
			</tr>
		</table>

	<?php

		if (isset($_POST['dia'])):

			$dia = $_POST['dia'];
			$quantidade = $_POST['quantidade'];
			$pratos = array();

			for ($i=0; $i < $quantidade; $i++) { 
				$pratos[] = new Prato($dia);
			}

			$pedido = new Pedido($pratos);
			$precoTotal = $pedido->calcularPreco();
			

			$mensagem = "Pedido realizado!\\n" .
			"\\t\\t• Dia escolhido: $dia\\n" .
			"\\t\\t• Prato do dia: " . $pratos[0]->getNome() . "\\n" .
			"\\t\\t• Preço do prato: R\\$ " . $pratos[0]->getPreco() . "\\n" .
			"\\t\\t• Quantidade selecionada: $quantidade\\n" .
			"\\t\\t• Preço total: R\\$ $precoTotal";

			
			echo "<script>
				alert('$mensagem');
			</script>";
			
			echo "<hr>
              <table class='resultado' width='650' align='center' style='font-size: 16pt;' cellspacing=0 border=1 >
                <tr>
                    <th><h3>Pedido realizado!</h3></th>
                <tr>
					<td><b>Dia escolhido:</b> $dia</td>
                </tr>
                <tr>
                    <td><b>Prato do dia:</b> " . $pratos[0]->getNome() . "</td>
                </tr>
                <tr>
                	<td><b>Preço do prato:</b>  R&dollar; " . $pratos[0]->getPreco() . "</td>
                </tr>
                <tr>
					<td><b>Quantidade selecionada:</b> $quantidade</td>
                </tr>
                <tr>
                    <td><b>Preço total:</b> R&dollar; $precoTotal</td>
                </tr>
              </table>
              <br>	";

		endif;
	?>
	<script>
		
		var radios = document.forms["formA"].elements["dia"];
		for(var i = 0, max = radios.length; i < max; i++) 
		{
		    radios[i].onclick = function alterarCorLinha()
			{
					var dia = this.value;
					var linhaTabela = document.getElementById(dia);
					limparLinhas();
					linhaTabela.style.background = "#32b446";
			}
		}
		function limparLinhas()
		{
			var linhas = document.getElementsByClassName('prato');
			
			for(var i = 0, max = linhas.length; i < max; i++) 
			{
				linhas[i].style.background = "none";
			}
			
		}
		
		
	</script>

</body>
<?php include ('footer.php') ?>