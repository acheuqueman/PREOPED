<?php
include_once '../lib/Constantes.Class.php';
include_once '../modelo/Alumno.class.php';
include_once '../modelo/AlumnoMapper.php';

$Mapper = new AlumnoMapper();
$Alumno = new Alumno($Mapper->findById($_GET['id_alumno']));

include_once '../modelo/ColeccionDiagnostico.php';
$Coleccion = new ColeccionDiagnostico();
?>

<html>
    <head>
        <?php include_once '../lib/includesCss.php'; ?>
        <?php include_once '../lib/includesJs.php'; ?>
        <title><?= Constantes::NOMBRE_SISTEMA; ?> - Gesti&oacute;n de Alumnos</title>
    </head>
    <body>
        <?php include_once '../gui/navbar.php'; ?>

        <div class="container-fluid">

            <div class="card">
                <div class="card-header">
                    <h5 class="oi oi-plus"> Agregar Diagn&oacute;stico</h5>
                </div>
                <div class="card-body">

                    <!-- INI Formulario -->
                    <form action="alumno_diagnostico.crear.procesar.php" method="POST">
                        <input type="hidden" name="id_alumno" value="<?= $Alumno->getId(); ?>" />

                        <div class="form-group">

                            <div class="form-row">
                                <label>Estudiante: <?= $Alumno->getNombre(); ?></label> 
                            </div>

                            <div class="form-row">
                                <label for="diagnostico">Diagn&oacute;sticos</label> 
                            </div>

                            <div class="form-row">
                                <div class="col-md-6">                                        
                                    <select class="form-control" id="id_diagnostico" name="id_diagnostico">
                                        <?php foreach ($Coleccion->getColeccion() as $Diagnostico) { ?>
                                            <option value="<?= $Diagnostico->getId(); ?>"><?= $Diagnostico->getDiagnostico() . " (" . $Diagnostico->getTipo_discapacidad() . ")" ?></option>
                                        <?php } ?>
                                    </select>
                                    <small id="id_diagnosticoHelp" class="form-text text-muted">
                                        Elija un diagn&oacute;stico
                                    </small>                   
                                </div>

                                <div class="col-md-6">                                        
                                    <input type="text" class="form-control" id="profesional_diagnostico" name="profesional_diagnostico" value="" required="">
                                    <small id="profesional_diagnosticoHelp" class="form-text text-muted">
                                        Nombre del Profesional que diagnostic&oacute; el estudiante
                                    </small>                   
                                </div>
                            </div>
                        </div>

                        <input type ="submit" class="btn btn-success">  
                        <a href="alumno.ver.php?id=<?= $Alumno->getId(); ?>"><input type="button" class="btn btn-outline-danger" value="Salir" /></a>                        
                    </form>
                    <!-- FIN Formulario -->



                </div>
            </div>
        </div>
        <?php include_once '../gui/footer.php'; ?>
    </body>
</html>
