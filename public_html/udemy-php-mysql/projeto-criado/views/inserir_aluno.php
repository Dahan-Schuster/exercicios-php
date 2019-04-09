<head>
    <script language="JavaScript" type="text/javascript">
        function validar() {
            var nomeAluno = formInserirAluno.nome_aluno.value;
            var emailAluno = formInserirAluno.email_aluno.value;

            if (nomeAluno.trim() == "" || nomeAluno.match("/\d/") != null) {
                alert("Insira um nome válido.");
                formInserirAluno.nome_aluno.focus();
                return false;
            }
            if (emailAluno.trim() == "") {
                alert("Insira um email válido.");
                formInserirAluno.email_aluno.focus();
                return false;
            }

        }
    </script>
</head>

<h1 style="text-align: center; margin-bottom: 10px">Inserir novo aluno</h1>
<hr>
<form action="processa_aluno.php" method="post" name="formInserirAluno">
    <table class="formulario" align="center" cellspacing="15">
        <tr>
            <th><label>Nome do aluno:</label></th>
            <td><input type="text" name="nome_aluno" placeholder="Insira o nome do aluno"></td>
        </tr>
        <tr>
            <th><label>Email:</label></th>
            <td><input type="text" name="email_aluno" placeholder="Email do aluno"></td>
        </tr>
        <tr>
            <th><label>Data de nascimento:</label></th>
            <td><input type="date" name="nascimento_aluno" placeholder="Data de nascimento"></td>
        </tr>
    </table>
    <div  class="submit-cadastro">
        <input type="submit" value="Inserir aluno"  onclick="return validar()"/>
    </div>
</form>