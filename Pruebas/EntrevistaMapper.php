<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);


// Prueba
include_once '../modelo/EntrevistaMapper.php';
include_once '../modelo/Entrevista.class.php';

$EMapper = new EntrevistaMapper();

$EntExistente = new Entrevista($EMapper->findById(1));
//var_dump($resultadoIdExistente);

//$resultadoIdNoExistente = $EMapper->findById(-1);
//var_dump($resultadoIdNoExistente);W

//Devuelve alumnos de la entrevista
$alumnos = $EMapper->findAlumnos($EntExistente->getId());
var_dump($alumnos);
