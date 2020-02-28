<?php
include_once '../lib/Constantes.Class.php';
include_once '../modelo/Carrera.class.php';
include_once '../modelo/CarreraMapper.php';

$Mapper = new CarreraMapper();
$Carrera = new Carrera($Mapper->findById($_GET['id']));
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
                    <h5 class="oi oi-plus">Actualizar Carrera</h5>
                </div>
                <div class="card-body">
                    <form action="carrera.actualizar.procesar.php" method="POST">
                        <div class="card-body">
                            <?php include_once './carrera.formulario.php'; ?>
                        </div>
                    </form>
                </div>
            </div>   

        </div>

        <?php include_once '../gui/footer.php'; ?>
    </body>
</html>