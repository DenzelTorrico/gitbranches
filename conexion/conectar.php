<?php

    class productos{
        private $base;

        public function __construct(){
            try{
                $this->base = new PDO("mysql:host=localhost;dbname=sistema_almacen;charset=utf8","root","");
                $this->base->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
                
            }catch(Exception $e){
                echo $e->getMessage();    
            }
        }
        public function mostrar(){
            $sql = "select * from producto";
            $query = $this->base->query($sql);
            return $query->fetchAll(PDO::FETCH_ASSOC);
        }
    }


?>