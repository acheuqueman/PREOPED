<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);


// Prueba
include_once '../modelo/CarreraMapper.php';
include_once '../modelo/Carrera.class.php';

$Cmapper = new CarreraMapper();

$Carrera = new Carrera($Cmapper->findById(1));
//var_dump($resultadoIdExistente
//
//$resultadoIdNoExistente = $mapperIdNoExistente->findById(-1);
//var_dump($resultadoIdNoExistente);

$asignaturas = $Cmapper->findAsignaturas($Carrera->getId());
var_dump($asignaturas);