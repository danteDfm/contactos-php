<?php 


function delete (){


    $id = isset($_GET['id']) ? $_GET['id'] : false;
    if ($id==false){
        header('Location: ../vista/form.css');
        echo "hola";
    }
    else{

        require('../instancias/objConnect.php');
        $objDelete = $objPDO;

        $query=('DELETE FROM contactos WHERE id_contactos = :id');

        $consult=$objDelete->prepare($query);

        $consult->bindValue(":id", $id);
        $consult->execute();

        header('Location: ../vista/form.php');

    }

}

delete();