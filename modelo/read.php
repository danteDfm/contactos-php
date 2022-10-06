<?php

class reading{

    public $objRead;

    public function readCon(){

        require('../instancias/objConnect.php');
        $this->objRead = $objPDO;
     

    }


    public function read(){

        $query = "SELECT * FROM contactos";
        $consult=$this->objRead->query($query);
        $consult->execute();
        return $consult;


    }


}


