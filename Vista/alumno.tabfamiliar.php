
<p></p>
<h5>Grupo Familiar 
    <a href="alumno_diagnostico.crear.php?id_alumno=<?= $Alumno->getId(); ?>">
        <button class="btn btn-success float-right"><i class="oi oi-plus">&nbsp;</i> Crear Nuevo</button>
    </a>
</h5>
<p></p>

<?php if ($Alumno->getFamiliar()) { ?>
    <table class="table table-striped small table-bordered border-success">
        <thead class="thead-light">
            <tr>
                <th>Nombre</th>
                <th>Parentesco</th>
                <th style="text-align: center">Opciones</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($Familiar->getFamiliar() as $Familiar) { ?>
                <tr>
                    <td><?= $Familiar->getNombreFamiliar(); ?></td>
                    <td><?= $Familiar->getParenetesco(); ?></td>
                    <td style="text-align: center">

                        <!-- Ini Botones Opciones -->
                        <a title="Eliminar" href="alumno_diagnostico.eliminar.php?id=<?= $Familiar->getId(); ?>&id_alumno=<?= $Familiar->getId_alumno(); ?>" onclick="return confirm('¿Desea realmente eliminar?');">
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




