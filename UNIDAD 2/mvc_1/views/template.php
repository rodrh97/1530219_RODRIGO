<!DOCTYPE html>
<html>
<head>
	<title>Plantilla</title>
	<style type="text/css">
		header{
			position: relative;
			margin: auto;
			text-align: center;
			padding: 5px;
		}
		nav{
			position: relative;
			margin: auto;
			width: 100%;
			height: auto;
			background: black;
		}
		nav ul{
			position: relative;
			margin: auto;
			width: 50%;
			text-align: center;
		}
		nav ul li{
			display: inline-block;
			width: 24%;
			line-height: 50px;
			list-style: none;
		}

		nav ul li a{
			color: white;
			text-decoration: none;
		}
		section{
			position: relative;
			padding: 20%;
		}
	</style>
</head>
<body>

	<header><h1>TAW - PHP MVC</h1></header>
	<?php
		//Muestra la navegación
		include('modules/navegacion.php');
	?>
	<section>
		<?php
		//Mostraremos un controlador que muestra la plantilla
		$mvc=new MvcController();

		//Mostramos la función
		$mvc->enlacesPaginasController();
	?>	
	</section>
	
</body>
</html>