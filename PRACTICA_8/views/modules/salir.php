<?php
session_start();//Iniciar la sesión
if(isset($_SESSION['iniciar']) ){
    session_destroy();//Cerrar sesión
    header("location:index.php?action=ingresar");//Manda a la pagina ingresar.php
}else{
    echo 'Para salir necesitar iniciar sesion';//Si no inicio sesión no podra salir
}
?>