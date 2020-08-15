<?php 
include_once '../lib/ControlAcceso.Class.php';
ControlAcceso::requierePermiso(PermisosSistema::PERMISO_PERMISOS);
var_dump(ControlAcceso::verificaPermiso(PermisosSistema::PERMISO_PERMISOS, $_SESSION['usuario']));
include_once '../lib/Constantes.Class.php'; ?>
<html>
    <head>
        <?php include_once '../lib/includesCss.php'; ?>
        <?php include_once '../lib/includesJs.php'; ?>
        <title><?= Constantes::NOMBRE_SISTEMA; ?> - Alumnos</title>
    </head>
    <body>
        <script>var columnasSinSort = [1, 3];</script>
        <script src="../lib/tablaSort.js"></script>
        <?php include_once '../gui/navbar.php'; ?>
        <div class="container-fluid">

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
                    <div class="row">
                        <div class="col-md-12">
                            <!-- Evaluar soluciones alternativas -->
                            <?php $_GET['modelo'] = 'alumno'; ?>
                            <?php include_once '../gui/bloqueMenuContextual.php'; ?>
                        </div>
                    </div>

                    <div class="row">&nbsp;</div>

                    <!-- BLOQUE USUARIO LOGUEADO -->
                    <div class="row">
                        <div class="col-md-12">
                            <?php include_once '../gui/bloqueUsuarioLogueado.php'; ?>
                        </div>
                    </div>

                </div>

            </div>

        </div>

        <?php include_once '../gui/footer.php'; ?>
    </body>
</html>
