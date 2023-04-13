<?php
$numero = $_GET['n'];
if ($numero<=1) die("Não Primo... ");
if ($numero%2 == 0) die("Não Primo... ");
if ($numero == 3) die ("Primo... ");

$numero_menos_1 = $numero -1;
$base = $numero_menos_1 / 2;
$controle=1;
$colunas = 2;

	while ($base > 1){
		$base-=1;
		$controle+=$colunas;

			if ($controle == $base) break;

			if ($controle > $base){
				$controle = $controle - $base;
				$colunas+=1;
			}
	}

if ($controle != $base){
	echo "Primo... ".$numero.' -> '.$base . ' -> '.$controle;
}else{
	echo "Não Primo... ".$numero.' -> '.$base . ' -> '.$controle;
}
