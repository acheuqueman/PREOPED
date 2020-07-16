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
                    //var_dump($Entrevista);
            ?>
                    <tr>
                        <td><?= $Entrevista->getFecha(); ?></td>
                        <td><?= $Entrevista->getEntrevistador(); ?></td>
                        <td style="text-align: center">

                            <!-- Ini Botones Opciones -->
                            <a title="Ver detalle" href="entrevista.ver.php?id=<?= $Entrevista->getId_entrevista(); ?>">
                                <button type="button" class="btn btn-outline-info">
                                    <span class="oi oi-zoom-in"></span>
                                </button></a>
                            <!-- @todo eliminar entrevista -->
                            <a title="Eliminar" href="alumno_entrevista.eliminar.php?id=<?= $Entrevista->getId_entrevista(); ?>" onclick="return confirm('¿Desea realmente eliminar?');">
                                <button type="button" class="btn btn-outline-danger">
                                    <span class="oi oi-trash"></span>
                                </button></a>
                            <!-- Fin Botones Opciones -->

                        </td>
                    </tr>
                <?php } ?>
        </tbody>
    </table>

<p></p>
