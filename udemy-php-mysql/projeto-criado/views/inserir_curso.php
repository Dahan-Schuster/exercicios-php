<head>
    <script language="JavaScript" type="text/javascript">
        function validar() {
            var cargaHoraria = parseInt(formCurso.carga_horaria.value);
            var nomeCurso = formCurso.nome_curso.value;


            if (nomeCurso.trim() == "") {
                alert("Insira um nome para o curso.");
                formCurso.nome_curso.focus();
                return false;
            } else if (cargaHoraria > 100) {
                alert("Insira uma carga horária menor que 101 horas!");
                formCurso.carga_horaria.focus();
                return false;
                
            } else if (cargaHoraria < 1) {
                alert("Insira uma carga horária real!");
                formCurso.carga_horaria.focus();
                return false;
            }

        }
    </script>
</head>

<?php if (isset($_GET['editar'])) { ?>
    <?php
        $id_curso = base64_decode($_GET['editar']); 
        $linha = mysqli_fetch_array(buscarPorCampo("CURSOS", "id_curso", $id_curso)) 
    ?>
    <h1 style="text-align: center; margin-bottom: 10px">Editar dados do curso</h1>
    <hr>
    <form action="editar_curso.php" method="post" name="formCurso">
        <input type="hidden" name="id_curso" value=<?php echo $linha['id_curso'] ?>>
        <table class="formulario" align="center" cellspacing="15">
            <tr>
                <th><label>Nome do curso:</label></th>
                <td><input type="text" name="nome_curso" placeholder="Insira o nome do curso" value=<?php echo $linha['nome_curso']?>> </td>
            </tr>
            <tr>
                <th><label>Carga horária:</label></th>
                <td><input type="number" name="carga_horaria" placeholder="Carga horária" value=<?php echo $linha['carga_horaria']?>> <b>&emsp;h</b></td>
            </tr>
        </table>
        <div  class="submit-cadastro">
            <input type="submit" value="Inserir curso"  onclick="return validar()"/>
        </div>
    </form>
<?php } else { ?>

<h1 style="text-align: center; margin-bottom: 10px">Inserir novo curso</h1>
<hr>
<form action="processa_curso.php" method="post" name="formCurso">
    <table class="formulario" align="center" cellspacing="15">
        <tr>
            <th><label>Nome do curso:</label></th>
            <td><input type="text" name="nome_curso" placeholder="Insira o nome do curso"></td>
        </tr>
        <tr>
            <th><label>Carga horária:</label></th>
            <td><input type="number" name="carga_horaria" placeholder="Carga horária"><b>&emsp;h</b></td>
        </tr>
    </table>
    <div  class="submit-cadastro">
        <input type="submit" value="Inserir curso"  onclick="return validar()"/>
    </div>
</form>

<?php } ?>