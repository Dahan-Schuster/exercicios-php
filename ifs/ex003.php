<!DOCTYPE html/>
<html>
<body>
    <h3>Media do aluno</h3>
    <h4>
    <?php
        $aluno = $_POST['aluno'];
        $nota1 = (float) $_POST['nota1'];
        $nota2 = (float) $_POST['nota2'];
        $nota3 = (float) $_POST['nota3'];
        
        if (notaValida($nota1) AND notaValida($nota2) AND notaValida($nota3)) {
            calcularMedia();
            mostrarResultados();
        } else
            echo "UMA OU MAIS NOTAS INVÁLIDAS";
        
        ##########################################
        ################# FUNÇÕES ################
        ##########################################
        
        function notaValida($nota){
            return $nota >= 0 AND $nota <= 10;
        }
        
        function calcularMedia() {
            global $media, $nota1, $nota2, $nota3;
            $media = ($nota1 + $nota2 + $nota3) / 3;
        }
        
        function situacao(){
            global $media;
            if ($media < 4) 
                return 'REPROVADO';
            elseif ($media < 7)
                return 'PROVA FINAL';

            return 'APROVADO';
        }
        
        function mostrarResultados(){
            global $aluno, $media;
            echo "Aluno: $aluno <br>";
            echo "Média: $media <br><br>";
            echo 'Situação: ' . situacao();
        }
    ?>
    </h4>
    </body>
</html>