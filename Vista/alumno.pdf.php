<?php
include_once '../lib/ControlAcceso.Class.php';
ControlAcceso::requierePermiso(PermisosSistema::PERMISO_PERMISOS);
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
    </head>
    <body style="line-height: 5px">
            <img src="../lib/Logo_Cuadrado.png" style="display:inline-block; border: none; margin-right: 5px;float:left; margin-bottom: -20px" width="100">
                <br>
                <title><?= Constantes::NOMBRE_SISTEMA; ?> - Gestion de Alumnos</title> 
                <h3>Datos del Alumno</h3>
        <hr/>
            <h4>Datos Personales</h4>
            <h5>Nombre Completo: <span><?= $Alumno->getNombre(); ?></span></h5>
            
            <h5>Año de ingreso: <span><?= $Alumno->getAnio_Ingreso(); ?></span></h5>
            
            <h5>DNI: <span><?= $Alumno->getDni(); ?></span></h5>
            
            <h5>CUD: <span><?= $Alumno->getCud(); ?></span></h5>
            
            <hr />    
            <h4>Datos de Contacto</h4>
            <h5>Correo Electronico: <span><?= $Alumno->getEmail(); ?></span></h5>
            <h5>Numero Telefonico: <span><?= $Alumno->getTelefono(); ?></span> </h5>
            
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
                    <td><?= $Entrevista->getConclusiones(); ?></td>
                </tr>
            <?php } ?>
        </table>



    </body>

</html>

