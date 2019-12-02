<?php

include_once 'BDMapper.php';

class AsignaturaMapper extends BDMapper{
    public function __construct() {
        $this->nombreTabla = "asignatura";
        $this->nombreAtributoId = "id";
        parent::__construct();
    }

    public function findById($id) {
        return parent::findById($id);
    }
    
    /**
     * 
     * @param Asignatura $Asignatura
     */
    public function insert($Asignatura){
        $this->query = "INSERT INTO " . $this->nombreTabla.
                " VALUES ( " .
                "NULL, '{$Asignatura->getNombre()}'".
                ")";
        $this->resultset = $this->bdconexion->query($this->query);
        return $this->bdconexion->insert_id;
    }
    public function update($Asignatura){
        $this->query = "UPDATE " . $this->nombreTabla.
                " SET " .
                "nombre = '{$Asignatura->getNombre()}' ".
                "WHERE {$this->nombreAtributoId} = {$Asignatura->getId()}";
        $this->resultset = $this->bdconexion->query($this->query);
        if(!$this->resultset) return false;
        return true;
        
    }
    public function delete($Asignatura){
        $this->query = "DELETE FROM " . $this->nombreTabla.
                "WHERE {$this->nombreAtributoId} = {$Asignatura->getId()}";
        $this->resultset = $this->bdconexion->query($this->query);
        if(!$this->resultset) return false;
        return true;
        
    }
    
}