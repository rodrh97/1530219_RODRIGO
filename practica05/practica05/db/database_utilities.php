<?php
	require_once('database_credentials.php');
	//Se realiza la conexion a la base de datos, utilizando las constantes definidas en database_credentials.php
	function PDO() {
		$host = DB_HOST;
		$dbname = DB_DATABASE;
		$port = DB_PORT;
		$connStr =  "mysql:host={$host};dbname={$dbname};port={$port}";
		$db = array(
			PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES 'utf8'"
		);
	
		//Retorna un nuevo objeto de tipo PDO
		return new PDO($connStr, DB_USER, DB_PASSWORD, $db);
	}
	$conn = PDO();

	//Funcion que permite agregar un nuevo usuario a la base de datos, requiere nombre y correo.
	function add($nombre,$email){
		global $conn;
		$sql = "INSERT INTO user (nombre,email) VALUES ('$nombre','$email')";
		$query = $conn->prepare($sql);
		$query->execute();
	}
	//Funcion que permite actualizar los atributos de un usuario existente, requiere nombre, correo y su id.
	function update($id,$nombre,$email){
		global $conn;
		$sql = "UPDATE user SET nombre='$nombre', email='$email' where id=$id";
		$query = $conn->prepare($sql);
		$query->execute();
	}
	//Funcion que permite eliminar un usuario de la base de datos utilizando su id.
	function delete($id){
		global $conn;
		$sql = "DELETE FROM user where id=$id";
		$query = $conn->prepare($sql);
		$query->execute();
	}
	//Funcion que permite obtener todos los registros encontrados en la tabla usuarios de la base de datos.
	function get_all(){
		global $conn;
		$sql = 'SELECT * FROM user';	
		$query = $conn->prepare($sql);
		$query->execute();
		$r = array();
		while($r[] = $query->fetch(PDO::FETCH_ASSOC) );
		
		return $r;
	}
	//Funcion que permite realizar una busqueda de un usuario para obtener todos sus atributos mediante su id.
	function search($id){
		global $conn;
		$sql = "SELECT * FROM user where id=$id";
		$query = $conn->prepare($sql);
		$query->execute();
		$r = array();
		while($r[] = $query->fetch(PDO::FETCH_ASSOC) );
		return $r;
	}
?>