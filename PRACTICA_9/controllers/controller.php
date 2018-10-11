<?php
class NewController{ 
    //Llamar a la plantilla
    public function cargarTemplate(){
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
        $respuesta = model::enlacesPaginasModel($enlaces);
        include $respuesta;
    }

  
    public function obtenerDatosAlumnos(){
        $datosDeAlumnos = array();
        $datosDeAlumnos = Datos::obtenerDatosAlumnosModel();
        return $datosDeAlumnos;
    }

    public function guardarDatosAlumno(){

        //$tmp_name = $_FILES[$nombre_fichero]['tmp_name'];

        $nombreArchivo = basename($_FILES['fotoAlumno']['name']);
        
        $directorio = "./fotos/". $nombreArchivo;

        $extension = pathinfo($directorio , PATHINFO_EXTENSION);

        $datosAlumno = array('matricula' => $_POST['matriculaAlumno'],
                            'nombre' => $_POST['nombreAlumno'],
                            'carrera' => $_POST['carreraAlumno'],
                            'situacion' => $_POST['situacionAlumno'],
                            'correo' => $_POST['correoAlumno'],
                            'tutor' => $_POST['tutorAlumno'],
                            'foto' => $_POST['matriculaAlumno'].'.'.$extension ); 


        if($extension != 'png' && $extension != 'jpg' && $extension != 'PNG' && $extension != 'JPG'){
            echo '<script> alert("Error al subir el archivo intenta con otro") </sript>';
        }else{

            move_uploaded_file($_FILES['foto']['tmp_name'], "./fotos/".$_POST['matriculaAlumno'] . '.' . $extension);
            $respuesta = Datos::guardarDatosUsuarioModel($datosAlumno, "alumnos");

            if($respuesta == "success"){
                echo '<script> 
                            alert("Datos guardados correctamente");
                            window.location.href = "index.php"; 
                      </script>';
                header('location: index.php');
            }else{
                echo '<script> alert("Error al guardar") </script>';
            }
        }
    }

    public function eliminarAlumno(){

        $matriculaAlumno = $_GET['id'];
        
        $respuesta = Datos::eliminarDatosAlumnoModel($matriculaAlumno, "alumnos");


        if($respuesta == "success"){
            header("location:index.php?action=alumnos");
        }else{
            echo '<script> alert("Error al eliminar") </script>';
        }

    }

    public function editarAlumno(){
        if( isset($_POST["matriculaAlumno"]) ){
            $nombreArchivo = basename($_FILES['fotoAlumno']['name']);

            $directorio = './fotos/' . $nombreArchivo;

            $extension = pathinfo($directorio , PATHINFO_EXTENSION);

            //Un array para conseguir los datos del usuario del archivo editar.php
            $datosAlumno = array('matricula' => $_POST['matriculaAlumno'],
                            'nombre' => $_POST['nombreAlumno'],
                            'carrera' => $_POST['carreraAlumno'],
                            'situacion' => $_POST['situacionAlumno'],
                            'correo' => $_POST['correoAlumno'],
                            'tutor' => $_POST['tutorAlumno'],
                            'foto' => $_POST['matriculaAlumno'].'.'.$extension );
            
            $respuesta = Datos::editarDatosAlumnoModel($datosAlumno, "alumnos");//Manda los datos al crud para que haga la actualización

            if( $respuesta >= 1 ){
                header("location:index.php?action=alumnos");//Cuando se actualice los datos del usuario lo manda de regreso a la pagina de usuarios.php
            }else{
                
                echo 'No actualizaste datos';//Si no que los actualice sus datos por favor
            }
        }
    }
}

  
?>