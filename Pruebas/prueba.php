<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

//Prueba relacion Cursa
include_once 'Asignatura.class.php';
include_once 'Cursa.class.php';
include_once 'Alumno.class.php';

$alumnoArray["nombre"] = "Alumno";
$A1 = new Alumno($alumnoArray);
$cursaArray["alumno"] = $A1;
$arrayAsig["nombre"] = "Asignatura1";
$cursaArray["asignatura"] = new Asignatura($arrayAsig);
$C1 = new Cursa($cursaArray);

//var_dump($C1);
// echo $C1->getAlumno()->getNombre();
// echo $C1->getAsignatura()->getNombre();

include_once 'Diagnostico.class.php';
include_once 'Alumno_Diagnostico.class.php';

$aDiag["diagnostico"] = "diagnostico1";
$D1 = new Diagnostico($aDiag);
$aA_D["diagnostico"] = $D1;
$aA_D["alumno"] = $A1;
$A_D1 = new Alumno_Diagnostico($aA_D);
//var_dump($A_D1);

//Prueba ALumno_DIagnostico
$A_D = $A1->createAlumno_Diagnostico($D1);
//var_dump($A_D);
