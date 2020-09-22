<?php
include_once 'ModeloDatosGenerico.php';

class Persona extends ModeloDatosGenerico{

//atributos, getter y setters
    protected $id;
    protected $nombre;
    protected $dni;
    protected $email;
    protected $telefono;
    
    function __construct($array) {
        parent::mapeoArrayAtributos($array);
    }

    function getId() {
        return $this->id;
    }

    function getNombre() {
        return $this->nombre;
    }

    function getDni() {
        return $this->dni;
    }

    function getEmail() {
        return $this->email;
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

    function setDni($dni) {
        $this->dni = $dni;
    }

    function setEmail($email) {
        $this->email = $email;
    }

    function setTelefono($telefono) {
        $this->telefono = $telefono;
    }
}