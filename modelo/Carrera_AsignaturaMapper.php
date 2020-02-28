<?php

include_once 'BDMapper.php';

class Carrera_AsignaturaMapper extends BDMapper{

    const NOMBRE_TABLA = "carrera_asignatura";
    const NOMBRE_VIEW = "vwcarrera_asignatura";
    
    public function __construct() {
        $this->nombreTabla = self::NOMBRE_TABLA;
        $this->nombreAtributoId = "id";
        parent::__construct();
    }

    public function findById($id) {
        $this->nombreTabla = self::NOMBRE_VIEW;
        return parent::findById($id);
    }
    
    /**
     * 
     * @param Carrera_Asignatura $Carrera_Asignatura
     */
    public function insert($Carrera_Asignatura) {
        
        $this->query = "INSERT INTO {$this->nombreTabla} VALUES ("
                . "NULL, "
                . "'{$Carrera_Asignatura->getId_asignatura()}', "
                . "'{$Carrera_Asignatura->getId_carrera()}'"
                . ")";
                
        $this->resultset = $this->bdconexion->query($this->query);
        return $this->resultset;
    }

    

}