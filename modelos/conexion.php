<?php 
    class Conexion{
        static public function conectar(){
            $link = new PDO("mysql:host=localhost;port=3333;dbname=4c-aws-wedding", "soporte4caws", "soporte4caws");
    
            $link->exec("set names utf8");
    
            return $link;
        }
    }
    
