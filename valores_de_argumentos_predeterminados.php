<?php

// versiones: php5 y php7

// php tambien permite el uso de arreglos y del tipo especial NULL como valores predeterminados

//el valor predeterminado debe ser una expresion constante no una variable un miembro de una clase o una llamada a una funcion

function pastel ($costo, $sabor=array("limon")){
	return "<p>Esto es un pastel sabor ".join(",",$sabor).", con un costo de $".$costo."</p>";
}

$sabores = array("fresa","chocolate");
print pastel(100, $sabores);
print pastel(200);

?>