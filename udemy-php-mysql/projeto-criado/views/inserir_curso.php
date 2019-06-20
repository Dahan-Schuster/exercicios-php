<head>
    <script language="JavaScript" type="text/javascript">
        function validar() {
            var cargaHoraria = formInserirCurso.carga_horaria.value;
            var nomeCurso = formInserirCurso.nome_curso.value;

            if (nomeCurso.trim() == "") {
                alert("Insira um nome para o curso.");
                formInserirCurso.nome_curso.focus();
                return false;
            }

            if (parseInt(cargaHoraria) > 100) {
                alert("Insira uma carga horária menor que 100 horas!");
                formInserirCurso.carga_horaria.focus();
                return false;
                
            } else if (parseInt(cargaHoraria) < 1) {
                alert("Insira uma carga horária real!");
                formInserirCurso.carga_horaria.focus();
                return false;
            }

        }
    </script>
</head>

<h1 style="text-align: center; margin-bottom: 10px">Inserir novo curso</h1>
<hr>
<form action="processa_curso.php" method="post" name="formInserirCurso">
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