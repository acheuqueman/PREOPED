<?php

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


            <div class="row">
                <div class="col-md-12 justify-content-center">

                    <div class="row ml-auto">
                        <!-- LUGAR DE LA LISTA -->
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h5 class="oi oi-trash">Eliminar Carreras</h5>
                                </div>
                                <form action="carrera.eliminar.procesar.php" method="POST">
           
                                    <div class="row">&nbsp;</div>
                                    <div class="row">
                                        <div class="col-12">
                                            <!-- traer name, tipo, descripccion-->
                                        <table class="table table-striped small table-bordered border-success">
                                            <thead class="thead-light">
                                                <tr>
                                                    <th>Nombre</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td ><?= $Carrera->getNombre(); ?></td>
                                                </tr>
                                            </tbody>
                                        </table>
                                        </div>
                                    </div>
                                    <div class="row">&nbsp;</div>
                                    
                                    <div class="row justify-content-start">
                                        <div class="col">
                                            <input type ="hidden" value="<?= $Carrera->getId(); ?>" name="id" />
                                            <input type ="submit" class="btn btn-success" value="Eliminar Carrera" />
                                            <a href="carreras.php"><input type="button" class="btn btn-outline-danger" value="Cancelar"></a>
                                        </div>
                                    </div>

                                    <div class="row">&nbsp;</div>
                                </form>
                            </div>   
                        </div> 

                    </div>

                    <div class="row">&nbsp;</div>

                </div>
            </div>


        </div>

        <?php include_once '../gui/footer.php'; ?>
    </body>
</html>

