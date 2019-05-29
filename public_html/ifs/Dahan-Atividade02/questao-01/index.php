<?php include 'header.php' ?>
<hr>
<h1>Preencha sua incrição:</h1>
<form action="confirmar-dados.php" method="post">
    <table class="formulario" cellpadding="5px" align="center">
        <tr>
            <th><label for="nome">Nome:</label></th>
            <td><input type="text" name="nome" id="nome"></td>
        </tr>
        <tr>
            <th><label for="email">Endereço de email:</label></th>
            <td><input type="text" name="email" id="email"></td>
        </tr>
        <tr>
            <th><label for="sexo">Sexo:</label></th>
            <td>
                <select name="sexo" id="sexo">
                    <option value="F">Feminino</option>
                    <option value="M">Masculino</option>
                    <option value="O">Outro</option>
                </select>
            </td>
        </tr>
        <tr>
            <th><label for="curso">Curso:</label></th>
            <td>
                <select name ="curso" id="curso">
                    <option value="INF">Curos Técnico em Informática</option>
                    <option value="ALM">Curos Técnico em Alimentos</option>
                    <option value="AGR">Curos Técnico em Agropecuária</option>
                </select>
            </td>
        </tr>
        <tr>
            <th><label for="endereco">Endereço para correspondência:</label></th>
            <td><input type="text" name="endereco" id="endereco"></td>
        </tr>
        <tr>
            <th><label for="cep">CEP:</label></th>
            <td><input type="text" name="cep" id="cep"></td>
        </tr>
        <tr>
            <th><label for="municipio" >Município:</label></th>
            <td>
                <input type="text" name="municipio" id="municipio">
                <select name="estado" id="estado">
                    <option value="SE">SE</option>
                    <option value="outro">outro</option>
                </select>
            </td>
        </tr>
        <tr>
            <td style="text-align: right; padding-top: 20px;">
                <input type="submit" value="Enviar"/>
            </td>
            <td style="text-align: left; padding-top: 20px;">
                <input type="reset" value="Limpar dados"/>
            </td>
        </tr>
    </table>
</form>
<hr>
<?php include 'footer.php'?>
</body>
</html>

