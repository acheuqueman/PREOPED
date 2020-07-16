<p></p>
<h5>Entrevistas 
    <a href="alumno_entrevista.crear.php?id_alumno=<?= $Alumno->getId(); ?>">
        <button class="btn btn-success float-right"><i class="oi oi-plus">&nbsp;</i> Crear Nuevo</button>
    </a>
</h5>
<p></p>

    <table class="table table-striped small table-bordered border-success">
        <thead class="thead-light">
            <tr>
                <th>Fecha</th>
                <th>Entrevistador</th>
                <th style="text-align: center">Opciones</th> <!-- vista ampliada con modal -->
            </tr>
        </thead>
        <tbody>
            <?php 
                if ($Alumno->getEntrevistas())
                foreach ($Alumno->getEntrevistas() as $Entrevista) { 
            ?>
                    <tr>
                        <td><?= $Entrevista->getFecha(); ?></td>
                        <td><?= $Entrevista->getEntrevistador(); ?></td>
                        <td style="text-align: center">

                            <!-- Ini Botones Opciones -->
                            <!-- @todo eliminar entrevista -->
                            <a title="Eliminar" href="alumno_entrevista.eliminar.php?id=<?= $Entrevista->getId(); ?>" onclick="return confirm('¿Desea realmente eliminar?');">
                                <button type="button" class="btn btn-outline-danger">
                                    <span class="oi oi-trash"></span>
                                </button></a>
                            <!-- Fin Botones Opciones -->

                        </td>
                    </tr>
                <?php } ?>
        </tbody>
    </table>
<?php //} ?>

<p></p>
