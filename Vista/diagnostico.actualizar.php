<?php
include_once '../lib/Constantes.Class.php';

include_once '../modelo/Diagnostico.class.php';
include_once '../modelo/DiagnosticoMapper.php';

$Mapper = new DiagnosticoMapper();
$Diagnostico = new Diagnostico($Mapper->findById($_GET["id"]));
?>

<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">        <link rel="stylesheet" href="../lib/bootstrap-4.1.1-dist/css/bootstrap.css" />
        <link rel="stylesheet" href="../lib/open-iconic-master/font/css/open-iconic-bootstrap.css" />
        <script type="text/javascript" src="../lib/JQuery/jquery-3.3.1.js"></script>
        <script type="text/javascript" src="../lib/bootstrap-4.1.1-dist/js/bootstrap.min.js"></script>
        <title><?= Constantes::NOMBRE_SISTEMA; ?> - Nuevo Diagn&oacute;stico</title>
    </head>
    <body>
        <?php include_once '../gui/navbar.php'; ?>

        <div class="container-fluid">

            <div class="card">
                <div class="card-header">
                    <h5 class="oi oi-pencil"> Actualizar Diagn&oacute;stico</h5>
                </div>
                <form action="diagnostico.actualizar.procesar.php" method="POST">
                    <div class="card-body">
                        <?php $_GET['accion'] = "actualizar;" ?>
                        <?php include_once './diagnostico.formulario.php'; ?>
                    </div>
                        
                </form>
            </div>   

        </div>
    </body>
</html>




