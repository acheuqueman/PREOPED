<?php

include_once 'Persona.class.php';

class Familiar extends Persona {

    protected $parentesco;
    protected $nombreFamiliar;
    
    
    function __construct($array) {
        parent::mapeoArrayAtributos($array); //?
    }

    function getParentesco() {
        return $this->parentesco;
    }

    function setParentesco($parentesco) {
        $this->parentesco = $parentesco;
    }
}