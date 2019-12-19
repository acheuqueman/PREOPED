<!-- Los estilos de navbar son definidos en la libreria css de Bootstrap -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark" style="padding: 20px 5%">

    <a class="navbar-brand" href="../Vista/index.php">
        <img src="../lib/logopreoped.png" width="35" height="35" class="d-inline-block align-top" alt="">
        <?= Constantes::NOMBRE_SISTEMA; ?>
    </a>

    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="toggle navigation">
        <span class="navbar-toggler-icon"></span>   
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ml-auto">

            <li class = "nav-item md-3 ml-3">
                <a class = "nav-link btn btn-info" href = "../app">
                    <span class = "oi oi-person" /> Alumnos
                </a>
            </li>


            <li class = "nav-item md-3 ml-3">
                <a class = "nav-link btn btn-info" href = "../app">
                    <span class = "oi oi-graph" /> Entrevistas
                </a>
            </li>


            <li class="nav-item dropdown md-3 ml-3">
                <a class="nav-link dropdown-toggle btn btn-info" href="#"  id="navbarDropdownConfig" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <span class="oi oi-cog" /> Configuracion
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdownUsuarios">
                    <a class="dropdown-item" href="../Vista/diagnosticos.php">
                       <span class="oi oi-cog" />  Diagnosticos
                </a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="../Vista/carreras.php">
                    <span class = "oi oi-cog" /> Carreras
                </a>
                <div class="dropdown-divider"></div>
                <?php // } ?>
                <a class="dropdown-item" href="../Vista/asignaturas.php">
                    <span class="oi oi-cog" /> Asignaturas
                </a>
                <?php // } ?>
               <!-- <a class="dropdown-item" href="../app">
                    <span class="oi oi-cog" /> Informes
                </a>-->
            </div>
        </li>

        <?php // if (ControlAcceso::verificaPermiso(PermisosSistema::PERMISO_USUARIOS)) { ?>
        <li class="nav-item dropdown md-3 ml-3">
            <a class="nav-link dropdown-toggle btn btn-info" href="#"  id="navbarDropdownUsuarios" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span class="oi oi-person" /> Usuarios
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdownUsuarios">
                <a class="dropdown-item" href="../uargflow/usuarios.php">
                    <span class="oi oi-person" /> Usuarios
                </a>
                <div class="dropdown-divider"></div>
                <?php // if (ControlAcceso::verificaPermiso(PermisosSistema::PERMISO_ROLES)) { ?>
                <a class="dropdown-item" href="../uargflow/roles.php">
                    <span class = "oi oi-graph" /> Roles
                </a>
                <div class="dropdown-divider"></div>
                <?php // } ?>
                <?php // if (ControlAcceso::verificaPermiso(PermisosSistema::PERMISO_PERMISOS)) { ?>
                <a class="dropdown-item" href="../uargflow/permisos.php">
                    <span class="oi oi-lock-locked" /> Permisos
                </a>

                <?php // } ?>
            </div>
        </li>
        <?php // } ?>


        <li class="nav-item ml-3">
            <a class="nav-link btn btn-info" href="../uargflow/salir.php">
                <span class="oi oi-account-logout" /> 
                Salir
            </a>
        </li>
    </ul>
</div>
</nav>


<div class="alert alert-info alert-dismissible fade show" role="alert" style="padding-left: 5%; padding-right: 5% ">
    Ud. est&aacute; conectad@ como <strong><?= $_SESSION['usuario']->nombre; ?></strong>.
    <button type="button" class="close" data-dismiss="alert" aria-label="Close" style="padding-right: 5%">
        <span aria-hidden="true">&times;</span>
    </button>
</div>
