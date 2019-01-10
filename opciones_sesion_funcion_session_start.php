
<?php
// ahora acepta un arreglo de opciones que sobrescriben las directivas de configuracion de sesiones normales de php.ini

// alrededor de 40 parametros que se pueden manejar desde sssion_start

// ver cuales desde phpinfo()

session_start([
	'cache_limiter' => 'private',
	'read_and_close' => true,
]);


?>