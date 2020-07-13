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
        <?php // include_once '../gui/navbar.php'; ?>

        <div class="container-fluid">

            <div class="row">

                <div class="col">

                    <div class="card">
                        <div class="card-header">
                            <h5><span class="oi oi-person"></span> Datos del Alumno</h5>
                        </div>
                        <div class="card-body">

                            <img src="../lib/manitos.png" style="background-color: snow; -webkit-border-radius: 50% !important; -moz-border-radius: 50% !important;  border-radius: 50% !important; border: none; margin-right: 20px" width="200" class="rounded float-left img-fluid img-thumbnail" alt="...">

                            <!-- Div Datos Personales -->
                            <div class="form-group">
                                <div class="form-row">
                                    <label for="nombre">Datos Personales</label> 
                                </div>
                                <div class="form-row">
                                    <div class="col-6">                                        
                                        <small id="nombreHelp" class="form-text text-muted">Nombre Completo</small>                   
                                        <p><?= $Alumno->getNombre(); ?></p>
                                    </div>
                                    <div class="col-2">                                        
                                        <small id="anio_ingresoHelp" class="form-text text-muted">A&ntilde;o de ingreso</small>                   
                                        <p><?= $Alumno->getAnio_Ingreso(); ?></p>
                                    </div>
                                    <div class="col-2">                                        
                                        <small id="dniHelp" class="form-text text-muted">DNI</small>                   
                                        <p><?= $Alumno->getDni(); ?></p>
                                    </div>
                                    <div class="col-2">                                        
                                        <small id="cudHelp" class="form-text text-muted">CUD</small>                   
                                        <p><?= $Alumno->getCud(); ?></p>
                                    </div>
                                </div>
                            </div>
                            <hr />

                            <!-- Div Datos de Contacto -->
                            <div class="form-group">
                                <div class="form-row">
                                    <label for="email">Datos de Contacto</label> 
                                </div>
                                <div class="form-row">
                                    <div class="col-8">                                        
                                        <small id="emailHelp" class="form-text text-muted">Correo electr&oacute;nico</small>                   
                                        <p><?= $Alumno->getEmail(); ?></p>
                                    </div>
                                    <div class="col-4">                                        
                                        <small id="telefonoHelp" class="form-text text-muted">N&uacute;mero de tel&eacute;fono</small>                   
                                        <p><?= $Alumno->getTelefono(); ?></p>
                                    </div>
                                </div>
                            </div>            
                            <hr />

                            <div class="tab-content" id="myTabContent">

                                <!-- Tab Diagnosticos -->   
                                <div class="row" id="tab-Diagnosticos" role="tabpanel" aria-labelledby="tabDiagnosticos">
                                    <?php include_once 'alumno.tabdiagnosticos.php'; ?>
                                </div>

                                <!-- Tab grupo Familiar -->
                                <div class="row" id="tab-Familiares" role="tabpanel" aria-labelledby="tabFamiliares">
                                    <?php include_once 'alumno.tabfamiliar.php'; ?>
                                </div>

                                <!-- Tab Historial Académico -->
                                <div class="row" id="tab-Academico" role="tabpanel" aria-labelledby="tabAcademico">
                                    <?php include_once 'alumno.tabhistorialacademico.php'; ?>
                                </div>

                                <!-- Tab Entrevistas -->
                                <div class="row" id="tab-Entrevistas" role="tabpanel" aria-labelledby="tabEntrevistas">
                                    Entrevistas
                                </div>
                            </div>                            

                        </div>
                    </div>
                </div>
            </div>
        </div>

    </body>
</html>