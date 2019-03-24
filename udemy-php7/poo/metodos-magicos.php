<?php

# instanciando um objeto utilizando o método mágico __contruct() (construtor)
$endereco = new Endereco("Rua Dos Bobos", 0, "Fantasma");

foreach ($endereco->exibir() as $chave => $valor):
    echo "$chave : $valor <br/>";
endforeach;

echo "<br/>";

echo $endereco; # utiliza o método __tostring()

echo "<br/><br/>";

unset($endereco); # utiliza o método __destruct()

class Endereco {

    private $logradouro;
    private $numero;
    private $cidade;

    public function __construct($log, $num, $cid) {
        $this->logradouro = $log;
        $this->numero = $num;
        $this->cidade = $cid;
    }

    public function __destruct() {
        echo "Objeto destruído";
    }

    public function __toString():string {
        return  "$this->logradouro, $this->numero - " . strtoupper($this->cidade);
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