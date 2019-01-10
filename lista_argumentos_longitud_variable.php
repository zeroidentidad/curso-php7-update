<?php

// funciona a partir de version php 5.6 y 7

// se implementa utilizando el token: ... (tres puntos)

function suma ($simbolo, int ...$numeros) {

	$total = 0;

	foreach ($numeros as $num) {
		$total+=$num;
	}

	return $simbolo.$total;

}

echo suma("$",1,2,3,4,5,6,7,8,9);

?>