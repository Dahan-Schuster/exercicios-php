<?php
    
    function senhaInvalida()
    {
        header('location:index.php?res=senhaInvalida');
    }

    function loginInvalido()
    {
        header('location:index.php?res=loginInvalido');
    }

    function login($login)
    {
        session_start();
        $_SESSION['usuario'] = $login;
        header('location:paginaInicial.php');
    }


    $login = $_POST['login'];
    $senha = $_POST['senha'];

    switch ($login){
        case "admin":
            $senha == "1234" ? login("Administrador") : senhaInvalida();
            break;
        case "visit":
            $senha == "12345" ? login("Visitante") : senhaInvalida();
            break;
        case "colab":
            $senha == "123456" ? login("Colaborador") : senhaInvalida();
            break;
        default:
            loginInvalido();
            break;
    }


?>