<?php

// sustituye a la funcion preg_replace_callback

// devuelve un arreglo si el parametro subject es un arreglo o una cadena de lo contrario. en caso de error devuelve null

// util para busquedas en expresiones regulares
 
$cadena = "AaaaAa BBBbbbbb CCCCccccc";

preg_replace_callback_array([
	'~[a]+~i' => function($match){
		print strlen($match[0])." letras 'a' en la cadena"."<br>";
	},
	'~[b]+~i' => function($match){
		print strlen($match[0])." letras 'b' en la cadena"."<br>";
	},
	'~[c]+~i' => function($match){
		print strlen($match[0])." letras 'c' en la cadena"."<br>";
	}
], $cadena);
?>