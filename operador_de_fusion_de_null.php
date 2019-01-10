<?php

$nombre_usuario = $_GET['usuario']??'nadie'; // forma normnal php7
$nombre_usuario = isset($_GET['usuario'])?$_GET['usuario']:'nadie'; // forma version anterior equivalente
$nombre_usuario = $_GET['usuario']??$_POST['usuario']??'nadie'; // forma concatenada php7

print $nombre_usuario;

?>