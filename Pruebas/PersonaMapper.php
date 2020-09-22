<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);


// Prueba
include_once '../modelo/PersonaMapper.php';

$mapperIdNoExistente = new PersonaMapper();
$mapperIdExistente = new PersonaMapper();

$resultadoIdExistente = $mapperIdExistente->findById(1);
$resultadoIdNoExistente = $mapperIdNoExistente->findById(-1);