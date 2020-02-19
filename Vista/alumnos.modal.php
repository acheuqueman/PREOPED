<!-- Ini Modal -->
<div class="modal fade" id="modal<?= $Alumno->getId(); ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title oi oi-person" id="exampleModalLongTitle"> Detalles del Alumno</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <table class="table table-striped table-bordered border-success">
                    <thead class="thead-light">
                        <tr>
                            <th>Nombre</th>
                            <th>DNI</th>
                            <th>Ingreso</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><?= $Alumno->getNombre(); ?></td>
                            <td><?= $Alumno->getDni(); ?></td>
                            <td><?= $Alumno->getAnio_ingreso(); ?></td>
                        </tr>
                    </tbody>
                </table>
                
                <h5>Diagnosticos</h5>
                <table class="table table-striped table-bordered border-success">
                    <thead>
                        <tr>
                            <th>Diganostico</th>
                            <th>Profesional</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td></td>
                            <td></td>
                        </tr>

                    </tbody>
                </table>

                <p>Y asi...</p>
            </div>                                                                    
        </div>
    </div>
</div>
<!-- Fin Modal -->
