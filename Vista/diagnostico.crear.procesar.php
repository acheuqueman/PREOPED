<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
    //var_dump($_POST);
    include_once '../modelo/Diagnostico.class.php';
    include_once '../modelo/DiagnosticoMapper.php';
    $Diagnostico = new Diagnostico($_POST);
    //var_dump($Diagnostico);
    $Mapper = new DiagnosticoMapper();
    $idDiagnosticoCreado = $Mapper->insert($Diagnostico);
    var_dump($idDiagnosticoCreado);
    
  