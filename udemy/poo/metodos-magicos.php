<?php

$endereco = new Endereco("Rua Dos Bobos", 0, "Fantasma");

foreach ($endereco->exibir() as $chave => $valor):
    echo "$chave : $valor <br/>";
endforeach;

class Endereco {

    private $logradouro;
    private $numero;
    private $cidade;

    public function __construct($log, $num, $cid) {
        $this->logradouro = $log;
        $this->numero = $num;
        $this->cidade = $cid;
    }

    public function exibir():array {
        return array(
          "Logradouro"=>$this->logradouro,
          "Numero"=>$this->numero,
          "Cidade"=>$this->cidade
        );
    }


    public function getLogradouro()
    {
        return $this->logradouro;
    }

    public function setLogradouro($logradouro): void
    {
        $this->logradouro = $logradouro;
    }

    public function getNumero()
    {
        return $this->numero;
    }

    public function setNumero($numero): void
    {
        $this->numero = $numero;
    }

    public function getCidade()
    {
        return $this->cidade;
    }

    public function setCidade($cidade): void
    {
        $this->cidade = $cidade;
    }


}

?>