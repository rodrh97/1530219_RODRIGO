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
$id=$_REQUEST['Id'];//Esta variable Id se le asigna el valor que esta alamacenado en la base de datos de la tabla
$query="DELETE FROM datos WHERE Id='$id' ";//Aqui se hace que consulta se quiere realizar que es la de Delete para borrar los datos en la tabla
$resultado=mysqli_query($connection, $query);//Aqui se hace la consulta llamando los parametros de la conexión y la consulta
if($resultado){
	header("Location: lista.php");//Esta condición manda a llamar a la pagina donde estan los datos registrados y verificar que se actulizo ese dato especifico
}
?>