<?php
		session_start();
        foreach ($_POST as $key => $value) {
            array_push($_SESSION[$key], $value);
        }


        if (sizeof($_SESSION['nome']) >= 2)
        	header('location:resultado.php');
        else
	        header('location:formulario.php?form=2');
	    

?>