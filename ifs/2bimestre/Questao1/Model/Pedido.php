<?php

require_once ('Prato.php');

class Pedido {

	private $preco;
	private $pratos; # array

	public function __construct ($pratos) 
	{
		$this->pratos = $pratos;
	}

	public function getPreco()
	{
		return $this->preco;
	}

	public function calcularPreco()
	{
		$precoTotal = 0;
		$quantidade = sizeof($this->pratos);
		
		if ($quantidade > 0):
			foreach ($this->pratos as $prato) {
				$precoTotal += $prato->getPreco();
			}
		endif;

		return $this->preco = $precoTotal;
	}
}
