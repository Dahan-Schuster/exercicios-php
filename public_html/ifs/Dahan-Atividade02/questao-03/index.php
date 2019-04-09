<?php include 'header.php'; ?>
<hr>
<h1 style="text-align: center; margin-bottom: 0px;">Conversor de Moedas para Real (R&dollar;)</h1>
<form action="" method="get">
<table class="formulario" width="300px" cellpadding="5px" align="center">
    <tr>
        <th>Moeda:</th>
        <td>
            <select name="moeda-origem">
                <option value="USD">&dollar; (Dólar)</option>
                <option value="EUR">&euro; (Euro)</option>
                <option value="GBP">&pound; (Libra)</option>
                <option value="ARS">&#8369; (Peso)</option>
                <option value="JPY">&yen; (Iene)</option>
            </select>
        </td>
    </tr>
    <tr></tr>
    <tr>
        <th>Valor:</th>
        <td><input type="number" step="0.01" name="valor" ></td>
    </tr>
</table>
<div class="botao">
    <input id="converter" type="submit" value="Converter"/>
</div>
</form>

<?php include 'Conversor.php';
    if (isset($_GET['valor'])) {

        $moedaOrigem = $_GET['moeda-origem'];
        $valor = $_GET['valor'];

        $conversor = new Conversor();
        $conversor->setMoedaOrigem($moedaOrigem);

        $valorCambiado = $conversor->converter($valor);

        $sinalMoeda = $conversor->definirSinalMoeda();


        echo "<hr>
              <table class='resultado' width='650' align='center' style='font-size: 16pt;'>
                <tr>
                    <th>Resultado da conversão:</th>
                    <td>$sinalMoeda " . number_format(floatval($valor), 2, ',', '.') . "</td>
                    <td>=</td>
                    <td>R&dollar; " . number_format($valorCambiado,2, ',', '.') . "</td>
                </tr>
              </table>";
    }
?>

<hr>
<?php include 'footer.php'; ?>
</body>
</html>