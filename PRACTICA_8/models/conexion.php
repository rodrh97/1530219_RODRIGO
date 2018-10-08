<?php

class Conexion{

    public function conectar(){
        $link = new PDO("mysql:host=localhost;dbname=usuarios", "admin", "343c1c78286393abc99e44ae8bfd77d764218a6540750165");
        return $link;
    }

}