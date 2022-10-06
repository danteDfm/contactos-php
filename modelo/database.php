<?php 

class connecting{

    public function connection(){

        require('../configuraciones/config.php');


         try{

            $obj = new PDO($host, $user, $password);
            $obj->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            $objConnect = $obj;
            return $objConnect;

         }
         catch(PDOException $e){

            echo "fallo de conexion ". $e->getMessage();

         }


    }



}


