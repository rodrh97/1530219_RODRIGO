<?php
	//El index que muestra al usuario de las vistas a través de el enviaremos las diferentes acciones del  usuario al controlador

	//Mostrar la plantilla usuario (template.php) la cual se alojara en views
	require_once "controllers/controller.php";

	//Invocamos el modelo que se utilizará en todos los archivos
	require_once "models/model.php";

	//Para poder ver el template o plantilla se hace una petición mediante a un controlador
	//Crear el objeto:
	$mvc= new MvcController();

	//Muestra la función plantilla que se encuentra en controllers/controller
	$mvc->plantilla();

?>