<?php
$link='mysql:host=localhost;dbname=yt_colores';
$usuario='root';
$pass='usbw';

try{
	$pdo=new PDO($link,$usuario,$pass);
	echo 'Conectado';

}catch (PDOException $e) {
    print "¡Error!: " . $e->getMessage() . "<br/>";
    die();
}