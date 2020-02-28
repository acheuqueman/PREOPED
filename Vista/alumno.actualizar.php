<?php
include_once '../lib/Constantes.Class.php';
include_once '../modelo/Alumno.class.php';
include_once '../modelo/AlumnoMapper.php';

$Mapper = new AlumnoMapper();
$Alumno = new Alumno($Mapper->findById($_GET['id']));
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
                    <h5 class="oi oi-pencil"> Actualizar datos del Alumno</h5>
                </div>
                <form action="alumno.actualizar.procesar.php" method="POST">
                    <div class="card-body">
                        <?php include './alumno.formulario.php'; ?>
                    </div>
                </form>
            </div>
        </div>
        <?php include_once '../gui/footer.php'; ?>
    </body>
</html>