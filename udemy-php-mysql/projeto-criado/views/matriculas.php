

<a href="?pagina=inserir_matricula">Inserir Matrícula</a>
<table class="lista" align="center">
    <tr>
        <th>Nome do aluno</th>
        <th>Nome do curso</th>
        <th>Deletar</th>
    </tr>

    <?php
    if ($listaDeMatriculas != false) {
        while ($linha = mysqli_fetch_array($listaDeMatriculas)) {
            echo '<tr><td>'.$linha['Aluno'].'</td>';
            echo '<td>'.$linha['Curso'].'</td>';
                echo "<td><a href='deleta_matricula.php?id=" . base64_encode($linha['id_aluno_curso']) . "'><img width='32px' src='img/del.png'></a></td></tr>";
        }
    }

    ?>
</table>