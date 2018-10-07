<!--Forumario donde se editaran los datos de un usuario previamente registrado-->
<h1>EDITAR DATOS DEL USUARIO</h1>

<?php
    $datoUsuario = array();//Hacer array para los datos
    $datos = new MvcController();//Llamar al controlador
    $datoUsuario = $datos->obtenerDatosUsuario();//Obtener los datos del usuario
?>

<!--Formulario para la edición de los datos del usuario-->
<form method="post">

    <input type="text" name="id" value="<?= $datoUsuario[0]['id'] ?>" disabled>

    <input type="text" placeholder="usuario" name="usuario" value="<?= $datoUsuario[0]['usuario'] ?>" required>

    <input type="password" placeholder="contraseña" name="password" value="<?= $datoUsuario[0]['password'] ?>" required>

    <input type="email" placeholder="email" name="email" value="<?= $datoUsuario[0]['email'] ?>" required>

    <input type="submit" value="Actualizar">

</form>

<?php
//Enviar los datos a la clase del controlador para llamar a una función
$actualizar = new MvcController();
//Llama a la funcion de actualizar los datos del usuario
$actualizar -> actualizarDatosUsuario();
?>