<?php include 'header.php'?>
<hr>
<h1>Informe seu nome e seu curso:</h1>
<form action="mostrar-resultado.php" method="post">
    <table class="formulario" cellpadding="5px" align="center">
        <tr>
            <th><label for="nome">Nome:</label></th>
            <td><input type="text" name="nome" id="nome"></td>
        </tr>
        <tr>
            <th></th>
            <td><input type="radio" name="curso" value="INF" checked>Curso Técnico em Informática</td>
        </tr>
        <tr>
            <th></th>
            <td><input type="radio" name="curso" value="ALM">Curso Técnico em Alimentos</td>
        </tr>
        <tr>
            <th></th>
            <td><input type="radio" name="curso" value="AGR">Curso Técnico em Agropecuária</td>
        </tr>
        <tr>
            <td style="text-align: right; padding-top: 20px;">
                <input type="submit" value="Consultar"/>
            </td>
            <td style="text-align: left; padding-top: 20px;">
                <input type="reset" value="Limpar"/>
            </td>
        </tr>
    </table>
</form>
<hr>
<?php include 'footer.php'?>
</body>
</html>

