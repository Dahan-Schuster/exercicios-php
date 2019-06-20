<h1 style="text-align: center; font-size: 18pt;">Login</h1>
<h3 style="text-align: center; color:red;">
    <?php
        if (isset($_GET['res'])){
            
            if ($_GET['res'] == "senhaInvalida")
                echo "Senha inválida";
            elseif ($_GET['res'] == "loginInvalido")
               echo "Login inválido";
        }
    ?>
</h3>
<form action="validarLogin.php" method="post">
<table class="tabela" align="center" width="200" cellspacing="0" cellpadding="3">
	<tr>
		<th class="esq"><label for="login">Login</label></th>
		<td class="dir top"><input type="text" name="login" id="login"></td>
	</tr>
	<tr>
        <th class="esq"><label for="senha">Senha</label></th>
        <td class="dir"><input type="text" name="senha" id="senha"></td>
	</tr>
</table>
    
<div class="botao">
    <input style="width: 80px;" type="submit" value="login">
</div>
    
</form>