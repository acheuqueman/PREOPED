<?php
$Diagnostico = null;
if (isset($_GET['accion']) && ($_GET['accion'] == 'actualizar')) {
    include_once '../modelo/Diagnostico.class.php';
    include_once '../modelo/DiagnosticoMapper.php';

    $Mapper = new DiagnosticoMapper();
    $Diagnostico = new Diagnostico($Mapper->findById($_GET['id']));
}
?>
<div class="row">&nbsp;</div>
<div class="row">
    <div class="col-sm-4">
        <div class="card">
            <div class="card-header">Diagnostico</div>
            <div class="card-body">
                <div class="input-group mb-3">
                    <input type="text" class="form-control" name="diagnostico" required="" value="<?= isset($Diagnostico) ? $Diagnostico->getNombre() : null; ?>">
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





