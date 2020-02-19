<?php
include_once 'ModeloDatosGenerico.php';

class Diagnostico extends ModeloDatosGenerico {
    
    protected $id;
    protected $diagnostico;
    protected $tipo_discapacidad; 
    protected $descripcion; 

    function __construct($array){
        parent::mapeoArrayAtributos($array);
    }
    
    function getId() {
        return $this->id;
    }

    function getDiagnostico() {
        return $this->diagnostico;
    }

    function getTipo_discapacidad() {
        return $this->tipo_discapacidad;
    }

    function getDescripcion() {
        return $this->descripcion;
    }

    function setId($id) {
        $this->id = $id;
    }

    function setDiagnostico($diagnostico) {
        $this->diagnostico = $diagnostico;
    }

    function setTipo_discapacidad($tipo_discapacidad) {
        $this->tipo_discapacidad = $tipo_discapacidad;
    }

    function setDescripcion($descripcion) {
        $this->descripcion = $descripcion;
    }


}