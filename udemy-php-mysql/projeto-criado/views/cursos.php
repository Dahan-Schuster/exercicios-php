<head>
    <script language="JavaScript" type="text/javascript">
        function validar() {
            var cargaHoraria = parseInt(formCurso.carga_horaria.value);
            var nomeCurso = formCurso.nome_curso.value;

            //alert(cargaHoraria);


            if (nomeCurso.trim() == "") {
                alert("Insira um nome para o curso.");
                formCurso.nome_curso.focus();
                return false;
            } else if (cargaHoraria > 100) {
                alert("Insira uma carga horária menor que 101 horas!");
                formCurso.carga_horaria.focus();
                return false;
                
            } else if (cargaHoraria < 1 || cargaHoraria == "") {
                alert("Insira uma carga horária real!");
                formCurso.carga_horaria.focus();
                return false;
            }

        }
    </script>
</head>
<a href="?pagina=inserir_curso">Inserir curso</a>
<table class="lista" align="center">
    <tr>
        <th><a class="orderBy" href="index.php?pagina=cursos&orderCursoBy=nome_curso">Curso</a></th>
        <th><a class="orderBy" href="index.php?pagina=cursos&orderCursoBy=carga_horaria">Carga horária (h)</a></th>
        <th>Deletar</th>
        <th>Editar</th>
    </tr>

    <?php

        if ($listaDeCursos != false) {
            while ($linha = mysqli_fetch_array($listaDeCursos)) {
                echo '<tr><td>'.$linha['nome_curso'].'</td>';
                echo '<td>'.$linha['carga_horaria'].'</td>';
                echo "<td><a href='deleta_curso.php?id=" . base64_encode($linha['id_curso']) . "'><img width='32px' src='img/del.png'></a></td>";
                echo "<td><a href='?pagina=inserir_curso&editar=" . base64_encode($linha['id_curso']) . "'><img width='32px' src='img/edit.png'></a></td>";
                echo "</tr>";
        }
    }
    ?>
    <form action="processa_curso.php" method="post" name="formCurso">
        <tr>    
            <td><input type="text" name="nome_curso" placeholder="Insira o nome do curso"></td>
            <td><input type="number" name="carga_horaria" placeholder="Carga horária"></td>
            <td colspan="2">
                    <input class="submit-cadastro btn-in-table" type="submit" value="Inserir curso"  onclick="return validar()"/>
            </td>
        </tr>
    </form>
</table>