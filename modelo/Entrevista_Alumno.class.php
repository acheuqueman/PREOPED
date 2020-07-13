<?php
include_once 'ModeloDatosGenerico.php';

class Entrevista_Alumno extends ModeloDatosGenerico {
    
    protected $id;
    protected $id_entrevista;
    protected $id_alumno; 
    protected $entrevista;
    protected $alumno; 

    function __construct($array){
        parent::mapeoArrayAtributos($array);
    }
    
    function getId() {
        return $this->id;
    }

    function getId_entrevista() {
        return $this->id_entrevista;
    }

    function getId_alumno() {
        return $this->id_alumno;
    }

    function setId($id) {
        $this->id = $id;
    }

    function setId_entrevista($id_entrevista) {
        $this->id_entrevista = $id_entrevista;
    }

    function setId_alumno($id_alumno) {
        $this->id_alumno = $id_alumno;
    }

    function getEntrevista() {
        return $this->entrevista;
    }

    function getAlumno() {
        return $this->alumno;
    }

    function setEntrevista($entrevista) {
        $this->entrevista = $entrevista;
    }

    function setAlumno($alumno) {
        $this->alumno = $alumno;
    }
}