<a href="?pagina=inserir_curso">Inserir curso</a>
<table class="lista" style="border:1px solid #ccc; width: 100%;">
    <tr>
        <th>Curso</th>
        <th>Carga horária</th>
    </tr>

    <?php
        while ($linha = mysqli_fetch_array($listaDeCursos)) {
            echo '<tr><td>'.$linha['nomeCurso'].'</td>';
            echo '<td>'.$linha['duracaoCurso'].'</td></tr>';
        }

    ?>
</table>