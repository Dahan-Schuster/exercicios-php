<a href="?pagina=inserir_curso">Inserir curso</a>
<table class="lista" align="center">
    <tr>
        <th>Curso</th>
        <th>Carga horária</th>
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
</table>