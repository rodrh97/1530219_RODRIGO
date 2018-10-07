<?php
class MvcController{ 
    //Llamar a la plantilla
    public function pagina(){
        //Include se utiliza para invocar el arhivo que contiene el codigo HTML
        include "views/template.php";
    }
    //Interacción con el usuario
    public function enlacesPaginasController(){
        //Trabajar con los enlaces de las páginas
        //Validamos si la variable "action" viene vacia, es decir cuando se abre la pagina por primera vez se debe cargar la vista index.php
        if(isset($_GET['action'])){
            //guardar el valor de la variable action en views/modules/navegacion.php en el cual se recibe mediante el metodo get esa variable
            $enlaces = $_GET['action'];
        }else{
            //Si viene vacio inicializo con index
            $enlaces = "index";
        }
        //Mostrar los archivos de los enlaces de cada una de las secciones: inicio, nosotros, etc.
        //Para esto hay que mandar al modelo para que haga dicho proceso y muestre la informacions
        $respuesta = Paginas::enlacesPaginasModel($enlaces);
        include $respuesta;
    }
    public function registroUsuarioController(){
        if(isset($_POST["usuarioRegistro"])){
            //Recibe a traves del metodo POST el name (html) de usuario, password y email, se almacenan los datos en una variable de tipo array con sus respectivas propiedades (usuario, password y email)
            $datosController = array("usuario" => $_POST["usuarioRegistro"],
                                     "password" => $_POST["passwordRegistro"],
                                     "email" => $_POST["emailRegistro"]);
            
            //Se le dice al modelo models/crud.php (Datos::registroUsuarioModel), que en la clase "Datos" la funcion "registrousuariomodel" reciba en sus dos parametros los valores $datosController y el nombre de la tabla a conectarnos la cual es "usuarios"
            $respuesta = Datos::registroUsuarioModel($datosController, "usuarios");
            //Se imprime la respuesta en la vista
            if($respuesta == "success"){
                header("location:index.php?action=ok");
            }
            else{
                header("loaction:index.php");
            }
        }
    }
    //Funcion para ingresar y ver los datos de la tabla "usuarios"
    public function ingresarUsuario(){
        if(isset($_POST["usuarioIngresar"]) ){
            //Un array para conseguir los datos que manda ingresar.php
            $datosController = array("usuario" => $_POST['usuarioIngresar'],
                                     "password" => $_POST['passwordIngresar']);
            
            $respuesta = Datos::ingresarUsuario($datosController, "usuarios");//Mandar los datos al crud para que valide que si existe el usuario para que ingrese a la tabla
            
            if( $respuesta ){
                session_start();//Inicia la sesión
                $_SESSION['iniciar'] = true;//Si inicio bien la sesión 
                $_SESSION['id_usuario'] = $respuesta['id'];//Traer el id del usuario que va a entrar a sesion
                header("location:index.php?action=usuarios");//Se redirige a la pagina de usuarios
            }else{
                header("location:index.php?action=registro");//Si no cumple vuelve a la pagina de registro
            
            }
        }
    }
    //Funcion para traer los datos de la tabla de "usuarios" e imprimirlos
    public function obtenerUsuarios(){
        session_start();
        if( isset($_SESSION['iniciar']) ){
            $respuesta = Datos:: obtenerDatos("usuarios");//Mandar los datos al crud para que consiga la información de la tabla
            if($respuesta){
                return $respuesta;//Aqui regresa lo de la sentencia que le mandaron al crud
            }else{
                echo "No hay registros aun";//Todavia no hay registros
            }
        }else{
            echo 'Para ver los datos necesitas iniciar sesion';//Aqui no muestra los datos porque aun no ha iniciado sesion
            return [];//Muestra la tabla sin datos
        }
    }
    
    //Esta función sirve para obtener los datos del id que va ingresar para ver la tabla de los "usuarios" mediante el metodo GET
    public function obtenerDatosUsuario(){
        if(isset($_GET["id"])){
            $id_usuario = $_GET["id"];//Conseguir el id del usuario a ingresar

            $respuesta = Datos::obtenerDatosDeUsuario($id_usuario, "usuarios");//Aqui manda los datos al crud para que haga la funcion de obtenerDatosUsuario

            return $respuesta;//Manda la respuesta
        }
    }

    //Esta función sirve para actualizar los datos del usuario
    public function actualizarDatosUsuario(){
        if( isset($_POST["usuario"]) ){

            //Un array para conseguir los datos del usuario del archivo editar.php
            $datosUsuario = array("usuario" => $_POST["usuario"],
                                     "password" => $_POST["password"],
                                     "email" => $_POST["email"],
                                     "id" => $_GET["id"]);
            
            $respuesta = Datos::actualizarDatos($datosUsuario, "usuarios");//Manda los datos al crud para que haga la actualización

            if( $respuesta >= 1 ){
                header("location:index.php?action=usuarios");//Cuando se actualice los datos del usuario lo manda de regreso a la pagina de usuarios.php
            }else{
                
                echo 'No actualizaste datos';//Si no que los actualice sus datos por favor
            }
        }
    }

    //Esta función sirve para eliminar los datos de un usuario de la tabla "usuarios" mediante el metodo GET conseguir el id del usuario que esta ingresado actualmente
    public function eliminarDatosUsuario(){
        session_start();//Iniciar la sesion del usuario que esta ingresado
        $pass = Datos::passwordDeUsuario($_SESSION['id_usuario'], "usuarios");//Mandar los datos al crud para que obtenga el usuario que esta en sesión
        if($_POST['passwordEliminar'] == $pass['password'] ){
            if(isset($_GET["id"])){
                $datosUsuario = $_GET["id"];//Conseguir el id por el metodo GET
    
                $respuesta = Datos::eliminarDatos($datosUsuario, "usuarios");//Mandar los datos al crud para que haga lo de eliminar el usuario
    
                if( $respuesta >= 1 ){
    
                    header("location:index.php?action=usuarios");//Si lo elimino entonces que me mande a la pagina de usuarios.php
                }else{
                    echo 'La contraseña no es de esta sesión';//Si no que la contraseña no es la del usuario que esta en sesión
                }
    
            }
        }else{
            echo 'La contraseña no es la correcta';//Si no que la contraseña no es la correcta
        }
        
    }
}
?>