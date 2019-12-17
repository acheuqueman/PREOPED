<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

include_once '../modelo/ColeccionCarrera.php';
include_once '../modelo/Carrera.class.php';
$Coleccion = new ColeccionCarrera();
//var_dump($Coleccion->getColeccion());
?>

<?php foreach($Coleccion->getColeccion() as $Carr){ ?>
    <p><?= $Carr->getId()." ".$Carr->getNombre()?></p>
<?php 
}



