<?php
include_once '../lib/Constantes.Class.php';
include_once '../modelo/Entrevista.class.php';
include_once '../modelo/EntrevistaMapper.php';
include_once '../modelo/Alumno.class.php';

$Mapper = new EntrevistaMapper();
$Entrevista = new Entrevista($Mapper->findById($_GET['id']));
$Entrevista->setEntrevistados($Mapper->findEntrevistados($Entrevista->getId()));
// $Entrevista->getEntrevistados() aca estan los entrevistados de la entrevista
?>


