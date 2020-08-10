<?php
include_once '../modelo/PDFAlumno.php';
$mpdf = new PDFAlumno();
$mpdf->generaPdf();