<?php

include_once 'ModeloDatosGenerico.php';

class Alumno_Diagnostico extends ModeloDatosGenerico{
    
    protected $id;
    protected $id_alumno;
    protected $id_diagnostico;
    protected $profesional_diagnostico;
    protected $diagnostico;
            
    function __construct($array) {
        parent::mapeoArrayAtributos($array);
    }

    function getId() {
        return $this->id;
    }

    function getId_alumno() {
        return $this->id_alumno;
    }

    function getId_diagnostico() {
        return $this->id_diagnostico;
    }

    function getProfesional_diagnostico() {
        return $this->profesional_diagnostico;
    }

    function getDiagnostico() {
        return $this->diagnostico;
    }

    function setId($id) {
        $this->id = $id;
    }

    function setId_alumno($id_alumno) {
        $this->id_alumno = $id_alumno;
    }

    function setId_diagnostico($id_diagnostico) {
        $this->id_diagnostico = $id_diagnostico;
    }

    function setProfesional_diagnostico($profesional_diagnostico) {
        $this->profesional_diagnostico = $profesional_diagnostico;
    }

    function setDiagnostico($diagnostico) {
        $this->diagnostico = $diagnostico;
    }
    
}

