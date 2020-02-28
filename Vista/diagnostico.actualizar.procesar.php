<?php
include_once '../lib/Constantes.Class.php';
include_once '../modelo/Diagnostico.class.php';
include_once '../modelo/DiagnosticoMapper.php';

$Diagnostico = new Diagnostico($_POST);
$Mapper = new DiagnosticoMapper();
$idDiagnosticoCreado = $Mapper->update($Diagnostico);
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
                    <h5 class="oi oi-plus"> Actualizar Diagn&oacute;stico</h5>
                </div>
                <div class="card-body">
                    <?php if ($idDiagnosticoCreado) { ?>
                        <p class="alert alert-success">Operaci&oacute;n realizada con &eacute;xito.</p>
                        <p>Diagn&oacute;stico actualizado correctamente.</p>
                    <?php } ?>
                    <?php if (!$idDiagnosticoCreado) { ?>
                        <p class="alert alert-danger">Hubo un error</p>
                        <p>No fue posible actualizar el Diagn&oacute;stico. Por favor, intente nuevamente. Si el problema persiste, contacte el administrador del sistema.</p>
                    <?php } ?>                                        
                </div>
                <div class="card-footer">
                    <p>Opciones:</p>
                    <p>
                        <a href="diagnosticos.php"><input type="button"  class="btn btn-outline-danger" value="Salir" /></a>
                    </p>
                </div>
            </div>   
            <div class="row">&nbsp;</div>

        </div>
    </body>
</html>