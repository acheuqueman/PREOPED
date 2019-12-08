<?php
include_once "BDConexion.php";
class Coleccion {
    
    protected $coleccion;
    protected $mapper;
    
    protected $resultset;
    protected $query;
    protected $bdconexion;

    function __construct() {
        $this->bdconexion = new BDConexion();
    }

    function getColeccion() {
        return $this->coleccion;
    }


}
