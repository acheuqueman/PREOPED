<?php
include_once '../lib/Constantes.Class.php';
include_once '../modelo/Alumno.class.php';
include_once '../modelo/AlumnoMapper.php';

$Mapper = new AlumnoMapper();
$Alumno = new Alumno($Mapper->findById($_GET['id_alumno']));

include_once '../modelo/ColeccionAlumno.php';
$Coleccion = new ColeccionAlumno();


?>

<html>
    <head>
        <?php include_once '../lib/includesCss.php'; ?>
        <?php include_once '../lib/includesJs.php'; ?>
        <title><?= Constantes::NOMBRE_SISTEMA; ?> - Gesti&oacute;n de Alumnos</title>
    </head>
    <body>
        <script>var columnasSinSort = [1, 2];</script>
        <?php include_once '../gui/navbar.php'; ?>

        <div class="container-fluid">

            <div class="card">
                <div class="card-header">
                    <h5 class="oi oi-plus"> Agregar Entrevista</h5>
                </div>
                <div class="card-body">

                    <!-- INI Formulario -->
                    <form action="alumno_entrevista.crear.procesar.php" method="POST">
                        <input type="hidden" name="id_alumno" value="<?= $Alumno->getId(); ?>" />

                        <div class="form-group">

                            
                            <div class="form-row">
                                <label>Alumno: <?= $Alumno->getNombre(); ?></label> 
                            </div>

                            <div class="form-group">
                                <div class="form-row">
                                    <label for="nombre">Entrevistador</label> 
                                </div>
                                <div class="form-row">
                                    <div class="col-2">                                       
                                        <input type="text" class="form-control" id="entrevistador" name="entrevistador" required="">              
                                    </div>
                                </div>

                                <div class="form-row">
                                    <label for="nombre">Fecha</label> 
                                </div>
                                <div class="form-row">
                                    <div class="col-2">                                       
                                        <input type="date" class="form-control" id="fecha" name="fecha" required="">              
                                    </div>
                                </div>

                                <div class="form-row">
                                    <label for="nombre">Conclusiones</label> 
                                </div>
                                <div class="form-row">
                                    <div class="col-6">                                       
                                        <input type="text" class="form-control" id="conclusiones" name="conclusiones" required="">              
                                    </div>
                                </div>

                                <!-- Fomulario seleccion de entrevistados -->
                                <div class="card-body">

                                    <!-- INI Formulario -->
                                    
                                    <table id="tablaSort" class="table table-striped table-hover table-sm ">
                                        <thead class="thead-light">
                                            <tr>
                                                <th>Nombre</th>
                                                <th>DNI</th>
                                                <th>Entrevistados</th> 
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php foreach ($Coleccion->getColeccion() as $AlumnoCol) { ?>
                                                <tr>
                                                    <td><?= $AlumnoCol->getNombre(); ?></td>
                                                    <td align="center"><?= $AlumnoCol->getDni(); ?></td>
                                                    <td align="center">
                                                        <?php if ($AlumnoCol->getDni() == $Alumno->getDni()) $checked = "checked"; else $checked = " " ?>
                                                        <input  type="checkbox" name="id_entrevistados[<?= $AlumnoCol->getId(); ?>]" value="<?= $AlumnoCol->getId();?>" <?= $checked;?> />
                                                    </td>
                                                </tr>
                                            <?php }?>
                                        </tbody>
                                    </table>

                                    <!-- @todo Se puede agregar cualquier persona?
                                    <p>
                                        <label>¿No encuentra a la persona que busca?</label>
                                        <a href="persona.crear.php?id_alumno= (alumnoid)" class="btn btn-outline-success">
                                            <i class="oi oi-plus"></i> Registrar Persona
                                        </a>                
                                    </p>
                                    -->
                                </div>
                                <div class="card-footer">
                                    <label>Opciones:</label>
                                    <input type ="submit" class="btn btn-success" />  
                                    <input type="reset" class="btn btn-outline-success" />
                                    <a href="alumno.ver.php?id=<?= $Alumno->getId(); ?>"><input type="button" class="btn btn-outline-danger" value="Salir" /></a>                        
                                </div>
                            </div>
                        </div>                       
                    </form>
                    <!-- FIN Formulario -->



                </div>
            </div>
        </div>
        <?php include_once '../gui/footer.php'; ?>
    </body>
</html>