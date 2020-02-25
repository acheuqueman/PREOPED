<?php include_once '../modelo/ColeccionDiagnostico.php'; ?>
<?php $Coleccion = new ColeccionDiagnostico(); ?>
<?php
/*
 *  Reemplazado por directamente usar la variable $Alumno de actualizar.php
 *  Conseguir datos del diagnostico
 *  Hacer update de alumno
 * 
$Alumno = null;
if (isset($_GET['accion']) && ($_GET['accion'] == "actualizar")) {
    include_once '../modelo/Alumno.class.php';
    include_once '../modelo/AlumnoMapper.php';
    $Mapper = new AlumnoMapper();
    $Alumno = new Alumno($Mapper->findById($_GET['id']));
}
*/
?>

<div class="form-group">
    <div class="form-row">
        <label for="nombre">Datos Personales</label> 
    </div>
    <div class="form-row">
        <div class="col-6">                                        
            <input type="text" class="form-control" id="nombre" name="nombre" value="<?= isset($Alumno) ? $Alumno->getNombre() : null; ?>" required="">
            <small id="nombreHelp" class="form-text text-muted">
                Nombre Completo
            </small>                   
        </div>
        <div class="col-2">                                        
            <input type="number" class="form-control" id="anio_ingreso" name="anio_ingreso" value="<?= isset($Alumno) ? $Alumno->getAnio_Ingreso() : null; ?>" >
            <small id="anio_ingresoHelp" class="form-text text-muted">
                A&ntilde;o de ingreso
            </small>                   
        </div>
        <div class="col-2">                                        
            <input type="number" class="form-control" id="dni" name="dni" value="<?= isset($Alumno) ? $Alumno->getDni() : null; ?>" required="">
            <small id="dniHelp" class="form-text text-muted">
                DNI
            </small>                   
        </div>
        <div class="col-2">                                        
            <input type="number" class="form-control" id="cud" name="cud" value="<?= isset($Alumno) ? $Alumno->getCUD() : null; ?>" required="">
            <small id="cudHelp" class="form-text text-muted">
                CUD
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
            <input type="email" class="form-control" id="email" name="email" value="<?= isset($Alumno) ? $Alumno->getEmail() : null; ?>" required="">
            <small id="emailHelp" class="form-text text-muted">
                Correo electr&oacute;nico
            </small>                   
        </div>
        <div class="col-4">                                        
            <input type="text" class="form-control" id="telefono" name="telefono" value="<?= isset($Alumno) ? $Alumno->getTelefono() : null; ?>" required="">
            <small id="telefonoHelp" class="form-text text-muted">
                N&uacute;mero de tel&eacute;fono
            </small>                   
        </div>
    </div>
</div>


<div class="form-group">
    <div class="form-row">
        <label for="diagnostico">Diagn&oacute;sticos</label> 
    </div>
    <div class="form-row">
        <div class="col-6">                                        

            <select class="form-control" id="id_diagnostico" name="id_diagnostico">
                <?php foreach ($Coleccion->getColeccion() as $Diagnostico) { ?>
                    <option value="<?= $Diagnostico->getId(); ?>"><?= $Diagnostico->getDiagnostico() . " (" . $Diagnostico->getTipo_discapacidad() . ")" ?></option>
                <?php } ?>
            </select>
            <small id="id_diagnosticoHelp" class="form-text text-muted">
                Elija un diagn&oacute;stico
            </small>                   
        </div>



        <div class="col-6">                                        
            <input type="text" class="form-control" id="profesional_diagnostico" name="profesional_diagnostico" value="" required="">
            <small id="profesional_diagnosticoHelp" class="form-text text-muted">
                Nombre del Profesional que diagnostic&oacute; el alumno
            </small>                   
        </div>
    </div>
</div>

<div class="form-row">&nbsp;</div>
<input type ="submit" class="btn btn-success">  
<a href="diagnosticos.php"><input type="button" class="btn btn-outline-danger" value="Salir" /></a>

