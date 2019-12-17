<?php
    //var_dump($_POST);
    include_once '../modelo/Carrera.class.php';
    include_once '../modelo/CarreraMapper.php';
    $Carrera = new Carrera($_POST);
    //var_dump($Carrera);
    $Mapper = new CarreraMapper();
    $idCarreraCreado = $Mapper->insert($Carrera);
    var_dump($idCarreraCreado);
    