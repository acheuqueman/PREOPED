<?php
include_once '../lib/ControlAcceso.Class.php';
ControlAcceso::requierePermiso(PermisosSistema::PERMISO_PERMISOS);
include_once '../lib/Constantes.Class.php';

include_once '../modelo/Persona.class.php';
include_once '../modelo/PersonaMapper.php';

$Persona = new Persona($_POST);
$Mapper = new PersonaMapper();
$idObjetoCreado = $Mapper->insert($Persona);

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
                    <h5 class="oi oi-plus"> Nuevo Persona</h5>
                </div>
                <div class="card-body">
                    <?php include_once '../gui/excepcion.mensajes.php'; ?>
                </div>
                <div class="card-footer">
                    <p>Opciones:</p>
                    <p>
                        <a href="persona.crear.php?id_alumno=<?= $_POST["id_alumno"]; ?>"><input type="button" class="btn btn-outline-success" value="Cargar otra Persona" /></a>
                        <a href="alumno_familiar.crear.php?id_alumno=<?= $_POST["id_alumno"]; ?>"><input type="button" class="btn btn-outline-success" value="Menu Agregar Familiar" /></a>
                        <a href="alumnos.php"><input type="button"  class="btn btn-outline-danger" value="Salir" /></a>
                    </p>
                </div>
            </div>   
            <div class="row">&nbsp;</div>
        </div>
        <?php include_once '../gui/footer.php'; ?>
    </body>
</html>