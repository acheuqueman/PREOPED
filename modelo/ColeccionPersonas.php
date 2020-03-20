<?php

include_once 'Coleccion.php';
include_once 'Persona.class.php';
include_once 'PersonaMapper.php';

class ColeccionPersonas extends Coleccion {
    
    public function __construct() {
        parent::__construct();
        $this->mapper = new PersonaMapper();
        $this->setColeccion();
    }
    
    public function setColeccion() {
        $this->query = "SELECT * "
                . " FROM " . $this->mapper->getNombreTabla()
                . " ORDER BY nombre";
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

