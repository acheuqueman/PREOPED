<?php
    //var_dump($_POST);
    include_once '../modelo/Asignatura.class.php';
    include_once '../modelo/AsignaturaMapper.php';
    $Asignatura = new Asignatura($_POST);
    //var_dump($Carrera);
    $Mapper = new AsignaturaMapper();
    $idAsignaturaCreado = $Mapper->update($Asignatura);
    var_dump($idAsignaturaCreado);
    