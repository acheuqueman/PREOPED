<?php

include_once 'Persona.class.php';

class Familiar extends Persona {
    protected $id_persona;
    protected $parentesco;
    protected $nombreFamiliar;
    protected $id_alumno;
            
    
    function __construct($array) {
        parent::mapeoArrayAtributos($array); //?
    }

    function getId_persona() {
        return $this->id_persona;
    }

    function getParentesco() {
        return $this->parentesco;
    }

    function getNombreFamiliar() {
        return $this->nombreFamiliar;
    }

    function getId_alumno() {
        return $this->id_alumno;
    }

    function setId_persona($id_persona) {
        $this->id_persona = $id_persona;
    }

    function setParentesco($parentesco) {
        $this->parentesco = $parentesco;
    }

    function setNombreFamiliar($nombreFamiliar) {
        $this->nombreFamiliar = $nombreFamiliar;
    }

    function setId_alumno($id_alumno) {
        $this->id_alumno = $id_alumno;
    }


}