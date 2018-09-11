<?php
class Conexion{
    
    //inicar funcion de conexion
    public function conectar(){
        //Configurar Variables dependiendo del servidor:
    $host="localhost";
    $db="pos";
    $userdb="root";
    $userpw="";



        $link = new PDO("mysql:host=$host;dbname=$db",
                        "$userdb",
                       "$userpw");
        $link->exec("set names utf8");
        return $link;
    }
}