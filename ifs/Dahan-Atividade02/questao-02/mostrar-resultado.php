<?php include 'header.php'?>
<hr>
<h1>Sua sala será...</h1>
<?php

    $nome = $_POST['nome'];
    $curso = $_POST['curso'];
    $nomeValido = validarNome($nome);

    if ($nomeValido) {

        if ($curso == "INF") {
            $sala = '22';
            $cursoPorExtenso = "curso Técnico em Informática";
        } elseif ($curso == "ALM") {
            $sala = '21';
            $cursoPorExtenso = "curso Técnico em Alimentos";
        } elseif ($curso == "AGR") {
            $sala = consultarSalaAgropecuaria($nome);
            $cursoPorExtenso = "curso Técnico em Agropecuária";
        }

        echo "<p align='center'>Prezado(a) $nome, sua prova do <b>$cursoPorExtenso</b> será realizada na sala:<br><b>$sala</b>.<br><u>Bom desempenho!</u></p>";

    } else {
        echo "<p align='center'>Você informou um nome inválido, ou não informou nenhum nome. Tente novamente, mas dessa vez informe seu <u>nome completo</u>.</p>";
    }


function validarNome($nome):bool {
    if (empty($nome)) return false;
    return !preg_match('/\W|\d|\_/', preg_replace('/\s/', '', $nome));

}
function consultarSalaAgropecuaria($nome): string
{
    $inicial = strtoupper(substr($nome, 0, 1));

    $provaNaSalaOnze = range('A', 'K');
    $provaNaSalaDoze = range('L', 'N');
    $provaNaSalaTreze = range('O', 'Z');

    if (in_array($inicial, $provaNaSalaOnze))
        return '11';
    elseif (in_array($inicial, $provaNaSalaDoze))
        return '12';
    elseif (in_array($inicial, $provaNaSalaTreze))
        return '13';
    else
        return 'Seu nome não começa com nenhuma letra. Verifique a ortografia e tente novamente.';


}

?>

<hr>
<?php include 'footer.php'?>
</body>
</html>