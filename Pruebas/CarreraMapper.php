<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);


// Prueba
include_once '../modelo/CarreraMapper.php';

$mapperIdNoExistente = new CarreraMapper();
$mapperIdExistente = new CarreraMapper();

$resultadoIdExistente = $mapperIdExistente->findById(1);
var_dump($resultadoIdExistente);
$resultadoIdNoExistente = $mapperIdNoExistente->findById(-1);
var_dump($resultadoIdNoExistente);