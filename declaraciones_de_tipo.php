<?php

// bool: el parametro debe ser un valor de tipo boolean. php7

// float: el parametro debe ser un numero de tipo float. php7

// int: el parametro debe ser un valor de tipo integer. php7

// string: el parametro debe ser un string. php7 

// Para que desde PHP7 sea un "Error fatal" necesitamos la declaracion: declare(stric_types=1); // existe desde php4

declare(strict_types=1);


function hola(bool $nombre){

	print "hola ".$nombre;

}

hola(12345);

?>