<?php
	include_once('db/database_utilities.php');
	//Para encontrar el id que se quiere eliminar
	if(isset($_GET['id'])){
		delete($_GET['id']);
		header("location: index.php");
	}
?>
