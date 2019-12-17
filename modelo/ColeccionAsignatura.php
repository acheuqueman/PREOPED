<?php

include_once 'Coleccion.php';
include_once 'AsignaturaMapper.php';
include_once 'Asignatura.class.php';

class ColeccionAsignatura extends Coleccion {
    
    public function __construct() {
        parent::__construct();
        $this->mapper = new AsignaturaMapper();
        $this->setColeccion();
    }
    
    public function setColeccion() {
        $this->query = "SELECT * "
                ."FROM ".$this->mapper->getNombreTabla();
        $this->resultset = $this->bdconexion->query($this->query);
        
        for ($x = 0; $x < $this->resultset->num_rows; $x++) {
            $this->coleccion[] = new Asignatura($this->resultset->fetch_assoc());
        }
    }
    
    /**
     * 
     * @return Diagnostico[]
     */
    public function getColeccion(){
        return parent::getColeccion();
    }
    
}