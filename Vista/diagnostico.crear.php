<?php
include_once '../lib/Constantes.Class.php';
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
                    <h5 class="oi oi-plus"> Nuevo Diagn&oacute;stico</h5>
                </div>
                <form action="diagnostico.crear.procesar.php" method="POST">
                    <div class="row">&nbsp;</div>
                    <div class="row">
                        <div class="col-sm-4">
                            <div class="card">
                                <div class="card-header">Diagnostico</div>
                                <div class="card-body">
                                    <div class="input-group mb-3">
                                        <input type="text" class="form-control" name="diagnostico" required="">
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
                                            <option value="Motriz">Motriz</option>
                                            <option value="Psicologica">Psicol&oacute;gica</option>
                                            <option value="Visual">Visual</option>
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
                                        <textarea class="form-control" name="descripcion" required=""></textarea>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">&nbsp;</div>
                    <div class="row justify-content-end">
                        <div class="col-2">
                            <input type ="submit" class="btn btn-info">  

                        </div>
                    </div>

                    <div class="row">&nbsp;</div>
                </form>
            </div>   

            <div class="row">&nbsp;</div>



        </div>

        <?php include_once '../gui/footer.php'; ?>
    </body>
</html>




