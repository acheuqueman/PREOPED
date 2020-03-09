<?php

?>
<p></p>
<h5>Historial Academico 
    <a href="alumno_carrera.crear.php?id_alumno=<?= $Alumno->getId(); ?>">
        <button class="btn btn-success float-right"><i class="oi oi-plus">&nbsp;</i> Agregar Carreras</button>
    </a>
</h5>
<p></p>

<?php if ($Alumno->getCarreras()) { ?>
    <table class="table table-striped small table-bordered border-success">
        <thead class="thead-light">
            <tr>
                <th>Carreras</th>
                <th style="text-align: center">Opciones</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($Alumno->getCarreras() as $Carrera) { ?>
                <tr>
                    <td><?= $Carrera->getNombre(); ?></td>
                    <td style="text-align: center">

                        <!-- Ini Botones Opciones -->
                        <a title="Eliminar" href="alumno_carrera.eliminar.php?id=<?= $Carrera->getId(); ?>&id_alumno=<?= $Carrera->getId_alumno(); ?>" onclick="return confirm('¿Desea realmente eliminar?');">
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
