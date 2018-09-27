<?php
require 'utilidades.php';
$num_empleado=$_POST('id_empleado');
$profesor=$_POST('profesor');
$id_carrera=$_POST('id_carrera')
if (isset($id_empleado) && isset($profesor) && isset($id_carrera)) {
	agregar_tutor($num_empleado,$profesor,$id_carrera);
}
?>