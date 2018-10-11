<?php
require_once("conexion.php");

class Datos extends Conexion{

    
    public function obtenerDatosAlumnosModel(){
        
        $stmt = Conexion::conectar()->prepare("SELECT * FROM alumnos");
        $stmt->execute();
        $r = array();
        $r = $stmt->FetchAll();
        
        return $r;
    }

    public function guardarDatosUsuarioModel($datosAlumno, $tabla){


        $stmt = Conexion::conectar()->prepare("INSERT INTO $tabla(matricula, nombre, carrera, situacion, correo, tutor, foto) VALUES(:matricula, :nombre, :carrera, :situacion, :correo, :tutor, :foto) ");

        $stmt->bindParam(":matricula", $datosAlumno["matricula"] , PDO::PARAM_STR);
        $stmt->bindParam(":nombre", $datosAlumno["nombre"], PDO::PARAM_STR);
        $stmt->bindParam(":carrera", $datosAlumno["carrera"], PDO::PARAM_STR);
        $stmt->bindParam(":situacion", $datosAlumno["situacion"], PDO::PARAM_STR);
        $stmt->bindParam(":correo", $datosAlumno["correo"], PDO::PARAM_STR);
        $stmt->bindParam(":tutor", $datosAlumno["tutor"], PDO::PARAM_STR);
        $stmt->bindParam(":foto", $datosAlumno["foto"], PDO::PARAM_STR);


        if($stmt->execute()){
            return "success";
        }else{
            return "error";
        }

    }

    public function eliminarDatosAlumnoModel($matricula, $tabla){

        $stmt = Conexion::conectar()->prepare("DELETE FROM $tabla WHERE matricula = :matricula ");

        $stmt->bindParam(":matricula", $matricula , PDO::PARAM_STR);

        if($stmt->execute() ){
            return "success";
        }else{
            return "error";
        }

    }

    public function editarDatosAlumnoModel($datosAlumno, $tabla){
        //Una consulta para actualizar los datos del usuario que quiere editar y pasar los datos a la caja de texto a la pagina editar.php
        $stmt = Conexion::conectar()->prepare("UPDATE $tabla SET matricula = :matricula, password = :password, email = :email WHERE id = :id ");
        $stmt->bindParam(":matricula", $datosAlumno["matricula"] , PDO::PARAM_STR);
        $stmt->bindParam(":nombre", $datosAlumno["nombre"], PDO::PARAM_STR);
        $stmt->bindParam(":carrera", $datosAlumno["carrera"], PDO::PARAM_INT);
        $stmt->bindParam(":situacion", $datosAlumno["situacion"], PDO::PARAM_STR);
        $stmt->bindParam(":correo", $datosAlumno["correo"], PDO::PARAM_STR);
        $stmt->bindParam(":tutor", $datosAlumno["tutor"], PDO::PARAM_INT);
        $stmt->bindParam(":foto", $datosAlumno["foto"], PDO::PARAM_STR);
        $editar = $stmt->rowCount();
        return $editar;
    }
    
}
?>