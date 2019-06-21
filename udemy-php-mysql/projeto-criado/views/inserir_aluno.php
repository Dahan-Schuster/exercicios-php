<head>
    <script language="JavaScript" type="text/javascript">
        function validar() {
            var nomeAluno = formAluno.nome_aluno.value;
            var emailAluno = formAluno.email_aluno.value;
            var data = formAluno.data_nascimento.value;
            
            if (nomeAluno.trim() == "" || nomeAluno.match("/\d/") != null) {
                alert("Insira um nome válido.");
                formAluno.nome_aluno.focus();
                return false;
            } else if (emailAluno.trim() == "") {
                alert("Insira um email válido.");
                formAluno.email_aluno.focus();
                return false;
            } else if (data.length == 0) {
                alert("Insira uma data de nascimento.");
                formAluno.data_nascimento.focus();
                return false;
            }


        }
    </script>
</head>

<?php if (isset($_GET['editar'])) { ?>
    <?php
        $id_aluno = base64_decode($_GET['editar']); 
        $linha = mysqli_fetch_array(buscarPorCampo("ALUNOS", "id_aluno", $id_aluno));
    ?>
    
    <h1 style="text-align: center; margin-bottom: 10px">Editar dados do aluno</h1>
    <hr>
    <form action="editar_aluno.php" method="post" name="formAluno">
        <input type="hidden" name="id_aluno" value=<?php echo $linha['id_aluno'] ?>>
        <table class="formulario" align="center" cellspacing="15">
            <tr>
                <th><label>Nome do aluno:</label></th>
                <td><input type="text" name="nome_aluno" placeholder="Insira o nome do aluno" value="<?php echo $linha['nome_aluno']; ?>"> </td>
            </tr>
            <tr>
                <th><label>Email:</label></th>
                <td><input type="text" name="email_aluno" placeholder="Email do aluno" value=<?php echo $linha['email_aluno']?>></td>
            </tr>
            <tr>
                <th><label>Data de nascimento:</label></th>
                <td><input type="date" name="data_nascimento" placeholder="Data de nascimento" value=<?php echo $linha['data_nascimento']?>></td>
            </tr>
        </table>
        <div  class="submit-cadastro">
            <input type="submit" value="Atualizar"  onclick="return validar();"/>
        </div>
    </form>

<?php } else { ?>

<h1 style="text-align: center; margin-bottom: 10px">Inserir novo aluno</h1>
<hr>
<form action="processa_aluno.php" method="post" name="formAluno">
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
            <td><input type="date" name="data_nascimento" placeholder="Data de nascimento"></td>
        </tr>
    </table>
    <div  class="submit-cadastro">
        <input type="submit" value="Inserir aluno"  onclick="return validar();"/>
    </div>
</form>

<?php } ?>