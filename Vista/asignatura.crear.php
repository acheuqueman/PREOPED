<?php
/*
 * diagnostico: texto
 * tipo_discapacidad: selectoptions o radio
 * descripcion: textarea
 * 
 */
include_once '../lib/Constantes.Class.php';
?>

<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="../lib/bootstrap-4.1.1-dist/css/bootstrap.css" />
        <link rel="stylesheet" href="../lib/open-iconic-master/font/css/open-iconic-bootstrap.css" />
        <script type="text/javascript" src="../lib/JQuery/jquery-3.3.1.js"></script>
        <script type="text/javascript" src="../lib/bootstrap-4.1.1-dist/js/bootstrap.min.js"></script>

        <script type="text/javascript" src="../mod_autocompletar/jquery-3.1.1.min.js"></script>
        <link rel="stylesheet" href="../mod_autocompletar/jquery-ui.min.css" />
        <script type="text/javascript" src="../mod_autocompletar/jquery-ui.min.js"></script>
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
                    <form action="asignatura.crear.procesar.php" method="POST">
                        <div class="card-body">
                            <?php include_once './asignatura.formulario.php'; ?>
                        </div>
                    </form>
                </div>
            </div>   

        </div>

        <?php include_once '../gui/footer.php'; ?>
    </body>
</html>






