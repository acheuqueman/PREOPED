<?php

class Producto {

    protected $id;
    protected $descripcion;
    protected $descartable;
    
    function __construct($id, $descripcion, $descartable) {
        $this->id = $id;
        $this->descripcion = $descripcion;
        $this->descartable = $descartable;
    }
    function getId() {
        return $this->id;
    }

    function getDescripcion() {
        return $this->descripcion;
    }

    function getDescartable() {
        return $this->descartable;
    }

    function setId($id) {
        $this->id = $id;
    }

    function setDescripcion($descripcion) {
        $this->descripcion = $descripcion;
    }

    function setDescartable($descartable) {
        $this->descartable = $descartable;
    }



}
