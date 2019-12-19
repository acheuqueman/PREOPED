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
            <form action="?accion=busquedaSimple" method="post">

                <div class="row">
                    <div class="col-md-12 justify-content-center">

                        <div class="row ml-auto">
                            <!-- LUGAR DE LA LISTA -->
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-header">
                                        <h5 class="oi oi-plus">Crear Diagnosticos</h5>
                                    </div>
                                    <form action="diagnostico.crear.procesar.php" method="POST">
                                        <div class="row">&nbsp;</div>
                                        <div class="row">
                                            <div class="col-sm-4">
                                                <div class="card">
                                                    <div class="card-header">Diagnostico</div>
                                                    <div class="card-body">
                                                        <div class="input-group mb-3">
                                                            <input type="text" class="form-control" name="diagnostico">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-4">
                                                <div class="card">
                                                    <div class="card-header">Tipo de Discapacidad</div>
                                                    <div class="card-body">
                                                        <div class="input-group mb-3">
                                                            <select class="custom-select" name="tipo_discapacidad">
                                                                <option selected>Tipo de discapacidad</option>
                                                                <option value="1">One</option>
                                                                <option value="2">Two</option>
                                                                <option value="3">Three</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-4">
                                                <div class="card">
                                                    <div class="card-header">Descripcion</div>
                                                    <div class="card-body">
                                                        <div class="input-group">
                                                            <textarea class="form-control" name="descripcion"></textarea>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">&nbsp;</div>
                                        <div class="row justify-content-end">
                                            <div class="col-2">
                                                <input type ="submit" class="btn btn-info">  

                                            </div>
                                        </div>
                                        <div class="row">&nbsp;</div>
                                    </form>
                                </div>   
                            </div> 

                        </div>

                        <div class="row">&nbsp;</div>

                    </div>
                </div>

            </form>
        </div>

        <?php include_once '../gui/footer.php'; ?>
    </body>
</html>




