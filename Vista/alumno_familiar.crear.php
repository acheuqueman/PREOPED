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
                    <h5 class="oi oi-plus"> Agregar Familiar</h5>
                </div>
                <div class="card-body">


                    <label>¿No encuentra a la persona que busca?</label>>
                    <a href="persona.crear.php?id_alumno=<?= $Alumno->getId(); ?>">
                        <button class="btn"><i class="oi oi-plus"></i> Crear Nuevo</button>
                    </a>
                    <div class="form-row">&nbsp;</div>

                    <!-- INI Formulario -->
                    <form action="alumno_familiar.crear.procesar.php" method="POST">
                        <input type="hidden" name="id_alumno" value="<?= $Alumno->getId(); ?>" />
                        <table id="tablaSort" class="table table-striped table-hover table-sm ">
                            <thead class="thead-light">
                                <tr>
                                    <th>Nombre</th>
                                    <th>DNI</th>
                                    <th>Agregar</th> 
                                </tr>
                            </thead>
                            <tbody>

                                <?php foreach ($Coleccion->getColeccion() as $Persona) { ?>

                                    <tr>
                                        <td><?= $Persona->getNombre(); ?></td>
                                        <td><?= $Persona->getDni(); ?></td>
                                        <td>
                                            <!-- @todo if alumno posee familiar checked true --> 
                                            <input type="checkbox" name="id_persona[<?= $Persona->getId(); ?>]" value="<?= $Persona->getId(); ?>" />
                                            <input type="text" id="parentesco[<?= $Persona->getId(); ?>]" name="parentesco[<?= $Persona->getId(); ?>]" placeholder="Parentesco">
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


