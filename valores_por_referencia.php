<?php

// versiones: php5 y php7

// por defecto los argumentos de las funciones son pasados por valor (asi, si el valor del argumento dentro de la funcion cambia, este no cambia fuera de la funcion)

// para permitir a una funcion modificar sus argumentos estos deben pasarse por referencia

// para hacer que un argumnento a una funcion sea siempre pasado por referencia hay que anteponer al nombre del argumento el signo ampersand (&) en la definicion de la funcion

function saludo (&$nombre){

	$nombre.=", buenos dias <br>";

}
$nombre = "Pedro Picapiedra";

saludo($nombre);

print $nombre;

// & pasamos por referencia  (si se modifica),
// por omision se pasa el valor (no se modifica)
$fruta = array("manzana", "pera");
function frutas (&$f){

	array_push($f, "uvas");

}
frutas($fruta);
var_dump($fruta);
?>