<?php
include_once '../lib/Constantes.Class.php';
include_once '../modelo/Alumno.class.php';
include_once '../modelo/AlumnoMapper.php';

$Mapper = new AlumnoMapper();
$Alumno = new Alumno($Mapper->findById($_GET['id_alumno']));

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
                    <h5 class="oi oi-plus"> Agregar Entrevista</h5>
                </div>
                <div class="card-body">

                    <!-- INI Formulario -->
                    <form action="alumno_entrevista.crear.procesar.php" method="POST">
                        <input type="hidden" name="id_alumno" value="<?= $Alumno->getId(); ?>" />

                        <div class="form-group">

                            <div class="form-row">
                                <!-- ** Agregar mas participantes a la entrevista? -->
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
                            </div>
                        </div>

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