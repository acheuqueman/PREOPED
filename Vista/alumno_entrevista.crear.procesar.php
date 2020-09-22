<?php
include_once '../lib/ControlAcceso.Class.php';
ControlAcceso::requierePermiso(PermisosSistema::PERMISO_PERMISOS);
include_once '../lib/Constantes.Class.php';
include_once '../modelo/Entrevista.class.php';
include_once '../modelo/EntrevistaMapper.php';
include_once '../modelo/Entrevista_Alumno.class.php';
include_once '../modelo/Entrevista_AlumnoMapper.php';

$Entrevista = new Entrevista($_POST);

$MapperEntrevista = new EntrevistaMapper();
$idEntrevistaCreada = $MapperEntrevista->insert($Entrevista);

$Mapper = new Entrevista_AlumnoMapper();
if (isset($_POST["id_entrevistados"])) {
    foreach ($_POST["id_entrevistados"] as $entrevistado) {
        $parametros = array("id_entrevista" => $idEntrevistaCreada, "id_alumno" => $entrevistado);
        $Objeto = new Entrevista_Alumno($parametros);
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
                        <h5 class="oi oi-plus"> Nueva Entrevista</h5>
                    </div>
                    <div class="card-body">
                        <?php include_once '../gui/excepcion.mensajes.php'; ?>
                    </div>
                    <div class="card-footer">
                        <p>Opciones:</p>
                        <p>
                            <a href="alumno_entrevista.crear.php?id_alumno=<?= $Objeto->getId_alumno(); ?>"><input type="button"  class="btn btn-outline-success" value="Cargar otra entrevista" /></a>
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