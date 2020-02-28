<?php
include_once '../lib/Constantes.Class.php';
include_once '../modelo/Asignatura.class.php';
include_once '../modelo/AsignaturaMapper.php';

$Asignatura = new Asignatura($_POST);
$Mapper = new AsignaturaMapper();
$idAsignaturaCreado = $Mapper->update($Asignatura);
?>

<html>
    <head>
        <?php include_once '../lib/includesCss.php'; ?>
        <?php include_once '../lib/includesJs.php'; ?>
        <title><?= Constantes::NOMBRE_SISTEMA; ?> - Asignaturas</title>
    </head>
    <body>
        <?php include_once '../gui/navbar.php'; ?>

        <div class="container-fluid">
            <div class="card">
                <div class="card-header">
                    <h5 class="oi oi-plus"> Actualizar Asignatura</h5>
                </div>
                <div class="card-body">
                    <?php if ($idAsignaturaCreado) { ?>
                        <p class="alert alert-success">Operaci&oacute;n realizada con &eacute;xito.</p>
                        <p>Asignatura cargado correctamente.</p>
                    <?php } ?>
                    <?php if (!$idAsignaturaCreado) { ?>
                        <p class="alert alert-danger">Hubo un error</p>
                        <p>No fue posible cargar la Asignatura. Por favor, intente nuevamente. Si el problema persiste, contacte el administrador del sistema.</p>
                    <?php } ?>                                        
                </div>
                <div class="card-footer">
                    <p>Opciones:</p>
                    <p>
                        <a href="asignaturas.php"><input type="button"  class="btn btn-outline-danger" value="Salir" /></a>
                    </p>
                </div>
            </div>   
            <div class="row">&nbsp;</div>
        </div>


        <?php include_once '../gui/footer.php'; ?>
    </body>
</html>  
