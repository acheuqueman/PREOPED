<p></p>
<h5>Entrevistas
    <a href="alumno_entrevista.crear.php?id_alumno=<?= $Alumno->getId(); ?>">
        <button class="btn btn-success float-right"><i class="oi oi-plus">&nbsp;</i> Crear Nuevo</button>
    </a>
</h5>
<p></p>

<?php if ($Alumno->getDiagnosticos()) { ?>
    <table class="table table-striped small table-bordered border-success">
        <thead class="thead-light">
            <tr>
                <th>Diagnostico</th>
                <th>Profesional</th>
                <th style="text-align: center">Opciones</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($Alumno->getDiagnosticos() as $Diagnostico) { ?>
                <tr>
                    <td><?= $Diagnostico->getDiagnostico(); ?></td>
                    <td><?= $Diagnostico->getProfesional_diagnostico(); ?></td>
                    <td style="text-align: center">

                        <!-- Ini Botones Opciones -->
                        <a title="Eliminar" href="alumno_diagnostico.eliminar.php?id=<?= $Diagnostico->getId(); ?>&id_alumno=<?= $Diagnostico->getId_alumno(); ?>" onclick="return confirm('¿Desea realmente eliminar?');">
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
