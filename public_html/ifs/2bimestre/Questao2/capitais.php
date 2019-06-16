<?php

$capitais = array(
	'Porto Alegre' => 1422766,
	'Recife' => 1533712,
	'Rio de Janeiro' => 6102956,
	'Salvador' => 2892701,
	'São Paulo' => 10970654,
	'Florianópolis' => 421240
);

function media($capitais)
{
	
	$media = 0;
	
	foreach ($capitais as $key => $value) {
		$media += $value;
	}

	$media = $media / sizeof($capitais);

	return $media;
	
}

function ordenarPopulacao($capitais)
{
	arsort($capitais);

	$htmlString = "<table  class=\'capitais\' width=\'310\' align=\'center\' cellspacing=\'0\' ><tr><th>Capital</th><th>População</th></tr>";

	foreach ($capitais as $capital => $populacao) {
		$htmlString .= "<tr><td class=\'capital\'><b>$capital</b></td><td class=\'populacao\'> ". number_format($populacao) . "</td></tr>";
	}
			
	return $htmlString . "</table>";
}

function ordenarCapital($capitais)
{
	ksort($capitais);

	$htmlString = "<table  class=\'capitais\' width=\'310\' align=\'center\' cellspacing=\'0\' ><tr><th>Capital</th><th>População</th></tr>";

	foreach ($capitais as $capital => $populacao) {
		$htmlString .= "<tr><td class=\'capital\'><b>$capital</b></td><td class=\'populacao\'> ". number_format($populacao) . "</td></tr>";
	}
			
	return $htmlString . "</table>";
}

function infoMaisPopulosa($capitais)
{
	$cap = array_keys($capitais, max($capitais));
	$capital = $cap[0];
	$populacao = max($capitais);

	$htmlString = "<table  class=\'capitais\' width=\'310\' align=\'center\' cellspacing=\'0\' ><tr><th>Capital</th><th>População</th></tr>";
	$htmlString .= "<tr><td class=\'capital\'><b>$capital</b></td><td class=\'populacao\'> ". number_format($populacao) . "</td></tr>";

	return $htmlString;
}
