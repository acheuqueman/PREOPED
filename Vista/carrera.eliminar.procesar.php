<?php
include_once '../lib/Constantes.Class.php';

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
    //var_dump($_POST['id']);
    include_once '../modelo/Carrera.class.php';
    include_once '../modelo/CarreraMapper.php';
    $Mapper = new CarreraMapper();
    //var_dump($Mapper->findById($_POST['id']));
    $Carrera = new Carrera($Mapper->findById($_POST['id']));
    //var_dump($Diagnostico);
    $CarreraEliminada = $Mapper->delete($Carrera);
    var_dump($CarreraEliminada);
    
?>

<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">        <link rel="stylesheet" href="../lib/bootstrap-4.1.1-dist/css/bootstrap.css" />
        <link rel="stylesheet" href="../lib/open-iconic-master/font/css/open-iconic-bootstrap.css" />
        <script type="text/javascript" src="../lib/JQuery/jquery-3.3.1.js"></script>
        <script type="text/javascript" src="../lib/bootstrap-4.1.1-dist/js/bootstrap.min.js"></script>
        <title><?= Constantes::NOMBRE_SISTEMA; ?> - Inicio</title>
    </head>
    <body>
        <?php include_once '../gui/navbar.php'; ?>

        <div class="container-fluid">



                            <div class="card">
                                <div class="card-header">
                                    <h5 class="oi oi-trash"> Eliminar Asignatura</h5>
                                </div>
                                <div class="card-body">
                                    <?php if ($CarreraEliminada) { ?>
                                        <p class="alert alert-success">Operaci&oacute;n realizada con &eacute;xito.</p>
                                        <p>Carrera eliminado correctamente.</p>
                                    <?php } ?>
                                    <?php if (!$CarreraEliminada) { ?>
                                        <p class="alert alert-danger">Hubo un error</p>
                                        <p>No fue posible eliminar la Carrera. Por favor, intente nuevamente. Si el problema persiste, contacte el administrador del sistema.</p>
                                    <?php } ?>                                        
                                </div>
                                <div class="card-footer">
                                    <p>Opciones:</p>
                                    <p>
                                        <a href="carreras.php"><input class="btn btn-outline-danger" value="Salir" /></a>
                                    </p>
                                </div>
                            </div>   
                        </div> 

                    
                    <div class="row">&nbsp;</div>


        </div>

        <?php include_once '../gui/footer.php'; ?>
    </body>
</html>