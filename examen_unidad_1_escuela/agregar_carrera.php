<?php
require 'utilidades.php';
$nom_carrera=$_POST('nom_carrera');
if (isset($nom_carrera)) {
	agregar_carrera($nom_carrera);
}
?>