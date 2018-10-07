<?php 

class EnlacesPaginas{
	//una función con el parametro $enlacesModel que recibe a traves del controlador
	public function enlacesPaginasModel($enlacesModel){
		//validamos
		if ($enlacesModel=="nosotros" ||$enlacesModel=="servicios" || $enlacesModel=="contacto"){
			//mostramos el URL concatenado $enlacesModel
			$module="views/modules/".$enlacesModel.".php";
		}
		//una vez "action" viene vacio (validado en el controlador) entonces se consulta si la variable $enlacesModel es igual a la cadena "index" para de ser asi muestre index.php
		else if ($enlacesModel=="index") {
			$module="views/modules/inicio.php";
		}
		//Validar una lista blanca
		else{
			$module="views/modules/inicio.php";
		}
		return $module;
	}
}

?>