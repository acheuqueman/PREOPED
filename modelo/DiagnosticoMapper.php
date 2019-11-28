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
}

