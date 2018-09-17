<?php
	require_once('database_credentials.php');
	final class Funciones extends Conexion{
		//Se realiza la conexion a la base de datos, utilizando las constantes definidas en database_credentials.php
	$conn= new PDO(self::$gestor.':host='.self::$servidor.';dbname='.self::$db.';port='.self::$puerto, self::$usuario, self::$contra);

	//Funcion que permite agregar un nuevo usuario a la base de datos, requiere nombre y correo.
	function add($nombre,$email){
		global $conn;
		$sql = "INSERT INTO user (nombre,email) VALUES ('$nombre','$email')";
		$conn=$this->conn->prepare($sql);
		$conn->execute();
	}

	//Funcion que permite actualizar los atributos de un usuario existente, requiere nombre, correo y su id.
	function update($id,$nombre,$email){
		global $conn;
		$sql = "UPDATE user SET nombre='$nombre', email='$email' where id=$id";
		$conn=$this->conn->prepare($sql);
		$conn->execute();
	}

	//Funcion que permite eliminar un usuario de la base de datos utilizando su id.
	function delete($id){
		global $conn;
		$sql = "DELETE FROM user where id=$id";
		$conn=$this->conn->prepare($sql);
		$conn->execute();
	}

	//Funcion que permite obtener todos los registros encontrados en la tabla usuarios de la base de datos.
	/*function get_all(){
		global $conn;
		$sql = 'SELECT * FROM user';
		$r = $conn->query($sql);
		if($r->num_rows)
			return $r;
		return [];
	}

	//Funcion que permite realizar una busqueda de un usuario para obtener todos sus atributos mediante su id.
	function search($id){
		global $conn;
		$sql = "SELECT * FROM user where id=$id";
		$r = $conn->query($sql);
		if($r->num_rows)
			return mysqli_fetch_assoc($r);
		return [];
	}
		*/
	}
?>