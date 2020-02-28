<?php

include_once 'BDMapper.php';

class Alumno_DiagnosticoMapper extends BDMapper {
    
    const NOMBRE_TABLA = "alumno_diagnostico";
    const NOMBRE_VIEW = "vwalumno_diagnostico";
    
    protected $nombreView;

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
     * @param Alumno_Diagnostico $Alumno_Diagnostico
     */
    public function insert($Alumno_Diagnostico) {
        
        $this->query = "INSERT INTO {$this->nombreTabla} VALUES ("
                . "NULL, "
                . "'{$Alumno_Diagnostico->getProfesional_diagnostico()}', "
                . "'{$Alumno_Diagnostico->getId_diagnostico()}', "
                . "'{$Alumno_Diagnostico->getId_alumno()}'"
                . ")";
                
        $this->resultset = $this->bdconexion->query($this->query);
        return $this->resultset;
    }

    /**
     * 
     * @param Int $id
     * @return Int Numero de filas eliminadas.
     */
    public function delete($id_) {
        
        $this->query = "DELETE FROM {$this->nombreTabla} "
        . "WHERE {$this->nombreAtributoId} = {$id_}";
                
        $this->resultset = $this->bdconexion->query($this->query);
        return $this->resultset;
    }

}
