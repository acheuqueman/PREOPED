<?php

include_once 'Coleccion.php';
include_once 'FamiliarMapper.php';
include_once 'Familiar.class.php';

class ColeccionFamiliares extends Coleccion {
    
    public function __construct() {
        parent::__construct();
        $this->mapper = new FamiliarMapper();
        $this->setColeccion();
    }
    
    public function setColeccion() {
        $this->query = "SELECT * "
                ."FROM ".$this->mapper->getNombreTabla();
        $this->resultset = $this->bdconexion->query($this->query);
        
        
        for ($x = 0; $x < $this->resultset->num_rows; $x++) {
            $this->coleccion[] = new Persona($this->resultset->fetch_assoc());
        }
    }
    
    /**
     * 
     * @return Familiar[]
     */
    public function getColeccion(){
        return parent::getColeccion();
    }
    
}

