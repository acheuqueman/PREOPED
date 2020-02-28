<?php
include_once '../modelo/ColeccionAlumno.php';
$Coleccion = new ColeccionAlumno();
?>

<table id="tablaSort" class="table table-striped table-hover table-sm ">
    <thead class="thead-light">
        <tr>
            <th>Nombre</th>
            <th>DNI</th>
            <th>Ingreso</th>
            <th class="columnaOpciones">Opciones</th>
        </tr>
    </thead>
    <tbody>

        <?php foreach ($Coleccion->getColeccion() as $Alumno) { ?>

            <tr>
                <td><?= $Alumno->getNombre(); ?></td>
                <td><?= $Alumno->getDni(); ?></td>
                <td><?= $Alumno->getAnio_ingreso(); ?></td>
                <td class="columnaOpciones">

                    <!-- Ini Botones Opciones -->
                    <a title="Ver detalle" href="alumno.ver.php?id=<?= $Alumno->getId(); ?>">
                        <button type="button" class="btn btn-outline-info">
                            <span class="oi oi-zoom-in"></span>
                        </button></a>
                    
                    <a title="Modificar" href="alumno.actualizar.php?id=<?= $Alumno->getId(); ?>">
                        <button type="button" class="btn btn-outline-warning">
                            <span class="oi oi-pencil"></span>
                        </button></a>

                    <a title="Eliminar" href="#">
                        <button type="button" class="btn btn-outline-danger">
                            <span class="oi oi-trash"></span>
                        </button></a>
                    <!-- Fin Botones Opciones -->

                </td>
            </tr>
        <?php } ?>

    </tbody>
</table>