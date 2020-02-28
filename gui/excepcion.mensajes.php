<?php
/*
 * Mensajes de confirmación, por acierto o error. Se exhibe al procesar operaciones en la base de datos. 
 */
?>
<?php if ($idObjetoCreado) { ?>
    <p class="alert alert-success">Operaci&oacute;n realizada con &eacute;xito.</p>
    <p>Elija una de las opciones a continuaci&oacute;n.</p>
<?php } ?>
<?php if (!$idObjetoCreado) { ?>
    <p class="alert alert-danger">Hubo un error</p>
    <p>No fue posible realizar la operaci&oacute;n. Por favor, intente nuevamente. Si el problema persiste, contacte el administrador del sistema.</p>
<?php } ?>                                        
