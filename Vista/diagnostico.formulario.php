<?php
include_once '../lib/ControlAcceso.Class.php';
ControlAcceso::requierePermiso(PermisosSistema::PERMISO_PERMISOS);
?>
<div class="row">&nbsp;</div>
<div class="row">
    <input type="hidden" name="id" value="<?= isset($Diagnostico) ? $Diagnostico->getId() :null; ?>">
    <div class="col-sm-4">
        <div class="card">
            <div class="card-header">Diagnostico</div>
            <div class="card-body">
                <div class="input-group mb-3">
                    <input type="text" class="form-control" name="diagnostico" required="" value="<?= isset($Diagnostico) ? $Diagnostico->getDiagnostico() : null; ?>">
                </div>
            </div>
        </div>
    </div>
    <div class="col-sm-4">
        <div class="card">
            <div class="card-header">Tipo de Discapacidad</div>
            <div class="card-body">
                <div class="input-group mb-3">
                    <select class="custom-select" name="tipo_discapacidad">
                        <optgroup label="Elija">Elija</optgroup>
                        <option value="Motriz" <?= isset($Diagnostico) ? ($Diagnostico->getTipo_discapacidad()) == "Motriz" ? "selected" : null : null ; ?>>Motriz</option>
                        <option value="Psicologica" <?= isset($Diagnostico) ? ($Diagnostico->getTipo_discapacidad()) == "Psicologica" ? "selected" : null :null; ?>>Psicol&oacute;gica</option>
                        <option value="Visual" <?= isset($Diagnostico) ? ($Diagnostico->getTipo_discapacidad()) == "Visual" ? "selected" : null : null; ?>>Visual</option>
                    </select>
                </div>
            </div>
        </div>
    </div>
    <div class="col-sm-4">
        <div class="card">
            <div class="card-header">Descripcion</div>
            <div class="card-body">
                <div class="input-group">
                    <textarea class="form-control" name="descripcion" required=""><?= isset($Diagnostico) ? $Diagnostico->getDescripcion() : null; ?></textarea>
                </div>
            </div>
        </div>
    </div>
</div>

</div>
<div class="row ">
    <div class="col">
        <input type ="submit" class="btn btn-success" />  
        <a href="diagnosticos.php"><input type="button" class="btn btn-outline-danger" value="Salir" /></a>
    </div>
</div>

<div class="row">&nbsp;</div>





