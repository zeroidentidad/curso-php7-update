<?php  
namespace Animales\Mamiferos;

class Perro{
	function __construct(){
		print "Hola, soy un perro<br>";
	}
}
class Gato{
	function __construct(){
		print "Hola, soy un gato<br>";
	}
}
function ladrar(){ print "Guau, guau<br>"; }
function maullar(){ print "Miau, miau<br>"; }

const PERRO = "Lazzy";
const GATO = "Gardfield";
?>