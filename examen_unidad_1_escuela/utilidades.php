<?php
require 'conexion.php';

function agregar_alumno($matricula,$carrera,$alumno,$id_tutor){
	global pdo;
	sql=pdo('INSERT INTO alumno (matricula, carrera, nombre_alumno, id_tutor) VALUES ($matricula,$carrera,$alumno,$id_tutor)');
	stm=prepare(sql);
	return stm=excute();
}
function agregar_tutor($matricula,$carrera,$alumno){
	global pdo;
	sql=pdo('INSERT INTO tutor (matricula, carrera, nombre_alumno, id_tutor) VALUES ($num_empleado,$profesor,$alumno,$id_carrera)');
	stm=prepare(sql);
	return stm=excute();
}

function agregar_carrera($matricula,$carrera,$alumno){
	global pdo;
	sql=pdo('INSERT INTO alumno (matricula, carrera, nombre_alumno, id_tutor) VALUES ($matricula,$carrera,$alumno,$id_tutor)');
	stm=prepare(sql);
	return stm=excute();
}

?>