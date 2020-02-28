<?php

include_once 'Coleccion.php';
include_once 'CarreraMapper.php';
include_once 'Carrera.class.php';

class ColeccionCarrera extends Coleccion {
    
    public function __construct() {
        parent::__construct();
        $this->mapper = new CarreraMapper();
        $this->setColeccion();
    }
    
    public function setColeccion() {
        $this->query = "SELECT * "
                ."FROM ".$this->mapper->getNombreTabla();
        $this->resultset = $this->bdconexion->query($this->query);
        
        for ($x = 0; $x < $this->resultset->num_rows; $x++) {
            $this->coleccion[] = new Carrera($this->resultset->fetch_assoc());
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
