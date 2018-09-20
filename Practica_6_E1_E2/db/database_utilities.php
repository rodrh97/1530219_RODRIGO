<?php
	include_once('connection.php');
	//EJERCICIO 2
	//Funcion que permite añadir a un nuevo usuario
	function add($id,$nombre,$posicion,$carrera,$email,$id_type){
		global $pdo;
		$sql= $pdo->prepare("INSERT INTO sport_team(id,nombre,posicion,carrera,email,id_type)
					VALUES('$id', '$nombre', '$posicion', '$carrera', '$email', '$id_type')");
		return $sql->execute();
	}
	//Funcion que permite actualizar los atributos de un usuario existente.
	function update($id,$nombre,$posicion,$carrera,$email,$id_type){
		global $pdo;
		$sql=$pdo->prepare("UPDATE sport_team SET nombre=:nombre, posicion=:posicion, carrera=:carrera, email=:email where id=:id and id_type=:id_type");
		//Permite tomar todos los parametros para poder hacer el cambio
		$sql->bindParam(':nombre',$nombre);
		$sql->bindParam(':posicion',$posicion);
		$sql->bindParam(':carrera',$carrera);
		$sql->bindParam(':email',$email);
		$sql->bindParam(':id',$id);
		$sql->bindParam(':id_type',$id_type);
		$sql->execute();
	}
	//Funcion que permite eliminar un dato de la base de datos
	function delete($id){
		global $pdo;
		$sql = $pdo->prepare("DELETE FROM sport_team WHERE id = '$id'");
		return $sql->execute();
	}

	//Función para buscar por el id
	function search($id){
		global $pdo;
		$sql = $pdo->prepare("SELECT * FROM sport_team where id=:id");
		$sql->bindParam(':id',$id);
		$sql->execute();
		return $sql->fetch(PDO::FETCH_ASSOC);
	}


	//Función para obtener todos los datos de la tabla de sport_team
	function getAll(){
		global $pdo;
		$sentencia = $pdo->prepare('SELECT * FROM sport_team');
		$sentencia->execute();
		return $sentencia->fetchAll();
	}

	//EJERCICIO 1
	
	//Función de contador total de usuarios que hay en esa tabla
	function count_users(){
		global $pdo;
		$query="SELECT COUNT(*) AS total_users FROM user";
		$sql=$pdo->prepare($query);
		$sql->execute();
		$res=$sql->fetchAll();
		$usuarios_total=$res[0]['total_users'];
		return $usuarios_total;
	}
	//Función de impresión dinámica de las tablas de la base de datos
	function selectAllFromTable($t){
		global $pdo;
		$sql = $pdo->prepare('SELECT * FROM '.$t);
		$sql->execute();
		return $sql->fetchAll();
	}
	
	//Función de contador total de Tipos de usuarios de la base de datos
	function count_types(){
		global $pdo;
		$query="SELECT COUNT(*) AS total_type FROM user_type";
		$sql=$pdo->prepare($query);
		$sql->execute();
		$res=$sql->fetchAll();
		$tipos_total=$res[0]['total_type'];
		return $tipos_total;
	}
	//Función de contador total de estados en la base de datos
	function count_status(){
		global $pdo;
		$query="SELECT COUNT(*) AS total_status FROM status";
		$sql=$pdo->prepare($query);
		$sql->execute();
		$res=$sql->fetchAll();
		$status_total=$res[0]['total_status'];
		return $status_total;
	}
	//Función de contador total de accesos al sistema registrados en la base de datos 
	function count_access(){
		global $pdo;
		$sql="SELECT COUNT(*) AS total_access FROM user_log";
		$stmt=$pdo->prepare($sql);
		$stmt->execute();
		$res=$stmt->fetchAll();
		$acceso=$res[0]['total_access'];
		return $acceso;
	}
	//Función de contador total de usuarios activos en la base de datos
	function count_active(){
		global $pdo;
		$query="SELECT COUNT(*) AS total_active FROM user WHERE status_id=1";
		$sql=$pdo->prepare($query);
		$sql->execute();
		$res=$sql->fetchAll();
		$activos_total=$res[0]['total_active'];
		return $activos_total;
	}
	//Función de contador total de usuarios inactivos
	function count_inactive(){
		global $pdo;
		$query="SELECT COUNT(*) AS total_inactive FROM user WHERE status_id=2";
		$sql=$pdo->prepare($query);
		$sql->execute();
		$res=$sql->fetchAll();
		$inactivos_total=$res[0]['total_inactive'];
		return $inactivos_total;
	}
	//Función para agregar usuarios
	function add_user($email,$password,$status_id,$user_type_id){
		global $pdo;
		$sql= $pdo->prepare("INSERT INTO user(email,password,status_id,user_type_id)
					VALUES('$email','$password','$status_id','$user_type_id')");
		return $sql->execute();
	}
	//Función para logearte
	function login($email,$password){
		global $pdo;
		$sql= "SELECT email,password FROM user WHERE email=:email and password=:password";//Seleccionar el email y password
		$sentencia_select=$pdo->prepare($sql);
		$sentencia_select->bindParam(':email',$email);
		$sentencia_select->bindParam(':password',$password);
		$sentencia_select->execute();
		$conteo=$sentencia_select->rowCount();
		if($conteo>0){
				return true;
			}else{
				return false;
			}
	}
	//NO ME SALIO PORQUE TUVE ERRORES CON LA FUNCION DATE
	function add_user_log($date_logged_in,$user_id){
		global $pdo;
		$sql_1="SELECT id from user where id=:user_id";
		$sentencia_select=$pdo->prepare($sql_1);
		$sentencia_select->bindParam(':id',$user_id);
		$sentencia_select->execute();
		$sql_2= $pdo->prepare("INSERT INTO user_log(date_logged_in,user_id)
					VALUES('$date_logged','$sentencia_select')");
		return $sql_2->execute();
	}

?>