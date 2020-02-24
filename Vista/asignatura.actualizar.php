<?php
/*
 * diagnostico: texto
 * tipo_discapacidad: selectoptions o radio
 * descripcion: textarea
 * 
 */
include_once '../lib/Constantes.Class.php';

    include_once '../modelo/Asignatura.class.php';
    include_once '../modelo/AsignaturaMapper.php';

    $Mapper = new AsignaturaMapper();
    $Asignatura = new Asignatura($Mapper->findById($_GET['id']));


?>
<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="../lib/bootstrap-4.1.1-dist/css/bootstrap.css" />
        <link rel="stylesheet" href="../lib/open-iconic-master/font/css/open-iconic-bootstrap.css" />
        <script type="text/javascript" src="../lib/JQuery/jquery-3.3.1.js"></script>
        <script type="text/javascript" src="../lib/bootstrap-4.1.1-dist/js/bootstrap.min.js"></script>

        <script type="text/javascript" src="../mod_autocompletar/jquery-3.1.1.min.js"></script>
        <link rel="stylesheet" href="../mod_autocompletar/jquery-ui.min.css" />
        <script type="text/javascript" src="../mod_autocompletar/jquery-ui.min.js"></script>
        <title><?= Constantes::NOMBRE_SISTEMA; ?> - Inicio</title>
    </head>
    <body>
        <?php include_once '../gui/navbar.php'; ?>

        <div class="container-fluid">
            <div class="card">
                <div class="card-header">
                    <h5 class="oi oi-plus">Actualizar Asignatura</h5>
                </div>
                <div class="card-body">
                    <form action="asignatura.actualizar.procesar.php" method="POST">
                        <div class="row">&nbsp;</div>
                        <div class="row">
                            <div class="col-sm-4">
                                <div class="card">
                                    <input type="hidden" name="id" value="<?= $Asignatura->getId() ?>">
                                    <div class="card-header">Nombre Asignatura</div>
                                    <div class="card-body">
                                        <div class="input-group mb-3">
                                            <input type="text" class="form-control" name="nombre" required=" " value="<?= $Asignatura->getNombre() ?>">
                                        </div>
                                    </div>
                                </div>
                            </div>                                            
                        </div>
                        <div class="row">&nbsp;</div>
                        <div class="row ">
                            <div class="col">
                                <input type ="submit" class="btn btn-success" />  
                                <a href="asignaturas.php"><input type="button" class="btn btn-outline-danger" value="Salir" /></a>
                            </div>
                        </div>
                        <div class="row">&nbsp;</div>
                    </form>
                </div>
            </div>   

        </div>

        <?php include_once '../gui/footer.php'; ?>
    </body>
</html>



