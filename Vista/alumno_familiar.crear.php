<?php
include_once '../lib/ControlAcceso.Class.php';
ControlAcceso::requierePermiso(PermisosSistema::PERMISO_PERMISOS);
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
        <script>var columnasSinSort = [1, 2];</script>
        <script src="../lib/tablaSort.js"></script>

        <?php include_once '../gui/navbar.php'; ?>

        <div class="container-fluid">

            <form action="alumno_familiar.crear.procesar.php" method="POST">
                <div class="card">
                    <div class="card-header">
                        <h5 class="oi oi-plus"> Agregar Familiar</h5>
                    </div>
                    <div class="card-body">

                        <!-- INI Formulario -->
                        <input type="hidden" name="id_alumno" value="<?= $Alumno->getId(); ?>" />
                        <table id="tablaSort" class="table table-striped table-hover table-sm ">
                            <thead class="thead-light">
                                <tr>
                                    <th>Nombre</th>
                                    <th>DNI</th>
                                    <th>Opciones</th> 
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($Coleccion->getColeccion() as $Persona) { ?>
                                    <tr>
                                        <td><?= $Persona->getNombre(); ?></td>
                                        <td align="center"><?= $Persona->getDni(); ?></td>
                                        <td align="center">
                                            <!-- @todo if alumno posee familiar checked true --> 
                                            <input type="checkbox" name="id_persona[<?= $Persona->getId(); ?>]" value="<?= $Persona->getId(); ?>" />
                                            <input type="text" id="parentesco[<?= $Persona->getId(); ?>]" name="parentesco[<?= $Persona->getId(); ?>]" placeholder="Parentesco" />
                                        </td>
                                    </tr>
                                <?php } ?>
                            </tbody>
                        </table>
                        <p>
                            <label>¿No encuentra a la persona que busca?</label>
                            <a href="persona.crear.php?id_alumno=<?= $Alumno->getId(); ?>" class="btn btn-outline-success">
                                <i class="oi oi-plus"></i> Registrar Persona
                            </a>                
                        </p>
                    </div>
                    <div class="card-footer">
                        <label>Opciones:</label>
                        <input type ="submit" class="btn btn-success" />  
                        <input type="reset" class="btn btn-outline-success" />
                        <a href="alumno.ver.php?id=<?= $Alumno->getId(); ?>"><input type="button" class="btn btn-outline-danger" value="Salir" /></a>                        
                    </div>
                </div>
            </form>
            <!-- FIN Formulario -->
        </div>
        <?php include_once '../gui/footer.php'; ?>
    </body>
</html>


