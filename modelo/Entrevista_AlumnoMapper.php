<?php

include_once 'BDMapper.php';

class Entrevista_AlumnoMapper extends BDMapper{

    const NOMBRE_TABLA = "entrevista_alumno";
    const NOMBRE_VIEW = "vwentrevista_alumno";

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
     * @param Entrevista_Alumno $Entrevista_Alumno 
     *
     */
    public function insert($Entrevista_Alumno) {
        
        $this->query = "INSERT INTO {$this->nombreTabla} VALUES ("
                . "NULL, "
                . "'{$Entrevista_Alumno->getId_alumno()}', "
                . "'{$Entrevista_Alumno->getId_entrevista()}',"
                . ")";
        $this->resultset = $this->bdconexion->query($this->query);

        return $this->resultset;
    }
    /**
     * 
     * @param Int $id_
     * @return Int Numero de filas eliminadas.
     */
    public function delete($id_) {
        $this->query = "DELETE FROM {$this->nombreTabla} "
                . "WHERE {$this->nombreAtributoId} = {$id_}";

        $this->resultset = $this->bdconexion->query($this->query);
        return $this->resultset;
    }
    
}