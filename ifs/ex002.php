<!DOCTYPE html>
<html lang="br">
<body>
    <h4>Jogador de futebol:</h4>
    <h4>
    <?php
        $nome = $_POST['nome'];
        $idade = (int) $_POST['idade'];
    
        echo "Jogador: $nome <br>";
        echo "Idade: $idade<br>";
        # var_dump($idade);
        echo "Categoria: " ;   
    
        if ($idade < 5) 
            echo 'IDADE INVÁLIDA';
        elseif ($idade <= 10) 
            echo 'INFANTIL';
        elseif ($idade <= 15)
            echo 'JUVENIL';
        elseif ($idade <= 20)
            echo 'JUNIOR';
        elseif ($idade <= 25)
            echo 'PROFISSIONAL';
    ?>
    </h4>
    </body>
</html>