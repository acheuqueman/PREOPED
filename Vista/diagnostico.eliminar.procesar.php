<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
    //var_dump($_POST['id']);
    include_once '../modelo/Diagnostico.class.php';
    include_once '../modelo/DiagnosticoMapper.php';
    $Mapper = new DiagnosticoMapper();
    //var_dump($Mapper->findById($_POST['id']));
    $Diagnostico = new Diagnostico($Mapper->findById($_POST['id']));
    //var_dump($Diagnostico);
    $idDiagnosticoCreado = $Mapper->delete($Diagnostico);
    var_dump($idDiagnosticoCreado);
    
