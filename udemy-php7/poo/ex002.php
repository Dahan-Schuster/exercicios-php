<?php

$gol = new Carro();
$gol->setMarca("Volkswagen");
$gol->setModelo("Gol");
$gol->setCor("Amarelo");
$gol->setAno(2015);

foreach ($gol->exibir() as $chave => $valor):
    echo "$chave : " ;
    var_dump($valor);
    echo "<br/>";
endforeach;

class Carro {

    private $marca;
    private $modelo;
    private $cor;
    private $ano;



    public function exibir(){

        return array(
            "marca"=>$this->getMarca(),
            "modelo"=>$this->getModelo(),
            "cor"=>$this->getCor(),
            "ano"=>$this->getAno()
        );
    }


    /**
     * @return mixed
     */
    public function getMarca()
    {
        return $this->marca;
    }

    /**
     * @param mixed $marca
     */
    public function setMarca($marca): void
    {
        $this->marca = $marca;
    }

    /**
     * @return mixed
     */
    public function getModelo()
    {
        return $this->modelo;
    }

    /**
     * @param mixed $modelo
     */
    public function setModelo($modelo): void
    {
        $this->modelo = $modelo;
    }

    /**
     * @return mixed
     */
    public function getCor()
    {
        return $this->cor;
    }

    /**
     * @param mixed $cor
     */
    public function setCor($cor): void
    {
        $this->cor = $cor;
    }

    public function getAno():int {
        return $this->ano;
    }

    /**
     * @param mixed $ano
     */
    public function setAno(int $ano): void
    {
        $this->ano = $ano;
    }




}
