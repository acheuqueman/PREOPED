<?php
include_once '../lib/Constantes.Class.php';
include_once '../modelo/Asignatura.class.php';
include_once '../modelo/AsignaturaMapper.php';

$Mapper = new AsignaturaMapper();
$Objeto = new Asignatura($Mapper->findById($_POST['id']));
$ObjetoEliminado = $Mapper->delete($Objeto);
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
                    <?php if ($ObjetoEliminado) { ?>
                        <p class="alert alert-success">Operaci&oacute;n realizada con &eacute;xito.</p>
                        <p>Asignatura eliminado correctamente.</p>
                    <?php } ?>
                    <?php if (!$ObjetoEliminado) { ?>
                        <p class="alert alert-danger">Hubo un error</p>
                        <p>No fue posible eliminar la Asignatura. Por favor, intente nuevamente. Si el problema persiste, contacte el administrador del sistema.</p>
                    <?php } ?>                                        
                </div>
                <div class="card-footer">
                    <p>Opciones:</p>
                    <p>
                        <a href="asignaturas.php"><input class="btn btn-outline-danger" value="Salir" /></a>
                    </p>
                </div>
            </div>   
        </div> 


        <div class="row">&nbsp;</div>


    </div>

    <?php include_once '../gui/footer.php'; ?>
</body>
</html>



