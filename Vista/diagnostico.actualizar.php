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
                <div class="card-body">
                    <form action="diagnostico.actualizar.procesar.php" method="POST">
                        <input type="hidden" name="id" value="<?= $Diagnostico->getId(); ?>">
                        <div class="row">&nbsp;</div>
                        <div class="row">
                            <div class="col-sm-4">
                                <div class="card">
                                    <div class="card-header">Diagnostico</div>
                                    <div class="card-body">
                                        <div class="input-group mb-3">
                                            <input type="text" class="form-control" name="diagnostico" required="" value="<?= $Diagnostico->getDiagnostico(); ?>">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="card">
                                    <div class="card-header">Tipo de Discapacidad</div>
                                    <div class="card-body">
                                        <div class="input-group mb-3">
                                            <select class="custom-select" name="tipo_discapacidad">
                                                <optgroup label="Elija">Elija</optgroup>
                                                <option value="Motriz" <?= ($Diagnostico->getTipo_discapacidad()) == "Motriz" ? "selected" : null; ?>>Motriz</option>
                                                <option value="Psicologica" <?= ($Diagnostico->getTipo_discapacidad()) == "Psicologica" ? "selected" : null; ?>>Psicol&oacute;gica</option>
                                                <option value="Visual" <?= ($Diagnostico->getTipo_discapacidad()) == "Visual" ? "selected" : null; ?>>Visual</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="card">
                                    <div class="card-header">Descripcion</div>
                                    <div class="card-body">
                                        <div class="input-group">
                                            <textarea class="form-control" name="descripcion" required=""><?= $Diagnostico->getDescripcion(); ?></textarea>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row ">
                            <div class="col">
                                <input type ="submit" class="btn btn-success" />  
                                <a href="diagnosticos.php"><input type="button" class="btn btn-outline-danger" value="Salir" /></a>
                            </div>
                        </div>

                        <div class="row">&nbsp;</div>
                    </form>
                </div>
            </div>   

        </div>
    </body>
</html>




