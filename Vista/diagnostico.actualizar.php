<?php
include_once '../lib/Constantes.Class.php';
include_once '../modelo/Diagnostico.class.php';
include_once '../modelo/DiagnosticoMapper.php';

$Mapper = new DiagnosticoMapper();
$Diagnostico = new Diagnostico($Mapper->findById($_GET['id']));
?>

<html>
    <head>
        <?php include_once '../lib/includesCss.php'; ?>
        <?php include_once '../lib/includesJs.php'; ?>
        <title><?= Constantes::NOMBRE_SISTEMA; ?> - Nuevo Diagn&oacute;stico</title>
    </head>
    <body>
        <?php include_once '../gui/navbar.php'; ?>

        <div class="container-fluid">

            <div class="card">
                <div class="card-header">
                    <h5 class="oi oi-pencil"> Actualizar Diagn&oacute;stico</h5>
                </div>
                <form action="diagnostico.actualizar.procesar.php" method="POST">
                    <div class="card-body">
                        <?php include_once './diagnostico.formulario.php'; ?>
                    </div>

                </form>
            </div>   

        </div>
    </body>
</html>




