<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

include_once '../modelo/ColeccionDiagnostico.php';
include_once '../modelo/Diagnostico.class.php';
$Coleccion = new ColeccionDiagnostico();
//var_dump($Coleccion->getColeccion());
?>

<?php foreach($Coleccion->getColeccion() as $Diag){ ?>
    <p><?= $Diag->getId()." ".$Diag->getDiagnostico()?></p>
<?php 
}



