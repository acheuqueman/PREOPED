<?php

include_once 'Coleccion.php';
include_once 'Entrevista.class.php';

class ColeccionEntrevista extends Coleccion {
    
    public function __construct() {
        parent::__construct();
        $this->setColeccion();
    }
    
    public function setColeccion() {
        $this->query = "SELECT * "
                ."FROM entrevista " ;
        $this->resultset = $this->bdconexion->query($this->query);
        
        for ($x = 0; $x < $this->resultset->num_rows; $x++) {
            $this->coleccion[] = new Entrevista($this->resultset->fetch_assoc());
        }
    }
    
    /**
     * 
     * @return Entrevista[]
     */
    public function getColeccion(){
        return parent::getColeccion();
    }
    
}