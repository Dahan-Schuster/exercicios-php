<a href="?pagina=inserir_aluno">Inserir aluno</a>
<table class="lista" align="center">
    <tr>
        <th>Aluno(a)</th>
        <th>E-mail</th>
        <th>Data de nascimento</th>
        <th>Deletar</th>
        <th>Editar</th>
    </tr>

    <?php
    if ($listaDeAlunos != false) {
        while ($linha = mysqli_fetch_array($listaDeAlunos)) {
            echo '<tr><td>'.$linha['nome_aluno'].'</td>';
            echo '<td>'.$linha['email_aluno'].'</td>';
            $dataNascimento = $linha['data_nascimento'];
            echo '<td>' . formatarDataDeNascimentoComBarras($dataNascimento) . '</td>';
            echo "<td><a href='deleta_aluno.php?id=" . base64_encode($linha['id_aluno']) . "'><img width='32px' src='img/del.png'></a></td>";
            echo "<td><a href='?pagina=inserir_aluno&editar=" . base64_encode($linha['id_aluno']) . "'><img width='32px' src='img/edit.png'></a></td>";
            echo "</tr>";
        }
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