<?php
class MvcController{
	//Llamar a la plantilla
	public function plantilla(){
		//Include se utiliza para invocar el archivo que contiene el codigo HTML
		include "views/template.php";

	}

	//Interacción con el usuario
	public function enlacesPaginasController(){
		//Trabajar con los enlaces de la páginas
		//Validamos si la variable "action" viene vacía, es decir, cuando se abre la pagina por primera vez se debe cargar la vista index.php
		if (isset( $_GET["action"])) {
			//Guardar elo valor de la variable action en "views/modules/navegacion.php" en el cual se recibe mediante metodo GET esa variable
			$enlacesController=$_GET["action"];
		}else{
			//Si viene vacío inicializo con index
			$enlacesController="index";		
		}
		//Mostrar los archivos de los enlaces de cada una de las secciones:Inicio, nosotros,etc.
		//Para esto hay que mandar al modelo para que haga dicho proceso y muestre la información
		$respuesta=EnlacesPaginas::enlacesPaginasModel($enlacesController);
		include $respuesta;
	}
}
?>