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
        <h7>Datos del Alumno</h7>
        <img src="../lib/manitos.png" style="background-color: snow; -webkit-border-radius: 50% !important; -moz-border-radius: 50% !important;  border-radius: 50% !important; border: none; margin-right: 20px" width="100" class="rounded float-left img-fluid img-thumbnail" alt="...">                            
        <h6>Datos Personales</h6>
        <h4>Nombre Completo</h4>
        <h2><?= $Alumno->getNombre(); ?></h2>
        <h4>Ano de Ingreso</h4>
        <h2><?= $Alumno->getAnio_Ingreso(); ?></h2>
        <h4>DNI</h4>
        <h2><?= $Alumno->getDni(); ?></h2>
        <h4>CUD</h4>
        <h2><?= $Alumno->getCud(); ?></h2>
    </body>
        
</html>

