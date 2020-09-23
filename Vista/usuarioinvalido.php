<?php
include_once '../lib/Constantes.Class.php';
?>

<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="../lib/bootstrap-4.1.1-dist/css/bootstrap.css" />
        <link rel="stylesheet" href="../lib/open-iconic-master/font/css/open-iconic-bootstrap.css" />
        <script type="text/javascript" src="../lib/JQuery/jquery-3.3.1.js"></script>
        <script type="text/javascript" src="../lib/bootstrap-4.1.1-dist/js/bootstrap.min.js"></script>        
        <title><?php echo Constantes::NOMBRE_SISTEMA; ?> - Salir del Sistema</title>
    </head>
    <body>

        <?php include_once '../gui/navbar.php'; ?>

        <div class="container">
            <p></p>
            <div class="card">
                <div class="card-header">
                    <h3>Usuario Invalido</h3>
                </div>
                <div class="card-body">
                    <div class="alert alert-warning" role="alert">
                        Ha intentado ingresar a <?= Constantes::NOMBRE_SISTEMA; ?> con un usuario inv&aacute;lido.
                    </div>
                    <div>
                        <p>Ud. est&aacute; intentando acceder al sistema <b><?= Constantes::NOMBRE_SISTEMA; ?></b> con un correo electr&oacute;nico que no posee acceso al sistema.</p>
                        <p>Por favor, intente nuevamente. Si el problema persiste, ingrese a Gmail y cambie de cuenta.</p>
                        <hr />
                        <h5 class="card-text">Opciones</h5>
                        <a href="<?= Constantes::HOMEURL; ?>">
                            <button type="button" class="btn btn-primary">
                                <span class="oi oi-account-login"></span> Volver a Ingresar
                            </button></a>
                        <a href="http://www.gmail.com">
                            <button type="button" class="btn btn-primary">
                                <span class="oi oi-inbox"></span> Ir a e-mail
                            </button></a>
                        <a href="http://www.uarg.unpa.edu.ar" target="_blank">
                            <button type="button" class="btn btn-primary">
                                <span class="oi oi-globe"></span> Ir a Portal UARG
                            </button></a>
                    </div>
                </div>
            </div>
        </div>
        <?php include_once '../gui/footer.php'; ?>
    </body>
</html>

