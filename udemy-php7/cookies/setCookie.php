<?php

	$data = array(
		"aluno"=>"Dahan Schuster",
		"materia"=>"Programação",
		"assunto"=>"PHP7",
		"plataforma"=>"Udemy"
	);

	$duracao = time() + 3600; # hora atual + 1h em segundos

	setcookie("NOME_DO_COOKIE", json_encode($data), $duracao); 	// a duração é quanto tempo o cookie irá levar para expirar

	

?>