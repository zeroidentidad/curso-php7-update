<?php

// Se emplea para comparar 2 expresiones.

// Devuelve -1, 0 o 1 cuando $a es respectivamente menor, igual, o mayor que $b

// Las comparaciones se realizan segun las reglas de comparacion de tipos usuales de PHP

// Numeros enteros:

print 'Enteros:';
print "<br>";
echo 1 <=> 1; // 0
print "<br>";
echo 1 <=> 2; // -1
print "<br>";
echo 2 <=> 1; // 1
print "<br>";
print "<br>";
print 'Decimales:';
print "<br>";
echo 1.5 <=> 1.5; // 0
print "<br>";
echo 1.5 <=> 2.1; // -1
print "<br>";
echo 2.1 <=> 1.5; // 1
print "<br>";
print "<br>";
print 'Cadenas:';
print "<br>";
echo "1" <=> "1"; // 0
print "<br>";
echo "1" <=> "2"; // -1
print "<br>";
echo "2" <=> "1"; // 1
?>