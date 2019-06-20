<?php

class Prato {

	private $dia;
	private $nome;
	private $preco;
	
	public static $pratos = array(
		'segunda' => array(
			'prato' => 'Couve refogada',
			'preco' => 18.75),
		'terça' => array(
			'prato' => 'Salada de quinoa',
			'preco' => 21.47),
		'quarta' => array(
			'prato' => 'Arroz à grega',
			'preco' => 12.36),
		'quinta' => array(
			'prato' => 'Risoto vegano',
			'preco' => 14.29),
		'sexta' => array(
			'prato' => 'Estrogonofe vegano',
			'preco' => 10.58),
		'sábado'  => array(
			'prato' => 'Macarrão integral com tofu',
			'preco' => 29.45),
		'domingo' => array(
			'prato' => 'Yakisoba vegano',
			'preco' => 21.17)
	);

	public function __construct($dia) 
	{
		$this->dia = strtolower($dia);
		self::atualizarValores();
	}

	public function setDia($dia) 
	{
		$this->dia = $dia;
		self::atualizarValores();
	}

	public function getDia()
	{
		return $this->dia;
	}

	public function getNome()
	{
		return $this->nome;
	}
	
	public function getPreco()
	{
		return $this->preco;
	}

	private function atualizarValores()
	{
		$this->nome = self::$pratos[$this->dia]['prato'];
		$this->preco = self::$pratos[$this->dia]['preco']; 
	}


}