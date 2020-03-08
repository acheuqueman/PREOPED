<?php
include_once '../lib/Constantes.Class.php';
include_once '../modelo/Alumno_Carrera.class.php';
include_once '../modelo/Alumno_CarreraMapper.php';

$Objeto = new Alumno_Carrera($_POST);
$Mapper = new Alumno_CarreraMapper();
var_dump($Objeto);
$idObjetoCreado = $Mapper->insert($Objeto);

?>

<html>
    <head>
        <?php include_once '../lib/includesCss.php'; ?>
        <?php include_once '../lib/includesJs.php'; ?>
        <title><?= Constantes::NOMBRE_SISTEMA; ?> - Alumnos</title>
    </head>
    <body>
        <?php include_once '../gui/navbar.php'; ?>

        <div class="container-fluid">
                <div class="card">
                    <div class="card-header">
                        <h5 class="oi oi-plus"> Nuevo Diagnostico</h5>
                    </div>
                    <div class="card-body">
                        <?php include_once '../gui/excepcion.mensajes.php'; ?>
                    </div>
                    <div class="card-footer">
                        <p>Opciones:</p>
                        <p>
                            <a href="alumno_carrera.crear.php?id_alumno=<?= $Objeto->getId_alumno(); ?>"><input type="button"  class="btn btn-outline-success" value="Cargar otro Diagn&oacute;stico" /></a>
                            <a href="alumno.ver.php?id=<?= $Objeto->getId_alumno(); ?>"><input type="button" class="btn btn-outline-success" value="Ver Alumno" /></a>
                            <a href="alumnos.php"><input type="button" class="btn btn-outline-danger" value="Salir" /></a>
                        </p>
                    </div>
                </div>   
                <div class="row">&nbsp;</div>
            </div>
        <?php include_once '../gui/footer.php'; ?>
    </body>
</html>