<a href="?pagina=inserir_curso">Inserir curso</a>
<table class="lista" align="center">
    <tr>
        <th>Curso</th>
        <th>Carga horária</th>
    </tr>

    <?php

        if ($listaDeCursos != false) {
            while ($linha = mysqli_fetch_array($listaDeCursos)) {
                echo '<tr><td>'.$linha['nome_curso'].'</td>';
                echo '<td>'.$linha['carga_horaria'].'</td></tr>';
            }
        }

    ?>
</table>