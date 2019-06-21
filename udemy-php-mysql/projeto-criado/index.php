<?php
/**
 * Created by PhpStorm.
 * User: dahan
 * Date: 24/03/19
 * Time: 21:02
 *
 * Mestre de cerimônias do sistema
 */

#Fuso horário
date_default_timezone_set("America/Maceio");

#Base de dados
include_once 'db.php';

#Cabeçalho
include_once 'header.php';

# Conteúdo da página
if (isset($_GET['pagina'])):
    $pagina = $_GET['pagina'];

    switch ($pagina) {
        case 'cursos':
            include_once 'views/cursos.php';
         break;
        case 'alunos':
            include_once 'views/alunos.php';
            break;
        case 'matriculas':
            include_once 'views/matriculas.php';
            break;
        case 'inserir_curso':
            include_once 'views/inserir_curso.php';
            break;
        case 'inserir_aluno':
            include_once 'views/inserir_aluno.php';
            break;
        case 'inserir_matricula':
            include_once 'views/inserir_matricula.php';
            break;
        default:
            include_once 'views/home.php';
            break;
    }
endif;
#rodapé da página
include_once 'footer.php';