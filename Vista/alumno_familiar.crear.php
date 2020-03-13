<?php
include_once '../lib/Constantes.Class.php';
include_once '../modelo/Alumno.class.php';
include_once '../modelo/AlumnoMapper.php';

$Mapper = new AlumnoMapper();
$Alumno = new Alumno($Mapper->findById($_GET['id_alumno']));

include_once '../modelo/ColeccionPersonas.php';
$Coleccion = new ColeccionPersonas();

?>

<html>
    <head>
        <?php include_once '../lib/includesCss.php'; ?>
        <?php include_once '../lib/includesJs.php'; ?>
        <title><?= Constantes::NOMBRE_SISTEMA; ?> - Gesti&oacute;n de Alumnos</title>
    </head>
    <body>
        <?php include_once '../gui/navbar.php'; ?>

        <div class="container-fluid">

            <div class="card">
                <div class="card-header">
                    <h5 class="oi oi-plus"> Agregar Diagn&oacute;stico</h5>
                </div>
                <div class="card-body">


                    <p>¿No encuentra a la persona que busca?</p>
                    <input type="button" class="btn-info">
                    <!-- INI Formulario -->
                    <form action="alumno_familiar.crear.procesar.php" method="POST">
                        <table id="tablaSort" class="table table-striped table-hover table-sm ">
                            <thead class="thead-light">
                                <tr>
                                    <th>Nombre</th>
                                    <th>DNI</th>
                                    <th class="columnaOpciones">Opciones</th>
                                </tr>
                            </thead>
                            <tbody>

                                <?php foreach ($Coleccion->getColeccion() as $Alumno) { ?>

                                    <tr>
                                        <td><?= $Alumno->getNombre(); ?></td>
                                        <td><?= $Alumno->getDni(); ?></td>
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


                        <input type ="submit" class="btn btn-success">  
                        <a href="alumno.ver.php?id=<?= $Alumno->getId(); ?>"><input type="button" class="btn btn-outline-danger" value="Salir" /></a>                        
                    </form>
                    <!-- FIN Formulario -->



                </div>
            </div>
        </div>
        <?php include_once '../gui/footer.php'; ?>
    </body>
</html>


