<?php
include_once '../lib/Constantes.Class.php';

include_once '../modelo/Alumno_Diagnostico.class.php';
include_once '../modelo/Alumno_DiagnosticoMapper.php';

$Mapper = new Alumno_DiagnosticoMapper();
$idObjetoCreado = $Mapper->delete($_GET['id']);
?>

<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">        <link rel="stylesheet" href="../lib/bootstrap-4.1.1-dist/css/bootstrap.css" />
        <link rel="stylesheet" href="../lib/open-iconic-master/font/css/open-iconic-bootstrap.css" />
        <script type="text/javascript" src="../lib/JQuery/jquery-3.3.1.js"></script>
        <script type="text/javascript" src="../lib/bootstrap-4.1.1-dist/js/bootstrap.min.js"></script>
        <title><?= Constantes::NOMBRE_SISTEMA; ?> - Alumnos</title>
    </head>
    <body>
        <?php include_once '../gui/navbar.php'; ?>

        <div class="container-fluid">
            <div class="card">
                <div class="card-header">
                    <h5 class="oi oi-person"> Gesti&oacute;n de Alumnos</h5>
                </div>
                <div class="card-body">
                    <?php include_once '../gui/excepcion.mensajes.php'; ?>
                </div>
                <div class="card-footer">
                    <p>Opciones:</p>
                    <p>
                        <a href="alumno.ver.php?id=<?= $_GET['id_alumno']; ?>"><input class="btn btn-outline-success" value="Volver a Alumno" /></a>
                    </p>
                </div>
            </div>   
            <div class="row">&nbsp;</div>
        </div>
        <?php include_once '../gui/footer.php'; ?>
    </body>
</html>