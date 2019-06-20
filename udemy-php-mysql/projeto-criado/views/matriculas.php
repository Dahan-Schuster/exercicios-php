<table class="lista" style="border:1px solid #ccc; width: 100%;">
    <tr>
        <th>Nome do aluno</th>
        <th>Nome do curso</th>
    </tr>

    <?php
    if ($listaDeMatriculas != false) {
        while ($linha = mysqli_fetch_array($listaDeMatriculas)) {
            echo '<tr><td>'.$linha['Aluno'].'</td>';
            echo '<td>'.$linha['Curso'].'</td></tr>';
        }
    }

    ?>
</table>