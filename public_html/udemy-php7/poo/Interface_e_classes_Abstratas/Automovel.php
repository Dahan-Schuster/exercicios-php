<?php
/**
 * Created by PhpStorm.
 * User: dahan
 * Date: 24/03/19
 * Time: 15:28
 */

include_once 'Veiculo.php';

abstract class Automovel implements Veiculo
{

    public function acelerar($velocidade)
    {
        echo "Acelerando a $velocidade Km/h...<br>";
        echo "Vruuuuuuum!";
    }

    public function frenar($velocidade)
    {
        echo "Frenando até alcançar $velocidade Km/h...<br>";
        echo "ieeeeen!";
    }

    public function trocarMarcha($marcha)
    {
        echo "Marcha trocada para $marcha";
    }
}