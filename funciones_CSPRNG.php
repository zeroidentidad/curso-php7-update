<!DOCTYPE html>
<html>
<head>
	<title>Funciones matemáticas | Funciones CSPRNG</title>
	<meta charset="utf-8">
</head>
<body>
<?php 

// Version php7

//CSPRNG: Cryptographically Secure PseudoRandom Number Generator

// Se han añadido 2 nuevas funciones para generar nuemros enteros y cadenas de caracteres criptograficamente seguros de una forma multiplataforma: random_bytes() y random_int() 

$bytes = random_bytes(10);
print bin2hex($bytes); // de binario a hexadecimal
print "<hr>";
print random_int(0, 1024);
print "<hr>";
print random_int(-1024, 1024);

?>
</body>
</html>