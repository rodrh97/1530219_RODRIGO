<?php
require 'utilidades.php';
$matricula=$_POST('matricula');
$carrera=$_POST('carrera');
$alumno=$_POST('alumno')
$id_tutor=$_POST('id_tutor')
if (isset($matricula) && isset($carrera) && isset($alumno) && isset($id_tutor)) {
	agregar_alumno($matricula,$carrera,$alumno,$id_tutor);
}
?>