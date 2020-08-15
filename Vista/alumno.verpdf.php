<?php
include_once '../lib/ControlAcceso.Class.php';
ControlAcceso::requierePermiso(PermisosSistema::PERMISO_PERMISOS);
include_once '../modelo/PDFAlumno.php';
$mpdf = new PDFAlumno();
$mpdf->generaPdf();