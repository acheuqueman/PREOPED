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
    include_once '../modelo/Carrera.class.php';
    include_once '../modelo/CarreraMapper.php';
    $Mapper = new CarreraMapper();
    //var_dump($Mapper->findById($_POST['id']));
    $Carrera = new Carrera($Mapper->findById($_POST['id']));
    //var_dump($Diagnostico);
    $CarreraEliminada = $Mapper->delete($Carrera);
    var_dump($CarreraEliminada);
    
