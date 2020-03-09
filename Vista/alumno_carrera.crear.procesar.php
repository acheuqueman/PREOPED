<?php
include_once '../lib/Constantes.Class.php';
include_once '../modelo/Alumno_Carrera.class.php';
include_once '../modelo/Alumno_CarreraMapper.php';

$Mapper = new Alumno_CarreraMapper();
$idObjetoCreado = false;
if (isset($_POST["id_carrera"]) ) {
    foreach ($_POST["id_carrera"] as $carrera) {
        $parametros = array("id_alumno" => $_POST["id_alumno"], "id_carrera" => $carrera);
        $Objeto = new Alumno_Carrera($parametros);
        //** No permitir carreras repetidas?
        //** Como hacer con idObjetoCreado y el mensaje de error?
        $idObjetoCreado = $Mapper->insert($Objeto);
    }
}
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
                    <h5 class="oi oi-plus"> Nueva Carrera</h5>
                </div>
                <div class="card-body">
<?php include_once '../gui/excepcion.mensajes.php'; ?>
                </div>
                <div class="card-footer">
                    <p>Opciones:</p>
                    <p>
                        <a href="alumno_carrera.crear.php?id_alumno=<?= $_POST["id_alumno"]; ?>"><input type="button"  class="btn btn-outline-success" value="Cargar otro Diagn&oacute;stico" /></a>
                        <a href="alumno.ver.php?id=<?= $_POST["id_alumno"]; ?>"><input type="button" class="btn btn-outline-success" value="Ver Alumno" /></a>
                        <a href="alumnos.php"><input type="button" class="btn btn-outline-danger" value="Salir" /></a>
                    </p>
                </div>
            </div>   
            <div class="row">&nbsp;</div>
        </div>
<?php include_once '../gui/footer.php'; ?>
    </body>
</html>