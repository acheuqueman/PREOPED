<?php

include_once 'BDMapper.php';

class Alumno_DiagnosticoMapper extends BDMapper {

    public function __construct() {

        $this->nombreTabla = "alumno_diagnostico";
        $this->nombreAtributoId = "id";
        parent::__construct();
    }

    public function findById($id) {
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
                . "'{$Alumno_Diagnostico->getIdDiagnostico()}', "
                . "'{$Alumno_Diagnostico->getIdAlumno()}'"
                . ")";
                
        $this->resultset = $this->bdconexion->query($this->query);
        return $this->resultset;
    }

}
