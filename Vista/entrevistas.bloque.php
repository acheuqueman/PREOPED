<?php
include_once '../modelo/ColeccionEntrevista.php';
include_once '../modelo/EntrevistaMapper.php';
include_once '../modelo/Entrevista.class.php';
$Coleccion = new ColeccionEntrevista();
?>

<tbody>
    <table id="tablaSort" class="table table-striped table-hover table-sm ">
        <thead class="thead-light">
            <tr>
                <th>Fecha</th>
                <th>Entrevistador</th>
                <th style="text-align: center">Opciones</th>
            </tr>
        </thead>
        <tbody>
        <?php
        foreach ($Coleccion->getColeccion() as $Entrevista) {
            $Mapper = new EntrevistaMapper();
            $Entrevista->setEntrevistados($Mapper->findEntrevistados($Entrevista->getId()));
            $Entrevistados = $Entrevista->getEntrevistados();
            if (!$Entrevistados) continue;
            ?>
            <tr>
                <td><?= $Entrevista->getFecha(); ?></td>
                <td><?= $Entrevista->getEntrevistador(); ?></td>
                <td style="text-align: center">

                    <!-- Ini Botones Opciones -->
                    <a title="Ver detalle" href="#">
                        <button type="button" class="btn btn-outline-info" data-toggle="modal" data-target="#modal<?= $Entrevista->getId(); ?>">
                            <span class="oi oi-zoom-in"></span>
                        </button></a>
                    <!-- @todo eliminar entrevista, eliminar tambien todas las relaciones? -->
                    <!-- <a title="Eliminar" href="entrevista.eliminar.php?id= /*(php) $Entrevista->getId(); */ " onclick="return confirm('¿Desea realmente eliminar?');">
                        <button type="button" class="btn btn-outline-danger">
                            <span class="oi oi-trash"></span>
                        </button></a> -->
                    <!-- Fin Botones Opciones -->

                    <!-- Ini Modal -->
                    <div class="modal fade" id="modal<?= $Entrevista->getId(); ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLongTitle">Entrevista</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <table class="table table-striped table-bordered border-success">
                                        <thead class="thead-light">
                                            <tr>
                                                <th>Entrevistador</th>
                                                <th>Fecha</th>
                                                <th>Entrevistados</th>   
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td><?= $Entrevista->getEntrevistador(); ?></td>
                                                <td><?= $Entrevista->getFecha(); ?></td>
                                                <td><?php foreach ($Entrevistados as $entrevistado) { ?><?= $entrevistado->getNombre(); ?>, <?php } ?></td>
                                            </tr>

                                    </table>
                                    <table style="width:100%">
                                        <thead class="thead-light">
                                            <tr>
                                                <th>Conclusion</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td><?= $Entrevista->getConclusiones(); ?></td>
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
</tbody>