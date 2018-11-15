<?php
//Clase que se conecta ala base de datos pasandole los datos de la especifica conexion 
//Vemos que esta conexion es atraves de un PDO para brindar mayor robustez y trabajar con el paradigma orientado a objetos
class Conexion{
    public function conectar(){
        $link = new PDO("mysql:host=localhost;dbname=escuela_prueba", "admin", "343c1c78286393abc99e44ae8bfd77d764218a6540750165");
        return $link;
    }
}
?>