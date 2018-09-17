<?php
	abstract class Conexion{
		private static $gestor;
		private static $servidor;
		private static $usuario;
		private static $contra;
		private static $db;
		private static $puerto;
		public $conn;

		function __construct(){
			self::$gestor="mysql";
			self::$servidor="localhost";
			self::$usuario="root";
			self::$contra="usbw";
			self::$db="user";
			self::$puerto="8084";
		}

		function conectar(){
			try{
				$this->conn= new PDO(self::$gestor.':host='.self::$servidor.';dbname='.self::$db.';port='.self::$puerto, self::$usuario, self::$contra);
				return true;
			}catch(PDOException $e){
				return false;
			}
		}

		function __destruct(){
			unset($this);
			$this->conn=null;
		}
	}
?>
