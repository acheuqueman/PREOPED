<?php include_once '../lib/Constantes.Class.php'; ?>
<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="../lib/bootstrap-4.1.1-dist/css/bootstrap.css" />
        <link rel="stylesheet" href="../lib/open-iconic-master/font/css/open-iconic-bootstrap.css" />
        <script type="text/javascript" src="../lib/JQuery/jquery-3.3.1.js"></script>
        <script type="text/javascript" src="../lib/bootstrap-4.1.1-dist/js/bootstrap.min.js"></script>

        <title><?= Constantes::NOMBRE_SISTEMA; ?> - Alumnos</title>
    </head>
    <body>
        <?php include_once '../gui/navbar.php'; ?>

        <div class="container-fluid">
            
            <div class="row">
                
                <div class="col-md-9 justify-content-center">
                    <div class="card">
                        <div class="card-header">
                            <h5 class="card-title oi oi-person"> Alumnos</h5>
                        </div>
                        <div class="card-body">
                            <?php include_once 'alumnos.bloque.php'; ?>
                        </div>                            
                    </div>
                </div>



                <div class="col-md-3">
                    
                    <div class="row">
                        <div class="col-md-12">
                            <!-- Evaluar soluciones alternativas -->
                            <?php $_GET['modelo'] = 'alumno'; ?>
                            <?php include_once '../gui/bloqueMenuContextual.php'; ?>
                        </div>
                    </div>

                    <div class="row">&nbsp;</div>

                    <!-- BLOQUE USUARIO LOGUEADO -->
                    <div class="row">
                        <div class="col-md-12">
                            <?php include_once '../gui/bloqueUsuarioLogueado.php'; ?>
                        </div>
                    </div>
                    
                </div>
                
            </div>
            
        </div>

        <?php include_once '../gui/footer.php'; ?>
    </body>
</html>
