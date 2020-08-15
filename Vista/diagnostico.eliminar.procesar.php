<?php
include_once '../lib/ControlAcceso.Class.php';
ControlAcceso::requierePermiso(PermisosSistema::PERMISO_PERMISOS);
include_once '../lib/Constantes.Class.php';
include_once '../modelo/DiagnosticoMapper.php';
include_once '../modelo/Diagnostico.class.php';

$Mapper = new DiagnosticoMapper();
$Diagnostico = new Diagnostico($Mapper->findById($_POST['id']));
$DiagnosticoEliminado = $Mapper->delete($Diagnostico);
?>

<html>
    <head>
        <?php include_once '../lib/includesCss.php'; ?>
        <?php include_once '../lib/includesJs.php'; ?>
        <title><?= Constantes::NOMBRE_SISTEMA; ?> - Diagn&oacute;sticos</title>
    </head>
    <body>
        <?php include_once '../gui/navbar.php'; ?>
        <div class="container-fluid">

            <div class="card">
                <div class="card-header">
                    <h5 class="oi oi-trash"> Eliminar Diagn&oacute;stico</h5>
                </div>
                <div class="card-body">
                    <?php if ($DiagnosticoEliminado) { ?>
                        <p class="alert alert-success">Operaci&oacute;n realizada con &eacute;xito.</p>
                        <p>Diagn&oacute;stico eliminado correctamente.</p>
                    <?php } ?>
                    <?php if (!$DiagnosticoEliminado) { ?>
                        <p class="alert alert-danger">Hubo un error</p>
                        <p>No fue posible eliminar el Diagn&oacute;stico. Por favor, intente nuevamente. Si el problema persiste, contacte el administrador del sistema.</p>
                    <?php } ?>                                        
                </div>
                <div class="card-footer">
                    <p>Opciones:</p>
                    <p>
                        <a href="diagnosticos.php"><input type="button" class="btn btn-outline-danger" value="Salir" /></a>
                    </p>
                </div>
            </div>   
        </div> 


        <div class="row">&nbsp;</div>


    </div>

    <?php include_once '../gui/footer.php'; ?>
</body>
</html>