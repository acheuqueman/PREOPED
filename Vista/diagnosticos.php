<?php
include_once '../lib/ControlAcceso.Class.php';
ControlAcceso::requierePermiso(PermisosSistema::PERMISO_PERMISOS);
include_once '../lib/Constantes.Class.php';
include_once '../modelo/ColeccionDiagnostico.php';
include_once '../modelo/Diagnostico.class.php';
$Coleccion = new ColeccionDiagnostico();
?>

<html>
    <head>
        <?php include_once '../lib/includesCss.php'; ?>
        <?php include_once '../lib/includesJs.php'; ?>
        <title><?= Constantes::NOMBRE_SISTEMA; ?> - Diagn&oacute;sticos</title>
    </head>
    <body>
        <script>var columnasSinSort = [2];</script>
        <script src="../lib/tablaSort.js"></script>
        <?php include_once '../gui/navbar.php'; ?>

        <div class="container-fluid">
            <form action="?accion=busquedaSimple" method="post">

                <div class="row">
                    <div class="col-md-9 justify-content-center">
                        <div class="card">
                            <div class="card-header">
                                <h5 class="card-title oi oi-list"> Diagnosticos</h5>
                            </div>
                            <div class="card-body">
                                <table  id="tablaSort" class="table table-striped small table-bordered border-success">
                                    <thead class="thead-light">
                                        <tr>
                                            <th>Diagnostico</th>
                                            <th>Tipo</th>
                                            <th class="columnaOpciones">Opciones</th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                        <?php foreach ($Coleccion->getColeccion() as $Diagnostico) { ?>

                                            <tr>
                                                <td><?= $Diagnostico->getDiagnostico(); ?></td>
                                                <td><?= $Diagnostico->getTipo_discapacidad(); ?></td>
                                                <td class="columnaOpciones">

                                                    <!-- Ini Botones Opciones -->
                                                    <a title="Ver detalle" href="#">
                                                        <button type="button" class="btn btn-outline-info" data-toggle="modal" data-target="#modal<?= $Diagnostico->getId(); ?>" >
                                                            <span class="oi oi-zoom-in"></span>
                                                        </button></a>

                                                    <a title="Modificar" href="diagnostico.actualizar.php?id=<?= $Diagnostico->getId(); ?>">
                                                        <button type="button" class="btn btn-outline-warning">
                                                            <span class="oi oi-pencil"></span>
                                                        </button></a>

                                                    <a title="Eliminar" href="diagnostico.eliminar.php?id=<?= $Diagnostico->getId(); ?>">
                                                        <button type="button" class="btn btn-outline-danger">
                                                            <span class="oi oi-trash"></span>
                                                        </button></a>
                                                    <!-- Fin Botones Opciones -->

                                                    <!-- Ini Modal -->
                                                    <div class="modal fade" id="modal<?= $Diagnostico->getId(); ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                                        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <h5 class="modal-title" id="exampleModalLongTitle">Diagnostico</h5>
                                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                        <span aria-hidden="true">&times;</span>
                                                                    </button>
                                                                </div>
                                                                <div class="modal-body">
                                                                    <table class="table table-striped table-bordered border-success">
                                                                        <thead class="thead-light">
                                                                            <tr>
                                                                                <th>Diagnostico</th>
                                                                                <th>Tipo</th>
                                                                                <th>Descripcion</th>
                                                                            </tr>
                                                                        </thead>
                                                                        <tbody>
                                                                            <tr>
                                                                                <td><?= $Diagnostico->getDiagnostico(); ?></td>
                                                                                <td><?= $Diagnostico->getTipo_discapacidad(); ?></td>
                                                                                <td><?= $Diagnostico->getDescripcion(); ?></td>
                                                                            </tr>
                                                                        </tbody>
                                                                    </table>
                                                                </div>                                                                    
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- Fin Modal -->




                                                </td>
                                            </tr>
                                        <?php } ?>

                                    </tbody>
                                </table>
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
