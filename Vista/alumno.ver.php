<?php
include_once '../lib/Constantes.Class.php';
include_once '../modelo/Alumno.class.php';
include_once '../modelo/AlumnoMapper.php';

$Mapper = new AlumnoMapper();
$Alumno = new Alumno($Mapper->findById($_GET['id']));
?>

<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="../lib/bootstrap-4.1.1-dist/css/bootstrap.css" />
        <link rel="stylesheet" href="../lib/open-iconic-master/font/css/open-iconic-bootstrap.css" />
        <script type="text/javascript" src="../lib/JQuery/jquery-3.3.1.js"></script>
        <script type="text/javascript" src="../lib/bootstrap-4.1.1-dist/js/bootstrap.min.js"></script>
        <title><?= Constantes::NOMBRE_SISTEMA; ?> - Gesti&oacute;n de Alumnos</title>
    </head>
    <body>
        <?php include_once '../gui/navbar.php'; ?>

        <div class="container-fluid">

            <div class="row">

                <div class="col-9">

                    <div class="card">
                        <div class="card-header">
                            <h5 class="oi oi-person"> Datos del Alumno</h5>
                        </div>
                        <div class="card-body">


                            <picture>
                                <!--<source srcset="..." type="image/svg+xml">-->
                                <img src="../lib/manitos.png" style="-webkit-border-radius: 50% !important; -moz-border-radius: 50% !important;  border-radius: 50% !important; border: none; margin-right: 20px" width="200" class="rounded float-left img-fluid img-thumbnail" alt="...">
                            </picture>


                            <div class="form-group">
                                <div class="form-row">
                                    <label for="nombre">Datos Personales</label> 
                                </div>
                                <div class="form-row">
                                    <div class="col-6">                                        
                                        <p><?= $Alumno->getNombre(); ?></p>
                                        <small id="nombreHelp" class="form-text text-muted">
                                            Nombre Completo
                                        </small>                   
                                    </div>
                                    <div class="col-2">                                        
                                        <p><?= $Alumno->getAnio_Ingreso(); ?></p>
                                        <small id="anio_ingresoHelp" class="form-text text-muted">
                                            A&ntilde;o de ingreso
                                        </small>                   
                                    </div>
                                    <div class="col-2">                                        
                                        <p><?= $Alumno->getDni(); ?></p>
                                        <small id="dniHelp" class="form-text text-muted">
                                            DNI
                                        </small>                   
                                    </div>
                                    <div class="col-2">                                        
                                        <p><?= $Alumno->getCud(); ?></p>
                                        <small id="cudHelp" class="form-text text-muted">
                                            CUD
                                        </small>                   
                                    </div>
                                </div>
                            </div>


                            <hr />
                            <div class="form-group">
                                <div class="form-row">
                                    <label for="email">Datos de Contacto</label> 
                                </div>
                                <div class="form-row">
                                    <div class="col-8">                                        
                                        <p><?= $Alumno->getEmail(); ?></p>
                                        <small id="emailHelp" class="form-text text-muted">
                                            Correo electr&oacute;nico
                                        </small>                   
                                    </div>
                                    <div class="col-4">                                        
                                        <p><?= $Alumno->getTelefono(); ?></p>
                                        <small id="telefonoHelp" class="form-text text-muted">
                                            N&uacute;mero de tel&eacute;fono
                                        </small>                   
                                    </div>
                                </div>
                            </div>            

                            <hr />

                            <ul class="nav nav-tabs" id="myTab" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Diagnosticos</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Historial Academico</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact" aria-selected="false">Entrevistas</a>
                                </li>
                            </ul>
                            <div class="tab-content" id="myTabContent">
                                <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                    <p></p>
                                    <h5>Diagnosticos</h5>
                                    <p>Ahi va</p>                                    
                                    <p></p>
                                </div>
                                <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">...</div>
                                <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">...</div>
                            </div>                            


                        </div>
                    </div>
                </div>

                <div class="col-3">


                    <div class="card">
                        <div class="card-header text-white bg-info">
                            <h5 class="oi oi-cog"> Opciones</h5>
                        </div>

                        <div class="card-body">
                            <div class="list-group">
                                <a href="#" class="list-group-item list-group-item-action"><span class="oi oi-document"></span> Descargar Reporte</a>
                                <a href="#" class="list-group-item list-group-item-action"><span class="oi oi-home"></span> Volver a Alumnos</a>
                                <a href="#" class="list-group-item list-group-item-action"><span class="oi oi-home"></span> Volver a Inicio</a>
                            </div>                            
                        </div>

                    </div>                    

                </div>

            </div>



        </div>
        <?php include_once '../gui/footer.php'; ?>
    </body>
</html>