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
        <td class="dir"><input style="width: 110px;" type="password" name="senha" id="senha">
            <button class="view-password" onclick="verSenha();" type="button"><img id="vp-icon" src="imagens/view-password.png" width="20px"/></button></td>
	</tr>
</table>
    
<div class="botao center">
    <input style="width: 80px;" type="submit" value="login">
</div>
    
</form>

<script type="text/javascript">
    var input = document.getElementById("senha");
    var vpIcon = document.getElementById("vp-icon");
    function verSenha() {
        if (input.type == "text"){
            input.type = "password";
            vpIcon.src = "imagens/view-password.png";
        } else {
            input.type = "text";
            vpIcon.src = "imagens/hide-password.png";
        }
    }
</script>