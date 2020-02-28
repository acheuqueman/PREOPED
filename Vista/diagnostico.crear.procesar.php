<?php
include_once '../lib/Constantes.Class.php';
include_once '../modelo/Diagnostico.class.php';
include_once '../modelo/DiagnosticoMapper.php';

$Diagnostico = new Diagnostico($_POST);
$Mapper = new DiagnosticoMapper();
$idDiagnosticoCreado = $Mapper->insert($Diagnostico);
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
                    <h5 class="oi oi-plus"> Nuevo Diagn&oacute;stico</h5>
                </div>
                <div class="card-body">
                    <?php if ($idDiagnosticoCreado) { ?>
                        <p class="alert alert-success">Operaci&oacute;n realizada con &eacute;xito.</p>
                        <p>Diagn&oacute;stico cargado correctamente.</p>
                    <?php } ?>
                    <?php if (!$idDiagnosticoCreado) { ?>
                        <p class="alert alert-danger">Hubo un error</p>
                        <p>No fue posible cargar el Diagn&oacute;stico. Por favor, intente nuevamente. Si el problema persiste, contacte el administrador del sistema.</p>
                    <?php } ?>                                        
                </div>
                <div class="card-footer">
                    <p>Opciones:</p>
                    <p>
                        <a href="diagnostico.crear.php"><input type="button"  class="btn btn-outline-success" value="Cargar otro Diagn&oacute;stico" /></a>
                        <a href="diagnosticos.php"><input type="button" class="btn btn-outline-danger" value="Salir" /></a>
                    </p>
                </div>
            </div>   
            <div class="row">&nbsp;</div>
        </div>


        <?php include_once '../gui/footer.php'; ?>
    </body>
</html>