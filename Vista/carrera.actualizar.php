<?php
/*
 * diagnostico: texto
 * tipo_discapacidad: selectoptions o radio
 * descripcion: textarea
 * 
 */
include_once '../lib/Constantes.Class.php';

    include_once '../modelo/Carrera.class.php';
    include_once '../modelo/CarreraMapper.php';
    
    $Mapper = new CarreraMapper();
    $Carrera = new Carrera($Mapper->findById($_GET['id']));


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
                    <h5 class="oi oi-plus">Actualizar Carrera</h5>
                </div>
                <div class="card-body">
                    <form action="carrera.actualizar.procesar.php" method="POST">
                        <div class="row">&nbsp;</div>
                        <div class="row">
                            <div class="col-sm-4">
                                <div class="card">
                                    <input type="hidden" name="id" value="<?= $Carrera->getId() ?>">
                                    <div class="card-header">Nombre Carrera</div>
                                    <div class="card-body">
                                        <div class="input-group mb-3">
                                            <input type="text" class="form-control" name="nombre" required=" " value="<?= $Carrera->getNombre() ?>">
                                        </div>
                                    </div>
                                </div>
                            </div>                                            
                        </div>
                        <div class="row">&nbsp;</div>
                        <div class="row ">
                            <div class="col">
                                <input type ="submit" class="btn btn-success" />  
                                <a href="carreras.php"><input type="button" class="btn btn-outline-danger" value="Salir" /></a>
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
