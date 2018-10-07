<?php
require_once("conexion.php");
class Datos extends Conexion{
        
    //Registro de usuarios
    public function registroUsuarioModel($datosModel, $tabla){
        //Llama la conexión y hace la inserción de los datos y cada stmt para llenar los datos a la tabla usuarios
        $stmt = Conexion::conectar()->prepare("INSERT INTO $tabla(usuario, password, email) VALUES(:usuario, :password, :email) ");
        
        $stmt->bindParam(":usuario", $datosModel["usuario"] , PDO::PARAM_STR);
        $stmt->bindParam(":password", $datosModel["password"], PDO::PARAM_STR);
        $stmt->bindParam(":email", $datosModel["email"], PDO::PARAM_STR);
        if($stmt->execute()){
            return "success";
        }else{
            return "error";
        }
        $stmt->close();
    }
    //Ingresar usuario
    public function ingresarUsuario($datosModel, $tabla){
        //Llama la conexión y consigue los datos y cada stmt para poder iniciar la sesión
        $stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla WHERE usuario = :usuario AND password = :password");
        $stmt->bindParam(":usuario", $datosModel["usuario"], PDO::PARAM_STR);
        $stmt->bindParam(":password", $datosModel['password'], PDO::PARAM_STR);
        $stmt->execute();
        $respuesta = array();
        $respuesta = $stmt->fetch(PDO::FETCH_ASSOC);
        return $respuesta;
        
    }
    //Función que devuelve el password del usuario
    public function passwordDeUsuario($id, $tabla){
        //Hace la consulta de un Select para seleccionar el password para el momento de eliminar un usuario con el id del usuario que inicio sesión
        $stmt = Conexion::conectar()->prepare("SELECT password FROM $tabla WHERE id = :id");
        $stmt->bindParam(":id", $id, PDO::PARAM_INT);
        $stmt->execute();
        $respuesta = array();
        $respuesta = $stmt->fetch(PDO::FETCH_ASSOC);
        return $respuesta;
    }
    //Obtener los datos de la tabla
    public function obtenerDatos($tabla){
        //La consulta Select selecciona los datos de la tabla de los usuarios
        $stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla");
        $stmt->execute();
        $respuesta = array();
        $respuesta = $stmt->FetchAll();
        
        return $respuesta;
    }
    //Traer los datos de un usuario en especifico pasandole el id
    public function obtenerDatosDeUsuario($id, $tabla){
    //Esta consulta sirve para obtener los datos del id que va ingresar para ver la tabla de los "usuarios"
        $stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla WHERE id = :id");
        $stmt->bindParam(":id", $id , PDO::PARAM_STR);
        $stmt->execute();
        $respuesta = array();
        $respuesta = $stmt->FetchAll();
        
        return $respuesta;
    }
    //Actualizar los datos del usuario
    public function actualizarDatos($datosModel, $tabla){
        //Una consulta para actualizar los datos del usuario que quiere editar y pasar los datos a la caja de texto a la pagina editar.php
        $stmt = Conexion::conectar()->prepare("UPDATE $tabla SET usuario = :usuario, password = :password, email = :email WHERE id = :id ");
        $stmt->bindParam(":usuario", $datosModel["usuario"], PDO::PARAM_STR);
        $stmt->bindParam(":password", $datosModel["password"], PDO::PARAM_STR);
        $stmt->bindParam(":email", $datosModel["email"], PDO::PARAM_STR);
        $stmt->bindParam(":id", $datosModel["id"], PDO::PARAM_INT);
        $stmt->execute();
        $actualizar = $stmt->rowCount();
        return $actualizar;
    }
    //Eliminar datos del usuario
    public function eliminarDatos($idUsuario, $tabla){
        //Una consulta para eliminar a un usuario especifico mediante el id y pasar los datos para poder eliminar un usuario
        $stmt = Conexion::conectar()->prepare("DELETE FROM $tabla WHERE id = :id");
        $stmt->bindParam(":id", $idUsuario, PDO::PARAM_INT);
        $stmt->execute();
        $actualizar = $stmt->rowCount();
        return $actualizar;
    }
}
?>