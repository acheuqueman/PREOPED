<?php

include_once 'BDMapper.php';

class FamiliarMapper extends BDMapper {

    const NOMBRE_TABLA = "familiar";
    const NOMBRE_VIEW = "vwfamiliar";

    protected $nombreview;

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
     * @param Familiar $Familiar 
     *
     */
    public function insert($Familiar) {
        
        $this->query = "INSERT INTO {$this->nombreTabla} VALUES ("
                . "NULL, "
                . "'{$Familiar->getId_alumno()}', "
                . "'{$Familiar->getId_persona()}',"
                . "'{$Familiar->getParentesco()}'" 
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
