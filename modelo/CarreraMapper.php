<?php

include_once 'BDMapper.php';
include_once '../modelo/Asignatura.class.php';

class CarreraMapper extends BDMapper{
    public function __construct() {
        $this->nombreTabla = "carrera";
        $this->nombreAtributoId = "id";
        parent::__construct();
    }

    public function findById($id) {
        return parent::findById($id);
    }
    
    public function findAsignaturas($id){
        $this->query = "SELECT A.* "
                . "FROM Asignatura A, "
                    . "Carrera_Asignatura CA "
                . "WHERE A.id = CA.id_asignatura "
                    . "AND id_carrera =".$id;
        $this->resultset = $this->bdconexion->query($this->query);
        for ($x = 0; $x < $this->resultset->num_rows; $x++){
            $this->asignaturas[] = new Asignatura($this->resultset->fetch_assoc());
        }
        return $this->asignaturas;
    }
    /**
     * 
     * @param Carrera $Carrera
     */
    public function insert($Carrera){
        $this->query = "INSERT INTO " . $this->nombreTabla.
                " VALUES ( " .
                "NULL, '{$Carrera->getNombre()}'".
                ")";
        $this->resultset = $this->bdconexion->query($this->query);
        return $this->bdconexion->insert_id;
    }
    public function update($Carrera){
        $this->query = "UPDATE " . $this->nombreTabla.
                " SET " .
                "nombre = '{$Carrera->getNombre()}' ".
                "WHERE {$this->nombreAtributoId} = {$Carrera->getId()}";
        $this->resultset = $this->bdconexion->query($this->query);
        if(!$this->resultset) return false;
        return true;
        
    }
    public function delete($Carrera){
        $this->query = "DELETE FROM " . $this->nombreTabla.
                " WHERE {$this->nombreAtributoId} = {$Carrera->getId()}";
        $this->resultset = $this->bdconexion->query($this->query);
        if(!$this->resultset) return false;
        return true;
        
    }
    
}