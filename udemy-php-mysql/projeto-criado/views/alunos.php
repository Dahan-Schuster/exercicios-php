<a href="?pagina=inserir_aluno">Inserir aluno</a>
<table class="lista" style="border:1px solid #ccc; width: 100%;" align="center">
    <tr>
        <th>Aluno(a)</th>
        <th>E-mail</th>
        <th>Data de nascimento</th>
    </tr>

    <?php
    while ($linha = mysqli_fetch_array($listaDeAlunos)) {
        echo '<tr><td>'.$linha['nomeAluno'].'</td>';
        echo '<td>'.$linha['emailAluno'].'</td>';
        $dataNascimento = $linha['nascimentoAluno'];
        echo '<td>' . formatarDataDeNascimentoComBarras($dataNascimento) . '</td></tr>';

    }


    function formatarDataDeNascimentoComBarras($data) {
        $partesDaData = preg_split('/\-/', $data);
        $ano = $partesDaData[0];
        $mes = $partesDaData[1];
        $dia = $partesDaData[2];

        return "$dia/$mes/$ano";
    }
    ?>
</table>