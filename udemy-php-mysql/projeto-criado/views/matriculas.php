<head>
    <script language="JavaScript" type="text/javascript">
        function validar() {
            var curso = formMatricular.curso.value;
            var aluno = formMatricular.aluno.value;

            if (curso == "0" || curso == null) {
                alert("Selecione um curso.");
                formMatricular.curso.focus();
                return false;
            } else if (aluno == "0") {
                alert("Selecione um aluno.");
                formMatricular.aluno.focus();
                return false;
            }

        }
    </script>
</head>


<a href="?pagina=inserir_matricula">Inserir Matrícula</a>
<table class="lista" align="center">
    <tr>
        <th><a class="orderBy" href="index.php?pagina=matriculas&orderBy=Aluno">Nome do aluno</a></th>
        <th><a class="orderBy" href="index.php?pagina=matriculas&orderBy=Curso">Nome do curso</a></th>
        <th><a class="orderBy" href="index.php?pagina=matriculas&orderBy=Matricula">Data de Matrícula</a></th>
        <th>Deletar</th>
    </tr>

    <?php

    if ($listaDeMatriculas != false) {
        while ($linha = mysqli_fetch_array($listaDeMatriculas)) {
            echo '<tr><td>'.$linha['Aluno'].'</td>';
            echo '<td>'.$linha['Curso'].'</td>';
            echo '<td>'.$linha['Matricula'].'</td>';
            echo "<td><a href='deleta_matricula.php?id=" . base64_encode($linha['id_aluno_curso']) . "'><img width='32px' src='img/del.png'></a></td></tr>";
        }
    }

    ?>
    <form action="processa_matricula.php" method="post" name="formMatricular">
        <tr>
            <td>
                <select name='aluno'>
                    <option value='0'>Selecione um aluno</option>
                    <?php
                        while ($linha = mysqli_fetch_array($listaDeAlunos)) {
                            echo "<option value=" . $linha['id_aluno'] . ">" . $linha['nome_aluno'] . "</option>";
                        }
                    ?>
                </select>
            </td>
            <td>
                <select name='curso'>
                    <option value='0'>Selecione um curso</option>
                    <?php
                        while ($linha = mysqli_fetch_array($listaDeCursos)) {
                            echo "<option value=" . $linha['id_curso'] . ">" . $linha['nome_curso'] . "</option>";
                        };
                    ?>
                </select>
            </td>
            <td>
                <?php echo date('Y/m/d', time()); ?>
            </td>
            <td>
                 <input class="submit-cadastro btn-in-table" type="submit" value="Matricular"  onclick="return validar()"/>
            </td>

        </tr>
    </form>
</table>