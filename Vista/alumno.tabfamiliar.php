<?php
include_once '../lib/ControlAcceso.Class.php';
ControlAcceso::requierePermiso(PermisosSistema::PERMISO_PERMISOS);
?>
<p></p>
<h5>Grupo Familiar 
    <a href="alumno_familiar.crear.php?id_alumno=<?= $Alumno->getId(); ?>">
        <button class="btn btn-success float-right"><i class="oi oi-plus">&nbsp;</i> Crear Nuevo</button>
    </a>
</h5>
<p></p>

<?php  if ($Alumno->getFamiliares()) { ?>
    <table class="table table-striped small table-bordered border-success">
        <thead class="thead-light">
            <tr>
                <th>Nombre</th>
                <th>Parentesco</th>
                <th style="text-align: center">Opciones</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($Alumno->getFamiliares() as $Familiar) { ?>
                <tr>
                    <td><?= $Familiar->getNombre(); ?></td>
                    <td><?= $Familiar->getParentesco(); ?></td>
                    <td style="text-align: center">

                        <!-- Ini Botones Opciones -->
                        <a title="Eliminar" href="alumno_familiar.eliminar.php?id=<?= $Familiar->getId(); ?>&id_alumno=<?= $Familiar->getId_alumno(); ?>" onclick="return confirm('¿Desea realmente eliminar?');">
                            <button type="button" class="btn btn-outline-danger">
                                <span class="oi oi-trash"></span>
                            </button></a>
                        <!-- Fin Botones Opciones -->

                    </td>
                </tr>
            <?php } ?>

        </tbody>
    </table>
<?php } ?>

<p></p>




