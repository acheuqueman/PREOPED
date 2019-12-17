<?php

class Repartidor {
    
    protected $id;
    protected $nombre;
    protected $telefono;
    
    function __construct($id, $nombre, $telefono) {
        $this->id = $id;
        $this->nombre = $nombre;
        $this->telefono = $telefono;
    }
    
    function getId() {
        return $this->id;
    }

    function getNombre() {
        return $this->nombre;
    }

    function getTelefono() {
        return $this->telefono;
    }

    function setId($id) {
        $this->id = $id;
    }

    function setNombre($nombre) {
        $this->nombre = $nombre;
    }

    function setTelefono($telefono) {
        $this->telefono = $telefono;
    }



}
