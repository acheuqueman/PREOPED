<?php
include_once '../lib/Constantes.Class.php';
include_once '../modelo/Diagnostico.class.php';
include_once '../modelo/DiagnosticoMapper.php';
$Mapper = new DiagnosticoMapper();
$Diagnostico = new Diagnostico($Mapper->findById($_GET["id"]));

?>

<html>
    <head>
        <?php include_once '../lib/includesCss.php'; ?>
        <?php include_once '../lib/includesJs.php'; ?>
        <title><?= Constantes::NOMBRE_SISTEMA; ?> - Diagn&oacute;sticos</title>
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






