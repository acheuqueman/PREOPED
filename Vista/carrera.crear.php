<?php
include_once '../lib/Constantes.Class.php';
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
                    <h5 class="oi oi-plus">Crear Asignatura</h5>
                </div>
                <div class="card-body">
                    <form action="carrera.crear.procesar.php" method="POST">
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


