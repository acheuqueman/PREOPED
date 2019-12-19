<?php
//include_once '../lib/ControlAcceso.Class.php';
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
                    <div class="col-md-9 justify-content-center">

                        <div class="row">
                            <div class="col-md-9">
                                <div class="card">

                                    <div class="card-header text-white bg-secondary">
                                        <h3 class="oi oi-person"> Buscador de Alumnos</h3>
                                        <!-- <h5>Realice las operaciones como registrar pedidos y pagos de los Clientes.</h5> -->
                                    </div>
                                    <div class="card-body bg-info text-white">
                                        <div class="col-md-12">
                                            <div class="input-group mb-3">
                                                <input type="text" class="form-control">
                                                <div class="input-group-append">
                                                    <button class="btn btn-outline-secondary" type="button">
                                                        <span class="oi oi-magnifying-glass"></span>
                                                    </button>
                                                </div>
                                            </div>

                                        </div>


                                    </div>
                                </div>
                            </div>

                            <div class="col-md-3">
                                <?php include_once '../gui/bloqueUsuarioLogueado.php'; ?>
                            </div>
                        </div>

                        <div class="row">&nbsp;</div>

                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-header">
                                        <h5 class="card-title oi oi-magnifying-glass"> Resultados de la B&uacute;squeda</h5>
                                    </div>
                                    <table class="table table-striped small table-bordered border-success">
                                        <thead class="thead-light">
                                            <tr>
                                                <th style="width: 80%">Alumno</th>
                                                <th style="text-align: center">Acciones</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php for ($x = 1; $x < 5; $x++) { ?>
                                                <tr>
                                                    <td>Alumno <?= $x ?></td>
                                                    <td style="text-align: center">
                                                        <a title="Ver detalle" href="usuario.ver.php?id=<?= $x; ?>">
                                                            <button type="button" class="btn btn-outline-info">
                                                                <span class="oi oi-zoom-in"></span>
                                                            </button></a>
                                                        <a title="Modificar" href="usuario.modificar.php?id=<?= $x; ?>">
                                                            <button type="button" class="btn btn-outline-warning">
                                                                <span class="oi oi-pencil"></span>
                                                            </button></a>
                                                        <a title="Eliminar" href="usuario.eliminar.php?id=<?= $x; ?>">
                                                            <button type="button" class="btn btn-outline-danger">
                                                                <span class="oi oi-trash"></span>
                                                            </button></a>
                                                    </td>
                                                </tr>
                                            <?php } ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>



                    <div class="col-md-3">
                        <div class="row">
                            <div class="col-md-12">
                                <?php include_once '../gui/bloqueGestion.php'; ?>
                            </div>
                        </div>

                        <div class="row">&nbsp;</div>

                        <div class="row">
                            <div class="col-md-12">
                                <?php include_once '../gui/bloqueConfiguraciones.php'; ?>
                            </div>
                        </div>

                    </div>
                </div>

            </form>
        </div>

        <?php include_once '../gui/footer.php'; ?>
    </body>
</html>
