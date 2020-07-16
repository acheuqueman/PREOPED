<?php
include_once '../lib/Constantes.Class.php';
include_once '../modelo/Entrevista.class.php';
include_once '../modelo/EntrevistaMapper.php';
include_once '../modelo/Alumno.class.php';
include_once '../modelo/AlumnoMapper.php';


$Mapper = new EntrevistaMapper();
$Entrevista = new Entrevista($Mapper->findById($_GET['id']));
//@todo set entrevistados

$MapperAlumno = new AlumnoMapper();
$Entrevistados;
foreach ($Mapper->findEntrevistados($Entrevista->getId()) as $entrevista_alumno) {
    $Entrevistados[] = new Alumno($MapperAlumno->findById($entrevista_alumno->$id_alumno));
}
$Entrevista->setEntrevistados($Entrevistados);
var_dump($Entrevista->getEntrevistados());
?>


