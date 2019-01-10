<?php

// ahora se pueden definir constantes de array con define()

// En php 5.6, solamente se podian definir con const

define('FRUTAS', ["manzana","pera","uvas","sandia"]);

print "<pre>";
print var_dump(FRUTAS);
print "</pre>";

print FRUTAS [1];

//FRUTAS[1]="zanahoria"; // error porque no se puede modificar
?>