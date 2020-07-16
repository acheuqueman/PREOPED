<?php
include_once '../lib/Constantes.Class.php';
include_once '../modelo/Familiar.class.php';
include_once '../modelo/FamiliarMapper.php';

$Mapper = new FamiliarMapper();
$idObjetoCreado = false;

if (isset($_POST["id_persona"])) {

    //$Mapper->deleteAll($_POST['id_alumno']);
    foreach ($_POST["id_persona"] as $persona) {
        $parentesco = $_POST["parentesco"][$persona];
        $parametros = array("id_alumno" => $_POST["id_alumno"], "id_persona" => $persona, "parentesco" => $parentesco);
        $Objeto = new Familiar($parametros);
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
                    <h5 class="oi oi-plus"> Agregar Familiar</h5>
                </div>
                <div class="card-body">
                    <?php include_once '../gui/excepcion.mensajes.php'; ?>
                </div>
                <div class="card-footer">
                    <p>Opciones:</p>
                    <p>
                        <a href="familiar.crear.php?id_alumno=<?= $_POST["id_alumno"]; ?>"><input type="button"  class="btn btn-outline-success" value="Agregar mas familiares" /></a>
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
