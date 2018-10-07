<h3>Ingresar contraseña de esta sesión</h3>
<form method="POST">

    <label> Ingrese su contraseña: </label>
    <input type="password" name="passwordEliminar" >
    <input type="submit" value="Eliminar">

</form>

<?php
    if(isset($_POST['passwordEliminar'])){
    	//Enviar los datos a la clase del controlador para llamar a una función
        $datos = new MvcController();
        //Llama a la funcion de eliminar los datos del usuario
        $eliminar = $datos->eliminarDatosUsuario();
    }
    
?>