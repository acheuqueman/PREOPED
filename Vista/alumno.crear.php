<?php include_once '../lib/Constantes.Class.php'; ?>

<html>
    <head>
        <?php include_once '../lib/includesCss.php'; ?>
        <?php include_once '../lib/includesJs.php'; ?>
        <title><?= Constantes::NOMBRE_SISTEMA; ?> - Gesti&oacute;n de Alumnos</title>
    </head>
    <body>
        <?php include_once '../gui/navbar.php'; ?>

        <div class="container-fluid">

            <div class="card">
                <div class="card-header">
                    <h5 class="oi oi-plus"> Nuevo Alumno</h5>
                </div>
                <form action="alumno.crear.procesar.php" method="POST">
                    <div class="card-body">
                        <?php include_once './alumno.formulario.php'; ?>
                    </div>
                </form>
            </div>
        </div>
        <?php include_once '../gui/footer.php'; ?>
    </body>
</html>
