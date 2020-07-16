<?php
include_once '../lib/Constantes.Class.php';
include_once '../modelo/Alumno.class.php';
include_once '../modelo/AlumnoMapper.php';

$Mapper = new AlumnoMapper();
$Alumno = new Alumno($Mapper->findById($_GET['id']));
$Alumno->setDiagnosticos($Mapper->findDiagnosticos($Alumno->getId()));
$Alumno->setCarreras($Mapper->findCarreras($Alumno->getId()));
$Alumno->setFamiliares($Mapper->findFamiliares($Alumno->getId()));
?>

<html>
    <head>
        <?php // include_once '../lib/includesCss.php'; ?>
        <?php // include_once '../lib/includesJs.php'; ?>
        <title><?= Constantes::NOMBRE_SISTEMA; ?> - Gesti&oacute;n de Alumnos</title>
    </head>
    <body>
        <h4>Datos del Alumno</h4><br>
        <img src="../lib/Logo_Cuadrado.png" style="border: none; margin-right: 20px" width="100"> <br>                           
        <h5>Datos Personales</h5>
        <h6>Nombre Completo</h6>
        <p><?= $Alumno->getNombre(); ?><p>
        <h6>Ano de Ingreso</h6>
        <p><?= $Alumno->getAnio_Ingreso(); ?><p>
        <h6>DNI</h6>
        <p><?= $Alumno->getDni(); ?><p>
        <h6>CUD</h6>
        <p><?= $Alumno->getCud(); ?><p>
    </body>
        
</html>

