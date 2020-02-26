<?php
include_once '../lib/Constantes.Class.php';

include_once '../modelo/Alumno.class.php';
include_once '../modelo/AlumnoMapper.php';

$Alumno = new Alumno($_POST);
$Mapper = new AlumnoMapper();
$idObjetoCreado = $Mapper->update($Alumno);
?>

<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">        <link rel="stylesheet" href="../lib/bootstrap-4.1.1-dist/css/bootstrap.css" />
        <link rel="stylesheet" href="../lib/open-iconic-master/font/css/open-iconic-bootstrap.css" />
        <script type="text/javascript" src="../lib/JQuery/jquery-3.3.1.js"></script>
        <script type="text/javascript" src="../lib/bootstrap-4.1.1-dist/js/bootstrap.min.js"></script>
        <title><?= Constantes::NOMBRE_SISTEMA; ?> - Alumnos</title>
    </head>
    <body>
        <?php include_once '../gui/navbar.php'; ?>
        <div class="container-fluid">
            <div class="card">
                <div class="card-header">
                    <h5 class="oi oi-plus"> Actualizar Alumno</h5>
                </div>
                <div class="card-body">
                    <?php if ($idObjetoCreado) { ?>
                        <p class="alert alert-success">Operaci&oacute;n realizada con &eacute;xito.</p>
                        <p>Alumno actualizado correctamente.</p>
                    <?php } ?>
                    <?php if (!$idObjetoCreado) { ?>
                        <p class="alert alert-danger">Hubo un error</p>
                        <p>No fue posible actualizado el Alumno. Por favor, intente nuevamente. Si el problema persiste, contacte el administrador del sistema.</p>
                    <?php } ?>                                        
                </div>
                <div class="card-footer">
                    <p>Opciones:</p>
                    <p>
                        <a href="alumno.crear.php"><input class="btn btn-outline-success" value="Cargar otro Alumno" /></a>
                        <a href="alumno.actualizar.php?id=<?= $idObjetoCreado; ?>"><input class="btn btn-outline-success" value="Ver Alumno" /></a>
                        <a href="alumnos.php"><input class="btn btn-outline-danger" value="Salir" /></a>
                    </p>
                </div>
            </div>   
            <div class="row">&nbsp;</div>
        </div>
        <?php include_once '../gui/footer.php'; ?>
    </body>
</html>