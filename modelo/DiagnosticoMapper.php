<?php

include_once 'BDMapper.php';

class DiagnosticoMapper extends BDMapper{
    public function __construct() {
        $this->nombreTabla = "diagnostico";
        $this->nombreAtributoId = "id";
        parent::__construct();
    }
    
    /**
     * 
     * @param Diagnostico $Diagnostico
     */
    public function insert($Diagnostico){
        $this->query = "INSERT INTO " . $this->nombreTabla.
                " VALUES ( " .
                "NULL, '{$Diagnostico->getDiagnostico()}', '{$Diagnostico->getTipo_discapacidad()}', '{$Diagnostico->getDescripcion()}'".
                ")";
        $this->resultset = $this->bdconexion->query($this->query);
        return $this->bdconexion->insert_id;
    }
    public function update($Diagnostico){
        $this->query = "UPDATE " . $this->nombreTabla.
                " SET " .
                "diagnostico = '{$Diagnostico->getDiagnostico()}', ".
                "tipo_discapacidad = '{$Diagnostico->getTipo_discapacidad()}', ".
                "descripcion = '{$Diagnostico->getDescripcion()}' ".
                "WHERE {$this->nombreAtributoId} = {$Diagnostico->getId()}";
        $this->resultset = $this->bdconexion->query($this->query);
        if(!$this->resultset) return false;
        return true;
        
    }
    public function delete($Diagnostico){
        $this->query = "DELETE FROM " . $this->nombreTabla.
                "WHERE {$this->nombreAtributoId} = {$Diagnostico->getId()}";
        $this->resultset = $this->bdconexion->query($this->query);
        if(!$this->resultset) return false;
        return true;
        
    }
}

