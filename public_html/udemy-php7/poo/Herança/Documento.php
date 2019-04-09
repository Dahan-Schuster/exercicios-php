<?php
/**
 * Created by PhpStorm.
 * User: dahan
 * Date: 24/03/19
 * Time: 14:40
 */

class Documento
{
    private $numero;

    /**
     * @return mixed
     */
    public function getNumero()
    {
        return $this->numero;
    }

    /**
     * @param mixed $numero
     */
    public function setNumero($numero): void
    {
        $this->numero = $numero;
    }
}