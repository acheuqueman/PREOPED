<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);


// Prueba
include_once '../modelo/FamiliarMapper.php';

$mapperIdNoExistente = new FamiliarMapper();
$mapperIdExistente = new FamiliarMapper();

$resultadoIdExistente = $mapperIdExistente->findById(1);
$resultadoIdNoExistente = $mapperIdNoExistente->findById(-1);