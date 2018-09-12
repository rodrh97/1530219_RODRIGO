<?php
//Crea la conexión con una variable llamada conexión y llama a los parametros al puerto, el usuario de la base de datos y la contraseña de la base de datos
$connection = mysqli_connect('localhost', 'root', 'usbw');
if (!$connection){
    die("Fallo la conexion con la base de datos" . mysqli_error($connection));//Esta condicion es para verificar si la conexión se hizo correctamente o no
}
//En una variable seleccionar a la base de datos y llama a los parametros de conexion y el nombre de la base de datos
$select_db = mysqli_select_db($connection, 'base_datos');
if (!$select_db){
    die("Database seleccionada ha fallado" . mysqli_error($connection));//Esta condicion es para verificar si llamado a la base de datos se hizo correctamente o no
}
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php
	$id=$_REQUEST['Id'];//Esta variable Id se le asigna el valor que esta alamacenado en la base de datos de la tabla
    $sql="SELECT * from datos where Id='$id' ";//Aqui en una variable asignar la sentencia de Select para seleccionar los datos de la tabla
    $resultado=mysqli_query($connection,$sql);//Aqui se hace la consulta llamando los parametros de la conexión y la consulta
    $mostrar=mysqli_fetch_array($resultado);//Aqui recorre la tabla para mostrar un dato espeficio
                    
    ?>
<form action="modificar_datos.php?Id=<?php echo $mostrar['Id'];?>
" method="POST"><!-- Manda llamar el valor del Id -->

	<p><b>Nombre: </b> <input type="text" name="nombre" value="<?php echo $mostrar['Nombre'];?>"></p><!-- Manda llamar el valor del Nombre -->
	<p><b>Apellido: </b> <input type="text" name="apellido" value="<?php echo $mostrar['Apellido'];?>"></p><!-- Manda llamar el valor del Apellido -->
	<p><b>Genero: </b><select name="genero" class="form-control">
		<option value="Masculino">Masculino</option>
		<option value="Femenino">Femenino</option>
	</select></p>
	<button type="submit">Guardar</button>
	
</form>
<p><a href='lista.php'>Ver Registros</a></p>
</body>
</html>