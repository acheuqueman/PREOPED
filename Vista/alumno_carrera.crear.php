<?php
include_once '../lib/Constantes.Class.php';
include_once '../modelo/ColeccionCarrera.php';
$Coleccion = new ColeccionCarrera();

include_once '../modelo/Alumno.class.php';
include_once '../modelo/AlumnoMapper.php';

$Mapper = new AlumnoMapper();
$Alumno = new Alumno($Mapper->findById($_GET['id_alumno']));
$Alumno->setCarreras($Mapper->findCarreras($Alumno->getId()));

?>

<html>
    <head>
        <?php include_once '../lib/includesCss.php'; ?>
        <?php include_once '../lib/includesJs.php'; ?>
        <title><?= Constantes::NOMBRE_SISTEMA; ?> - Gestion de Alumno</title>
    </head>
    <body>
        <?php include_once '../gui/navbar.php'; ?>
        <div class="container-fluid">

            <div class="row">

                <div class="col-md-12 justify-content-center">
                    <div class="card">
                        <div class="card-header">
                            <h5 class="card-title oi oi-plus" >Agregar Carrera</h5>
                        </div>
                        <div class="card-body">

                            <form method="POST" action="alumno_carrera.crear.procesar.php">
                                <input type="hidden" name="id_alumno" value="<?= $Alumno->getId(); ?>" />

                                <div class="form-group">

                                    <div class="form-row">
                                        <label>Estudiante: <?= $Alumno->getNombre(); ?></label> 
                                    </div>

                                    <div class="form-row">
                                        <label for="carrera">Carreras</label> 
                                    </div>

                                    <?php foreach ($Coleccion->getColeccion() as $Carrera) { ?>
                                    <input type="checkbox" name="id_carrera[<?= $Carrera->getId(); ?>]" value="<?= $Carrera->getId(); ?>" <?php if($Alumno->poseeCarrera($Carrera->getId())) { echo "checked"; } ?> />
                                        <?= $Carrera->getNombre(); ?>
                                        <br> <br>
                                    <?php } ?>

                                </div>

                                <input type="submit" class="btn btn-success">
                                <a href="alumno.ver.php?id=<?= $Alumno->getId(); ?>"><input type="button" class="btn btn-outline-danger" value="Salir" /></a>                        

                            </form>
                        </div>                            
                    </div>
                </div>
            </div>

        </div>

        <?php include_once '../gui/footer.php'; ?>
    </body>
</html>
