<?php

    include('database.php');
    
    function senhaInvalida()
    {
        header('location:index.php?res=senhaInvalida');
    }

    function loginInvalido()
    {
        header('location:index.php?res=loginInvalido');
    }

    function logar($login, $tipo)
    {
        session_start();
        $_SESSION['usuario'] = $login;
        $_SESSION['tipo_usuario'] = $tipo;
        header('location:paginaInicial.php');
    }


    $login = $_POST['login'];
    $senha = $_POST['senha'];

    if ($login == "admin") {
        if ($senha == "1234") {
            logar($login, "Administrador");
        } else {
            senhaInvalida();
        }
    } else {
        $usuarios = $conexao->query("SELECT * FROM usuarios");
        
        while ($user = $usuarios->fetch_array()) {
            if ($user['login'] == $login && $user['senha'] == $senha) {
                logar($login, $user['tipo']);
                break;
            }
        }
        loginInvalido();
    }


?>