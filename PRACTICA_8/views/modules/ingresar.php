<!--Vista del formulario del login-->
<h1>Inicio de Sesion</h1>


<!--Formulario de del login-->
<form method="post">

    <input type="text" placeholder="Usuario" name="usuarioIngresar" required>

    <input type="password" placeholder="Contraseña" name="passwordIngresar" required>

    <input type="submit" value="Ingresar">

</form>

<?php
    //Instancia del objeto del controlador para hacer la validacion de los datos
    $ingresar = new MvcController();
    //Aqui sirve para entrar a la función "ingresarUsuario" del controlador.php
    $ingresar->ingresarUsuario();

    //Esta condición sirve para si la cuenta no es valida al ingresar
    if(isset($_GET['action'])){
        if($_GET['action'] == "fallo"){
            echo "Acceso denegado y utiliza otra cuenta";
        }
    }
?>