<?php

include_once 'ModeloDatosGenerico.php';

class Alumno_Diagnostico extends ModeloDatosGenerico{
    
    protected $id;
    protected $id_alumno;
    
    protected $id_diagnostico;
    protected $profesional_diagnostico;
    
    function __construct($array) {
        parent::mapeoArrayAtributos($array);
    }

    
    function getId() {
        return $this->id;
    }

    function getProfesional_diagnostico() {
        return $this->profesional_diagnostico;
    }

    function setId($id) {
        $this->id = $id;
    }

    function setProfesional_diagnostico($profesional_diagnostico) {
        $this->profesional_diagnostico = $profesional_diagnostico;
    }

    function getIdDiagnostico() {
        return $this->id_diagnostico;
    }

    function getIdAlumno() {
        return $this->id_alumno;
    }

    function setIdDiagnostico($id_diagnostico) {
        $this->id_diagnostico = $id_diagnostico;
    }

    function setIdAlumno($id_alumno) {
        $this->id_alumno = $id_alumno;
    }


}

