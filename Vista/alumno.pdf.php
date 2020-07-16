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
    <body style="line-height: 10px">
        <h4>Datos del Alumno</h4><br>
        <img src="../lib/Logo_Cuadrado.png" style="border: none; margin-right: 20px" width="100"> <br>                           
        <h5>Datos Personales</h5>
        <h6>Nombre Completo</h6>
        <p><?= $Alumno->getNombre(); ?><p>
        <h6>A&ntilde;o de ingreso</h6>
        <p><?= $Alumno->getAnio_Ingreso(); ?><p>
        <h6>DNI</h6>
        <p><?= $Alumno->getDni(); ?><p>
        <h6>CUD</h6>
        <p><?= $Alumno->getCud(); ?><p>
        <hr />    
        <h5>Datos de Contacto</h5>
        <h6>Correo electr&oacute;nico</h6>
        <p><?= $Alumno->getEmail(); ?><p>
        <h6>N&uacute;mero de tel&eacute;fono</h6>
        <p><?= $Alumno->getTelefono(); ?><p>
        <hr />   
        <h5>Diagnosticos</h5>
        <?php if ($Alumno->getDiagnosticos()) { ?>
            <table>
                <?php foreach ($Alumno->getDiagnosticos() as $Diagnostico) { ?>
                    <tr>
                        <td><?= $Diagnostico->getDiagnostico(); ?></td>
                        <td><?= $Diagnostico->getProfesional_diagnostico(); ?></td>

                    </tr>
                <?php } ?>
            </table>
        <?php } ?>
        <hr/>
        <h5>Grupo Familiar</h5>
        <?php if ($Alumno->getFamiliares()) { ?>
            <table>
                <?php foreach ($Alumno->getFamiliares() as $Familiar) { ?>
                    <tr>
                        <td><?= $Familiar->getNombre(); ?></td>
                        <td><?= $Familiar->getParentesco(); ?></td>
                    </tr>
                <?php } ?>
            </table>
        <?php } ?>
        <hr/>
        <h5>Carreras</h5>
        <?php if ($Alumno->getCarreras()) { ?>
            <table>
                <?php foreach ($Alumno->getFamiliares() as $Familiar) { ?>
                    <tr>
                        <td><?= $Carrera->getNombreCarrera(); ?></td>
                    </tr>
                <?php } ?>
            </table>
        <?php } ?>
        <hr/>
        <h5>Entrevistas</h5>

    </body>

</html>

