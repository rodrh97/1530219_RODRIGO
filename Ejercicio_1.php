<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<b><p><?php
/*Problema 1
Desarrollar un script en php o JavaScript básico en donde utilizando un array asociativo se guarde:

Persona 1: Nombre.
Persona 1: Nombre y Apellido.
Persona 2: Nombre y Apellido DE LA PERSONA 1.
*/
$nombre1="rodrigo";//Asignar a una variable el nombre
$apellido1=" rojas";//Asignar la segunda variable el apellido
$nombrecom1=$nombre1.$apellido1; //Asignar una tercer variable con los valores del nombre y el apellido

//Crear el arreglo asociativo
$arreglo_asoc1=array('Persona1_nombre'=> $nombre1,//Asignar la primer variable que es el nombre
                 'Persona1'=>$nombrecom1,//Asignar la tercer variable que es el nombre completo
                 'Persona2'=>$nombrecom1/*Asignar la tercer variable que es el nombre completo como en la Persona 1*/);
//Imprimir el arreglo
print_r($arreglo_asoc1);?></p></b>

<b><p>
	<?php
/*Problema 2
En otro array numérico almacenar 6 números y se imprima el que tiene el valor de 4.
*/

$arreglo_num=array(2,3,4,6,1,8);//Declarar el arreglo con seis numeros

//Crear un ciclo donde va recorrer el arreglo
for ($i=0; $i < 6; $i++) { 
	//Esta comparacion sirve para ver si en la posicion tal tiene el valor de cuatro
	if ($arreglo_num[$i]==4) {
		echo "Posicion $i :",$arreglo_num[$i];//Imprime el valor de cuatro
	}
}

?>
</p></b>
</body>
</html>