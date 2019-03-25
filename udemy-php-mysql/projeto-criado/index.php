<?php
/**
 * Created by PhpStorm.
 * User: dahan
 * Date: 24/03/19
 * Time: 21:02
 *
 * Mestre de cerimônias do sistema
 */

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
        default:
            include_once 'views/home.php';
            break;
    }
endif;
#rodapé da página
include_once 'footer.php';
