<?php
include_once '../lib/Constantes.Class.php';
include_once '../modelo/Alumno.class.php';
include_once '../modelo/AlumnoMapper.php';
include_once '../modelo/EntrevistaMapper.php';
include_once '../modelo/Entrevista.class.php';

$Mapper = new AlumnoMapper();
$Alumno = new Alumno($Mapper->findById($_GET['id']));
$Alumno->setDiagnosticos($Mapper->findDiagnosticos($Alumno->getId()));
$Alumno->setCarreras($Mapper->findCarreras($Alumno->getId()));
$Alumno->setFamiliares($Mapper->findFamiliares($Alumno->getId()));
$Alumno->setEntrevistas($Mapper->findEntrevistas($Alumno->getId()));
?>

<html>
    <head>
        <?php // include_once '../lib/includesCss.php'; ?>
        <?php // include_once '../lib/includesJs.php'; ?>
        <title><?= Constantes::NOMBRE_SISTEMA; ?> - Gestion de Alumnos</title>
    </head>
    <body style="line-height: 5px">
        <h4>Datos del Alumno</h4><br>
        <img src="../lib/Logo_Cuadrado.png" style="border: none; margin-right: 5px;float:left" width="100"> <br>       
        <span style="display: block; float:right; margin-left:5px; padding: 0px; clear:both; ">
            <h5>Datos Personales</h5>
            <h6>Nombre Completo</h6>
            <p><?= $Alumno->getNombre(); ?><p>
            <h6>Año de ingreso</h6>
            <p><?= $Alumno->getAnio_Ingreso(); ?><p>
            <h6>DNI</h6>
            <p><?= $Alumno->getDni(); ?><p>
            <h6>CUD</h6>
            <p><?= $Alumno->getCud(); ?><p>
            <hr />    
            <h5>Datos de Contacto</h5>
            <h6>Correo Electronico</h6>
            <p><?= $Alumno->getEmail(); ?><p>
            <h6>Numero Telefonico</h6>
            <p><?= $Alumno->getTelefono(); ?><p>
            <hr />   
        </span>
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
                <?php foreach ($Alumno->getCarreras() as $Carrera) { ?>
                    <tr>
                        <td><?= $Carrera->getNombreCarrera(); ?></td>
                    </tr>
                <?php } ?>
            </table>
        <?php } ?>
        <hr/>
        <h5>Entrevistas</h5>
        <?php if ($Alumno->getEntrevistas())  ?>
        <table>
            <?php
            foreach ($Alumno->getEntrevistas() as $EntrevistaAlumno) {
                $Mapper = new EntrevistaMapper();
                $Entrevista = new Entrevista($Mapper->findById($EntrevistaAlumno->getId_entrevista()));
                $Entrevista->setEntrevistados($Mapper->findEntrevistados($Entrevista->getId()));
                $Entrevistados = $Entrevista->getEntrevistados();
                ?>
                <tr>
                    <td>Fecha: <?= $Entrevista->getFecha(); ?></td>
                </tr>
                <tr>
                    <td>Entrevistador: <?= $Entrevista->getEntrevistador(); ?></td>
                </tr>
                <tr>
                    <td>Entrevistados: <?php foreach ($Entrevistados as $entrevistado) { ?><?= $entrevistado->getNombre(); ?>, <?php } ?></td>
                </tr> 
                <tr>
                    <br><td><?= $Entrevista->getConclusiones(); ?></td>
                </tr>
            <?php } ?>
        </table>



    </body>

</html>

