<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);


// Prueba
include_once '../modelo/AlumnoMapper.php';
include_once '../modelo/Alumno.class.php';

$AMaper = new AlumnoMapper();

//Prueba con resultado esperado = DATOS
$AlumnoValido = new Alumno($AMaper->findById(2));

//Prueba con resultado esperado = NULL
$resultadoAlumnoNoExistente = $AMaper->findById(-1);

//Recibe familiares del alumno valido
$familiares = $AMaper->findFamiliares($AlumnoValido->getId());

//Recibe diagnosticos del alumno
$diagnosticos = $AMaper->findDiagnosticos($AlumnoValido->getId());

