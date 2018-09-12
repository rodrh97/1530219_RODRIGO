<?php
//Ejercicio 1
echo"<p><b>EJERCICIO 1: Ordenar un array ascendente y descendente.</b></p>";
$arreglonum=[12,45,10,8,3,10,129,50,12];//Declarar arreglo

echo"<p>";
echo"<b>Array sin ordenar: </b>";
print_r($arreglonum);//Imprime arreglo sin ordenar
echo"</p>";

echo"<p>";
echo"<b>Array de forma ascendente: </b>";
sort($arreglonum);//Funcion para ordenar de forma ascendente
print_r($arreglonum);//Imprime el arreglo
echo"</p>";

echo"<p>";
echo"<b>Array de forma descendente: </b>";
rsort($arreglonum);//Funcion para ordenar de forma ascendente
print_r($arreglonum);//Imprime el arreglo
echo"</p>";

echo"<br><p><b>EJERCICIO 2: Hacer un programa en PHP que escriba tu nombre (en negrita) y la ciudad dónde naciste.</b></p>";
echo "<p><b>Rodrigo Rojas Huerta</b> y nací en Ciudad Victoria</p>";//Poner las etiquetas de html en el echo

echo "<br><p><b>EJERCICIO 3: Llenar un array de 10 posiciones e imprimirlos en un ciclo for.</b></p>";
$arreglonum2=[];//Declarar el arreglo
$variable=10;//Una variable para asignar un valor en el arreglo

//Un ciclo para recorrer el arreglo
for ($i=0; $i < 10; $i++) { 
	$arreglonum2[$i]=$variable;//Asignar un valor al arreglo
	echo "$arreglonum2[$i]<br>";//Imprimir el valor del arreglo
	$variable=$variable-1;//Disminuir 1 a la variable
}

?>