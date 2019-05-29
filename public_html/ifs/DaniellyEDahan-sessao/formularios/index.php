<!DOCTYPE html>
<?php 

    session_start();
    $_SESSION['nome'] = array();
    $_SESSION['idade'] = array();
    $_SESSION['peso'] = array();
    $_SESSION['altura'] = array();

    header('location:formulario.php?form=1');
?>



