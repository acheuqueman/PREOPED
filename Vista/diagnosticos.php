<?php
//include_once '../lib/ControlAcceso.Class.php';
include_once '../lib/Constantes.Class.php';
include_once '../modelo/ColeccionDiagnostico.php';
include_once '../modelo/Diagnostico.class.php';
$Coleccion = new ColeccionDiagnostico();
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
                            <!-- LUGAR DE LA LISTA -->
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-header">
                                        <h5 class="card-title oi oi-list"> Diagnosticos</h5>
                                    </div>
                                    <table class="table table-striped small table-bordered border-success">
                                        <thead class="thead-light">
                                            <tr>
                                                <th>Diagnostico</th>
                                                <th>Tipo</th>
                                                <th style="text-align: center">Opciones</th>
                                            </tr>
                                        </thead>
                                        <tbody>

                                            <?php foreach ($Coleccion->getColeccion() as $Diagnostico) { ?>

                                                <tr>
                                                    <td><?= $Diagnostico->getDiagnostico(); ?></td>
                                                    <td><?= $Diagnostico->getTipo_discapacidad(); ?></td>
                                                    <td style="text-align: center">

                                                        <a title="Ver detalle" href="#">
                                                            <button type="button" class="btn btn-outline-info">
                                                                <span class="oi oi-zoom-in"></span>
                                                            </button>
                                                        </a>

                                                        <a title="Modificar" href="diagnostico.actualizar.php?id=<?= $Diagnostico->getId(); ?>">
                                                            <button type="button" class="btn btn-outline-warning">
                                                                <span class="oi oi-pencil"></span>
                                                            </button>
                                                        </a>

                                                        <a title="Eliminar" href="diagnostico.eliminar.php">
                                                            <button type="button" class="btn btn-outline-danger">
                                                                <span class="oi oi-trash"></span>
                                                            </button>                                   
                                                        </a>
                                                    </td>
                                                </tr>
                                            <?php } ?>

                                        </tbody>
                                    </table>
                                </div>   
                            </div> 

                        </div>

                        <div class="row">&nbsp;</div>


                    </div>



                    <div class="col-md-3">
                        <div class="row">
                            <div class="col-md-12">
                                <!-- Evaluar soluciones alternativas -->
                                <?php $_GET['modelo'] = 'diagnostico'; ?>
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

            </form>
        </div>

        <?php include_once '../gui/footer.php'; ?>
    </body>
</html>
