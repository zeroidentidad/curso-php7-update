<!DOCTYPE html>
<html>
<head>
	<title>Funciones | Generadores delegados</title>
	<meta charset="utf-8">
</head>
<body>
<?php

// Los generadoes ahora pueden delegar a otro generador de forma muy sencilla por medio de la construccion "yield from"

// exclusivo de php7

function gen(){
	yield 1;
	yield 2;
	yield from gen2();
}

function gen2(){
	yield 3;
	yield 4;
}

foreach (gen() as $val) {
	print $val." ";
}

print "<hr>";

function americaNorte(){
	yield "Canada";
	yield "Mexico";
}

function americaCentral(){
	yield "Costa Rica";
	yield "Honduras";
}

function americaSur(){
	yield "Colombia";
	yield "Peru";
}

function capitalesAmerica(){
	yield from americaNorte();
	yield from americaCentral();
	yield from americaSur();
}

foreach (capitalesAmerica() as $val) {
	print $val."<br>";
}

print "<hr>";

?>
</body>
</html>