<?php

include_once '../modelo/Alumno.class.php';
include_once '../modelo/AlumnoMapper.php';

$Alumno = new Alumno($_POST);
$Mapper = new AlumnoMapper();
$idObjetoCreado = $Mapper->insert($Alumno);

include_once '../modelo/Alumno_DiagnosticoMapper.php';
include_once '../modelo/Alumno_Diagnostico.class.php';

$Diagnostico = new Alumno_Diagnostico($_POST);
$Diagnostico->setIdAlumno($idObjetoCreado);
$Alumno->addDiagnostico($Diagnostico);

$DiagnosticoMapper = new Alumno_DiagnosticoMapper();
$DiagnosticoMapper->insert($Diagnostico);

die();
