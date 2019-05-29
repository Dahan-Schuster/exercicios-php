<?php
	function getOlder(){
		$maxValue = max($_SESSION['idade']);
		$maxs = array_keys($_SESSION['idade'], $maxValue);
		
		return (sizeof($maxs) > 1 ? "Ambos possuem a mesma idade" : $_SESSION['nome'][$maxs[0]] ) . " --> $maxValue anos";

	}

	function getTaller(){
		$maxValue = max($_SESSION['altura']);
		$maxs = array_keys($_SESSION['altura'], $maxValue);
		
		return (sizeof($maxs) > 1 ? "Ambos possuem a mesma altura" : $_SESSION['nome'][$maxs[0]] ) . " --> $maxValue m";
	}

	function getHeavier(){
		$maxValue = max($_SESSION['peso']);
		$maxs = array_keys($_SESSION['peso'], $maxValue);
		
		return  (sizeof($maxs) > 1 ? "Ambos possuem o mesmo peso" : $_SESSION['nome'][$maxs[0]] ) . " --> $maxValue Kg";
	}
?>