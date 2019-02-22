<!DOCTYPE html/>
<html>
<body>
    <h4>Jogador de futebol:</h4>
    <h4>
    <?php
        $num1 = $_POST['num1'];
        $num2 = $_POST['num2'];
        $num3 = $_POST['num3'];
    
        if ($num1 < $num2 AND $num1 < $num3) {
            echo $num1 . " - ";
            if ($num2 < $num3) {
                echo $num2 . " - ";
                echo $num3;
            }
            else {
                echo $num3 . " - ";
                echo $num2;
            }
        }
        elseif ($num2 < $num1 AND $num2 < $num3) {
            echo $num2 . " - ";
            if ($num1 < $num3) {
                echo $num1 . " - ";
                echo $num3;
            }
            else {
                echo $num3 . " - ";
                echo $num1;
            }
        } else {
            echo $num3 . " - ";
            if ($num2 < $num3) {
                echo $num2 . " - ";
                echo $num3;
            }
            else {
                echo $num3 . " - ";
                echo $num2;
            }
        }
    ?>
    </h4>
    </body>
</html>