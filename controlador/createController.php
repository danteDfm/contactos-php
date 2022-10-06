<?php
require('../modelo/create.php');

$nombre = isset($_POST['nombre']) ? $_POST['nombre'] : false;
$celular = isset($_POST['celular']) ? $_POST['celular'] : false;
$instagram = isset($_POST['instagram']) ? $_POST['instagram'] : false;
$facebook = isset($_POST['facebook']) ? $_POST['facebook'] : false;

if ($nombre == false){

    echo "no ingresado";

}
else{
    $objCreate = new creating;
    $objCreate->createCon();
    $objCreate->create($nombre, $celular, $instagram, $facebook);

header('Location: ../vista/form.php');
}