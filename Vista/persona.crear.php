<?php 
include_once '../lib/Constantes.Class.php';

?>

<html>
    <head>
        <?php include_once '../lib/includesCss.php'; ?>
        <?php include_once '../lib/includesJs.php'; ?>
        <title><?= Constantes::NOMBRE_SISTEMA; ?> - Gesti&oacute;n de Alumnos</title>
    </head>
    <body>
        <?php include_once '../gui/navbar.php'; ?>

        <div class="container-fluid">

            <div class="card">
                <div class="card-header">
                    <h5 class="oi oi-plus"> Nuevo Familiar</h5>
                </div>
                <form action="persona.crear.procesar.php" method="POST">
                    <div class="card-body">
                        <div class="form-group">
                            <div class="form-row">
                                <label for="nombre">Datos Personales</label> 
                            </div>
                            <div class="form-row">
                                <div class="col-6">                                        
                                    <input type="text" class="form-control" id="nombre" name="nombre" required="">
                                    <small id="nombreHelp" class="form-text text-muted">
                                        Nombre Completo
                                    </small>                   
                                </div>
                                <div class="col-2">                                        
                                    <input type="number" class="form-control" id="dni" name="dni" required="">
                                    <small id="dniHelp" class="form-text text-muted">
                                        DNI
                                    </small>                   
                                </div>
                            </div>
                        </div>


                        <div class="form-group">
                            <div class="form-row">
                                <label for="email">Datos de Contacto</label> 
                            </div>
                            <div class="form-row">
                                <div class="col-8">                                        
                                    <input type="email" class="form-control" id="email" name="email" required="">
                                    <small id="emailHelp" class="form-text text-muted">
                                        Correo electr&oacute;nico
                                    </small>                   
                                </div>
                                <div class="col-4">                                        
                                    <input type="text" class="form-control" id="telefono" name="telefono" required="">
                                    <small id="telefonoHelp" class="form-text text-muted">
                                        N&uacute;mero de tel&eacute;fono
                                    </small>                   
                                </div>
                            </div>
                        </div>

                        <div class="form-row">&nbsp;</div>
                        <input type ="submit" class="btn btn-success">  
                        <a href="alumnos.php"><input type="button" class="btn btn-outline-danger" value="Salir" /></a>
                    </div>
                </form>
            </div>
        </div>
        <?php include_once '../gui/footer.php'; ?>
    </body>
</html>