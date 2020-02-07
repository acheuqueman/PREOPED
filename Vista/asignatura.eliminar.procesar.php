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
    include_once '../modelo/Asignatura.class.php';
    include_once '../modelo/AsignaturaMapper.php';
    $Mapper = new AsignaturaMapper();
    //var_dump($Mapper->findById($_POST['id']));
    $Asignatura = new Asignatura($Mapper->findById($_POST['id']));
    //var_dump($Diagnostico);
    $AsignaturaEliminada = $Mapper->delete($Asignatura);
    var_dump($AsignaturaEliminada);
    
