<?php
/*
 * diagnostico: texto
 * tipo_discapacidad: selectoptions o radio
 * descripcion: textarea
 * 
 */
include_once '../lib/Constantes.Class.php';
include_once '../modelo/Diagnostico.class.php';
include_once '../modelo/DiagnosticoMapper.php';
$Mapper = new DiagnosticoMapper();
$Diagnostico = new Diagnostico($Mapper->findById($_GET["id"]));

/**
 * @todo 2020.02 Corroborar que el diagnostico realmente exista.
 */
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
                    <h5 class="oi oi-trash"> Eliminar Diagn&oacute;stico</h5>
                </div>
                <div class="card-body">
                <form action="diagnostico.eliminar.procesar.php" method="POST">

                    <div class="row">&nbsp;</div>
                    <div class="row">
                        <div class="col-12">
                            <p>
                                <!-- traer name, tipo, descripccion-->
                            <table class="table table-striped small table-bordered border-success">
                                <thead class="thead-light">
                                    <tr>
                                        <th>Diagnostico</th>
                                        <th>Tipo</th>
                                        <th>Descripcion</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td><?= $Diagnostico->getDiagnostico(); ?></td>
                                        <td><?= $Diagnostico->getTipo_discapacidad(); ?></td>
                                        <td><?= $Diagnostico->getDescripcion(); ?></td>
                                    </tr>
                                </tbody>
                            </table>
                            </p>
                        </div>
                    </div>
                    <div class="row">&nbsp;</div>
                    <div class="row justify-content-start">
                        <div class="col">
                            <input type ="hidden" value="<?= $Diagnostico->getId(); ?>" name="id" />
                            <input type ="submit" class="btn btn-success" value="Eliminar Diagnostico" />
                            <a href="diagnosticos.php"><input type="button" class="btn btn-outline-danger" value="Cancelar"></a>
                        </div>
                    </div>
                </form>
                </div>
            </div>   



        </div>

        <?php include_once '../gui/footer.php'; ?>
    </body>
</html>






