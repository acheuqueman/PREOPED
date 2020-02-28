<?php
include_once '../lib/Constantes.Class.php';
include_once '../modelo/Carrera.class.php';
include_once '../modelo/CarreraMapper.php';

$Mapper = new CarreraMapper();
$Carrera = new Carrera($Mapper->findById($_GET['id']));
?>

<html>
    <head>
        <?php include_once '../lib/includesCss.php'; ?>
        <?php include_once '../lib/includesJs.php'; ?>
        <title><?= Constantes::NOMBRE_SISTEMA; ?> - Carreras</title>
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
