<!DOCTYPE html>
<html>
<head>
	<title>intdiv() | fmod()</title>
</head>
<body>
<?php

// por medio de la funcion intdiv() de php7 podemos realizar una division y regresar la parte entera de la misma

// con la funcion fmod() regresamos la parte decimal de una dvision

print intdiv(3, 2)."<br>"; // se deben enviar numeros enteros
print intdiv(35, 7)."<br>";
print intdiv(75, 2)."<br>";

print "<hr>";

print fmod(5.7, 1.3);
//4.3846153846
// hace: 4*1.3 = 5.2 (5.7-5.2) => 0.5

?>
</body>
</html>
