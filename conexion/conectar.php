<?php

    class productos{
        private static $base;

        public function __construct(){
            try{
                self::$base = new PDO("mysql:host=localhost;dbname=sistema_almacen;charset=utf8","root","");
                self::$base->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
                
            }catch(Exception $e){
                echo $e->getMessage();    
            }
        }
        public static function mostrar(){
            $sql = "select * from producto";
            $query = self::$base->query($sql);
            return $query->fetchAll(PDO::FETCH_ASSOC);
        }
    }


?>