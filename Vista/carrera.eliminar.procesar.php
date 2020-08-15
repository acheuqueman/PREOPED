<?php
include_once '../lib/ControlAcceso.Class.php';
ControlAcceso::requierePermiso(PermisosSistema::PERMISO_PERMISOS);
include_once '../lib/Constantes.Class.php';
include_once '../modelo/Carrera.class.php';
include_once '../modelo/CarreraMapper.php';

$Mapper = new CarreraMapper();
$Carrera = new Carrera($Mapper->findById($_POST['id']));
$CarreraEliminada = $Mapper->delete($Carrera);
?>

<html>
    <head>
        <?php include_once '../lib/includesCss.php'; ?>
        <?php include_once '../lib/includesJs.php'; ?>
        <title><?= Constantes::NOMBRE_SISTEMA; ?> - Inicio</title>
    </head>
    <body>
        <?php include_once '../gui/navbar.php'; ?>

        <div class="container-fluid">



            <div class="card">
                <div class="card-header">
                    <h5 class="oi oi-trash"> Eliminar Asignatura</h5>
                </div>
                <div class="card-body">
                    <?php if ($CarreraEliminada) { ?>
                        <p class="alert alert-success">Operaci&oacute;n realizada con &eacute;xito.</p>
                        <p>Carrera eliminado correctamente.</p>
                    <?php } ?>
                    <?php if (!$CarreraEliminada) { ?>
                        <p class="alert alert-danger">Hubo un error</p>
                        <p>No fue posible eliminar la Carrera. Por favor, intente nuevamente. Si el problema persiste, contacte el administrador del sistema.</p>
                    <?php } ?>                                        
                </div>
                <div class="card-footer">
                    <p>Opciones:</p>
                    <p>
                        <a href="carreras.php"><input type="button"  class="btn btn-outline-danger" value="Salir" /></a>
                    </p>
                </div>
            </div>   
        </div> 


        <div class="row">&nbsp;</div>


    </div>

    <?php include_once '../gui/footer.php'; ?>
</body>
</html>