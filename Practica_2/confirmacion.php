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
<?php
//Mediante el metodo POST se le asigna el nombre de el valor de la etiqueta de el campo del formulario
$nombre=$_POST['nombre'];//Esta variable nombre se le asigna el valor de la etiqueta de nombre del formulario
$apellido = $_POST['apellido'];//Esta variable apellido se le asigna el valor de la etiqueta de apellido del formulario
$genero = $_POST['genero'];//Esta variable genero se le asigna el valor de la etiqueta de genero del formulario

//Esta condición es para verificar si no hay campos vacios
if($nombre==null|| $apellido==null || $genero==null){
	echo "<center><b>Los datos no estan llenos</b></center>";
}else{
	$query = "INSERT INTO `datos` (Nombre,Apellido,Genero) VALUES ('$nombre', '$apellido','$genero')";//Aqui se hace que consulta se quiere realizar que es la de Insert Into para insertar los datos en la tabla
	$resultado = mysqli_query($connection, $query);//Aqui se hace la consulta llamando los parametros de la conexión y la consulta
	echo "<center><b>Registro Exitoso</b></center>";
}
echo"<p><a href='Llenar_Formulario.html'>Regresar Formulario Formulario</a>";
echo"<p><a href='lista.php'>Ver Registros</a>";
?>