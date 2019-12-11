<?php
include_once 'BDObjetoGenerico.Class.php';

class ZonaDistribucion extends BDObjetoGenerico{
    protected $id;
    protected $nombre;
    protected $descripcion;
    protected $localidad;
    
    function __construct($id=null) {
        parent::__construct($id, "ZONA_DISTRIBUCION");
    }

    function getId() {
        return $this->id;
    }

    function getNombre() {
        return $this->nombre;
    }

    function getDescripcion() {
        return $this->descripcion;
    }

    function getLocalidad() {
        return $this->localidad;
    }

    function setId($id) {
        $this->id = $id;
    }

    function setNombre($nombre) {
        $this->nombre = $nombre;
    }

    function setDescripcion($descripcion) {
        $this->descripcion = $descripcion;
    }

    function setLocalidad($localidad) {
        $this->localidad = $localidad;
    }


    
}
