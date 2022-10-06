<?php

class creating{

    public $objCreated;

    public function createCon(){

        require('../instancias/objConnect.php');
        $this->objCreated = $objPDO;

    }


    public function create($nombre, $celular, $instagram, $facebook){

        $query = "INSERT INTO contactos (nombre, celular, instagram, facebook) VALUES (:n1, :n2, :n3, :n4)";

        $consult=$this->objCreated->prepare($query);

        $consult->bindValue(":n1", $nombre);
        $consult->bindValue(":n2", $celular);
        $consult->bindValue(":n3", $instagram);
        $consult->bindValue(":n4", $facebook);

        $consult->execute();
    
    }


}
