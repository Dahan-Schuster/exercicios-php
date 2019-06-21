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

<h1 style="text-align: center; margin-bottom: 10px">Matricular aluno em em curso</h1>
<hr>

<?php 

if ($listaDeCursos->num_rows == 0 || $listaDeAlunos->num_rows == 0) {
    echo "<h2>Não há cursos ou alunos cadastrados.</h2>";
    echo "<p>Certifique-se de que cadastrou ao menos um curso e um aluno antes de realizar uma matrícula.</p>";
} else {
?>
<form action="processa_matricula.php" method="post" name="formMatricular">
    <table class="formulario" align="center" cellspacing="15">
        <tr>
            <th><label>Nome do curso:</label></th>
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
        </tr>
        <tr>
            <th><label>Nome do aluno:</label></th>
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
        </tr>
    </table>
    <div  class="center">
        <input class="submit-cadastro" type="submit" value="Matricular"  onclick="return validar()"/>
    </div>
</form>

<?php } ?>