<?php
include_once '../lib/ControlAcceso.Class.php';
ControlAcceso::requierePermiso(PermisosSistema::PERMISO_PERMISOS);
include_once '../lib/Constantes.Class.php';
?>
<html>
    <head>
        <?php include_once '../lib/includesCss.php'; ?>
        <?php include_once '../lib/includesJs.php'; ?>
        <title><?= Constantes::NOMBRE_SISTEMA; ?> - Inicio</title>
    </head>
    <body>
        <script>var columnasSinSort = [1, 3];</script>
        <script src="../lib/tablaSort.js"></script>

        <?php include_once '../gui/navbar.php'; ?>

        <div class="container-fluid">
            <form action="?accion=busquedaSimple" method="post">

                <div class="row">
                    <div class="col-md-9 justify-content-center">
                        <div class="card">
                            <div class="card-header">
                                <h5 class="card-title oi oi-person"> Alumnos</h5>
                            </div>
                            <div class="card-body">
                                <?php include_once 'alumnos.bloque.php'; ?>
                            </div>                            
                        </div>
                    </div>

                    <div class="col-md-3">
                        <?php include_once '../gui/bloqueUsuarioLogueado.php'; ?>
                        <hr />
                        <?php include_once '../gui/bloqueGestion.php'; ?>
                        <hr />
                        <?php include_once '../gui/bloqueConfiguraciones.php'; ?>

                    </div>
                </div>

            </form>
        </div>

        <?php include_once '../gui/footer.php'; ?>
    </body>
</html>
