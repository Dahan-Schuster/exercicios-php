<?php include 'header.php' ?>

<?php
$url = "&";
foreach ($_POST as $key => $value) {
    $_POST[$key] = ($value == "" ? "Não informado" : $value);
    $url .= $key . '=' . $_POST[$key] . "&";
}
?>
<hr>
<h1>Confirma sua inscrição?</h1>
<table class="formulario" cellpadding="5px" align="center">
    <tr>
        <th>
            Nome:
        </th>
        <td>
            <?php echo $_POST['nome'] ?>
        </td>
    </tr>
    <tr>
        <th>
            Email:
        </th>
        <td>
            <?php echo $_POST['email'] ?>
        </td>
    </tr>
    <tr>
        <th>
            Sexo:
        </th>
        <td>
            <?php switch ($_POST['sexo']) {
                case 'M':
                    echo 'Masculino';
                    break;

                case 'F':
                    echo 'Feminino';
                    break;
                default:
                    echo 'Outro';
                    break;
            } ?>
        </td>
    </tr>
    <tr>
        <th>
            Curso:
        </th>
        <td>
            <?php echo $_POST['curso'] ?>
        </td>
    </tr>
    <tr>
        <th>
            Endereço para correspondência:
        </th>
        <td>
            <?php echo $_POST['endereco'] ?>
        </td>
    </tr>
    <tr>
        <th>
            CEP:
        </th>
        <td>
            <?php echo $_POST['cep'] ?>
        </td>
    </tr>
    <tr>
        <th>
            Municipio:
        </th>
        <td>
            <?php echo $_POST['municipio'] . ' - ' . $_POST['estado'] ?>
        </td>
    </tr>
    <tr>
        <td style="text-align: right; padding-top: 20px;">
            <form action="dados-corretos.php" method="post">
                <?php
                    $nome = $_POST['nome'];
                    $email = $_POST['email'];
                    $sexo = $_POST['sexo'];
                    echo "<input type='text' value='$nome' name='nome' style='display: none;'>";
                    echo "<input type='text' value='$email' name='email' style='display: none;'>";
                    echo "<input type='text' value='$sexo' name='sexo' style='display: none;'>";
                ?>
                <input type="submit" value="Sim">
            </form>
        </td>
        <td style="text-align: left; padding-top: 20px;">
            <form action="dados-incorretos.php" method="post">
                <?php
                $nome = $_POST['nome'];
                $sexo = $_POST['sexo'];
                echo "<input type='text' value='$nome' name='nome' style='display: none;'>";;
                echo "<input type='text' value='$sexo' name='sexo' style='display: none;'>";
                ?>
                <input type="submit" value="Não">
            </form>
        </td>
    </tr>
</table>
<br>
<hr>
<?php include 'footer.php' ?>
</body>
</html>