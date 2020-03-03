<?php

include_once 'BDMapper.php';

class Alumno_CarreraMapper extends BDMapper {
    
    const NOMBRE_TABLA = "alumno_carrera";
    const NOMBRE_VIEW = "vwalumno_carrera";
    
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
     * @param Alumno_Carrera $Alumno_Carrera
     */
    public function insert($Alumno_Carrera) {
        
        $this->query = "INSERT INTO {$this->nombreTabla} VALUES ("
                . "NULL, "
                . "'{$Alumno_Carrera->getId_alumno()}', "
                . "'{$Alumno_Carrera->getId_carrera()}'"
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
