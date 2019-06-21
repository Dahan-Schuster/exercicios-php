<head>
    <script language="JavaScript" type="text/javascript">
        function validar() {
            var nomeAluno = formAluno.nome_aluno.value;
            var emailAluno = formAluno.email_aluno.value;
            var data = formAluno.data_nascimento.value;
            
            if (nomeAluno.trim() == "" || nomeAluno.match("/\d/") != null) {
                alert("Insira um nome válido.");
                formAluno.nome_aluno.focus();
                return false;
            } else if (emailAluno.trim() == "") {
                alert("Insira um email válido.");
                formAluno.email_aluno.focus();
                return false;
            } else if (data.length == 0) {
                alert("Insira uma data de nascimento.");
                formAluno.data_nascimento.focus();
                return false;
            }


        }
    </script>
</head>
<a href="?pagina=inserir_aluno">Inserir aluno</a>
<table class="lista" align="center">
    <tr>
        <th><a class="orderBy" href="index.php?pagina=alunos&orderAlunoBy=nome_aluno">Aluno(a)</a></th>
        <th><a class="orderBy" href="index.php?pagina=alunos&orderAlunoBy=email_aluno">E-mail</a></th>
        <th><a class="orderBy" href="index.php?pagina=alunos&orderAlunoBy=data_nascimento">Data de nascimento</a></th>
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
    <form action="processa_aluno.php" method="post" name="formAluno">
        <tr>    
            <td><input type="text" name="nome_aluno" placeholder="Insira o nome do aluno"></td>
            <td><input type="text" name="email_aluno" placeholder="Email do aluno"></td>
             <td><input type="date" name="data_nascimento" placeholder="Data de nascimento"></td>
            <td colspan="2">
                    <input class="submit-cadastro btn-in-table" type="submit" value="Inserir aluno"  onclick="return validar();"/>
            </td>
        </tr>
    </form>
</table>