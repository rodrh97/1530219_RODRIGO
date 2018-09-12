<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php
/*Clase que representa un objeto donde se encuentran dos array numericos de dimension 25 los cuales uno tiene valores almacenados y el otro genera la serie fibonacci*/
class array_num{
	public $array;//original
	public $array_fibonacci;//con serie

	//Constructor que inicializa los arreglos
	function __construct(){
		$this->array=array(0,1,1,3,5,2,7,1,34,6,64,2,13,6,74,2,31,231,3,2,61,21,3,123,53,2331);
		$this->array_fibonacci=[];
		for ($i=0; $i < 25; $i++) { 
			$this->array_fibonacci[$i]=0;
		}
	}

	//funcion que permite generar la serie fibonacci dependiendiendo de los valores del primer array
	function hacer_fibonacci(){
		$this->array_fibonacci=[];
		$this->array_fibonacci[0]=$this->array[0];
		$this->array_fibonacci[1]=$this->array[1];
		for ($i=2; $i <25 ; $i++) { 
			$this->array_fibonacci[$i]=$this->array_fibonacci[$i-1]+$this->array_fibonacci[$i-2];
		}
	}

	//función que permite imprimir los dos arreglos
	function imprimir(){
		echo"<br><strong>Array sin Modificar</strong><br><br>";
		for ($i=1; $i <25 ; $i++) { 
			if ($i<24) {
				echo ($this->array[$i].",");
			}else{
				echo($this->array[$i].".<br><br>");
			}
		}
		echo"<br><strong>Array con serie Fibonacci</strong><br><br>";
		for ($i=1; $i <25 ; $i++) { 
			if ($i<24) {
				echo ($this->array_fibonacci[$i].",");
			}else{
				echo($this->array_fibonacci[$i].".<br><br>");
			}
		}

	}
}

//Nuevo objeto de tipo array_num representa los dos arreglos:
$a=new array_num();

//Generar la serie fibonacci
$a->hacer_fibonacci();

//Imprimir arreglos
$a->imprimir();
?>
</body>
</html>