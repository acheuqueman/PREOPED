<?php

include_once 'Coleccion.php';
include_once 'Alumno.class.php';

class ColeccionAlumno extends Coleccion {
    
    public function __construct() {
        parent::__construct();
        $this->setColeccion();
    }
    
    public function setColeccion() {
        $this->query = "SELECT * "
                ."FROM vwalumno " ;
        $this->resultset = $this->bdconexion->query($this->query);
        
        for ($x = 0; $x < $this->resultset->num_rows; $x++) {
            $this->coleccion[] = new Alumno($this->resultset->fetch_assoc());
        }
    }
    
    /**
     * 
     * @return Alumno[]
     */
    public function getColeccion(){
        return parent::getColeccion();
    }
    
}