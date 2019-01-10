<?php

// php7 añade soporte para las declaraciones de tipo de devolucion de las funciones 

// de forma similar a las declaraciones de tipo de argumento las declaraciones de tipo de devolucion especifican el tipo del valor que seran devuelto desde una funcion

// estan disponibles los mismos tipos para las declaraciones de tipo de devolucion que para las declaraciones de tipo de argumento

// la tipificacion estricta tambien tiene efecto sobre las declaraciones de tipo de devolucion 

// en el modo predeterminado de tipificacion debil los valores devueltos seran forzados al tipo correcto si no son ya de ese tipo

declare(strict_types=1);

function suma ($n1, $n2):int {

	return $n1+$n2;

}

var_dump(suma(10,5));

/*

function suma ($n1, $n2):int {

	return $n1+$n2;

}

var_dump(suma(10.5,5.4));

function suma ($n1, $n2):float {

	return $n1+$n2;
}

var_dump(suma(10,5));

function suma ($n1, $n2):string {

	return $n1+$n2;
}

var_dump(suma(10,5));

*/

//declare(strict_types=1);

class Gato{};
class Perro{};

function regresaGato():Gato{
	return new Gato;
}

var_dump(regresaGato());

?>