<?php
include_once '../lib/ControlAcceso.Class.php';
ControlAcceso::requierePermiso(PermisosSistema::PERMISO_PERMISOS);
?>
<div class="row">&nbsp;</div>
<div class="row">
    <input type="hidden" name="id" value="<?= isset($Carrera) ? $Carrera->getId() :null; ?>">
    <div class="col-sm-4">
        <div class="card">
            <div class="card-header">Nombre Asignatura</div>
            <div class="card-body">
                <div class="input-group mb-3">
                    <input type="text" class="form-control" name="nombre" value="<?= isset($Carrera) ? $Carrera->getNombre() : null; ?>">
                </div>
            </div>
        </div>
    </div>                                            
</div>
<div class="row">&nbsp;</div>
<div class="row ">
    <div class="col">
        <input type ="submit" class="btn btn-success" />  
        <a href="carreras.php"><input type="button" class="btn btn-outline-danger" value="Salir" /></a>
    </div>
</div>
<div class="row">&nbsp;</div>





