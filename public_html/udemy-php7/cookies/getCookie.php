<?php
	
	if (isset($_COOKIE["NOME_DO_COOKIE"]))
	{
		/*
		$object = json_decode($_COOKIE["NOME_DO_COOKIE"]); 
		echo $object->aluno;
		*/

		echo $_COOKIE["NOME_DO_COOKIE"];
	}

?>