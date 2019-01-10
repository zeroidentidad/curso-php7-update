<?php  
require "espacios_de_nombres_con_USE.php";

// exite desde php 5.3, lo nuevo es la caracteristica de agrupacion

use Animales\Mamiferos\{ Perro as MiPerro, Gato };
use function Animales\Mamiferos\{ladrar as ladrido, maullar};
use const Animales\Mamiferos\{PERRO as DOG, GATO as CAT };


print "<h2>Clases del espacio de nombres</h2>";
$perro = new MiPerro;
$gato = new Gato;

print "<h2>Funciones del espacio de nombres</h2>";
ladrido();
maullar();

print "<h2>Constantes del espacio de nombres</h2>";
print DOG."<br>";
print CAT."<br>";
?>