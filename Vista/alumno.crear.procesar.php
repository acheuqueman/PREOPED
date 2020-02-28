<?php
include_once '../lib/Constantes.Class.php';

include_once '../modelo/Alumno.class.php';
include_once '../modelo/AlumnoMapper.php';

$Alumno = new Alumno($_POST);
$Mapper = new AlumnoMapper();
$idObjetoCreado = $Mapper->insert($Alumno);

include_once '../modelo/Alumno_DiagnosticoMapper.php';
include_once '../modelo/Alumno_Diagnostico.class.php';

$Diagnostico = new Alumno_Diagnostico($_POST);
$Diagnostico->setId_alumno($idObjetoCreado);
$Alumno->addDiagnostico($Diagnostico);

$DiagnosticoMapper = new Alumno_DiagnosticoMapper();
$DiagnosticoMapper->insert($Diagnostico);

?>

<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">        
        <link rel="stylesheet" href="../lib/bootstrap-4.1.1-dist/css/bootstrap.css" />
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
                        <h5 class="oi oi-plus"> Nuevo Alumno</h5>
                    </div>
                    <div class="card-body">
                        <?php include_once '../gui/excepcion.mensajes.php'; ?>
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