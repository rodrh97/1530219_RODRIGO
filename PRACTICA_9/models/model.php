<?php
class model{
    //Una funcion con el parametro $enlacesModel que se recibe a traves del controlador
    public function enlacesPaginasModel($enlacesModel){
        //Validamos
        if($enlacesModel == "agregar_alumno" || $enlacesModel == "alumnos" || $enlacesModel == "editar_alumno" ){

            $module = "views/modules/".$enlacesModel.".php";
        }

        else if($enlacesModel == "index"){
            $module = "views/modules/alumnos.php";
        }
        
        else{
            $module = "views/modules/alumnos.php";
        }
        return $module;
    }
   
}
?>