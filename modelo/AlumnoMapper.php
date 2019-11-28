<?php

include_once 'BDMapper.php';
include_once 'Familiar.class.php';
include_once 'Diagnostico.class.php';

class AlumnoMapper extends BDMapper {

    /**
     * @var Familiar[]
     */
    protected $familiares;

    /**
     *
     * @var Diagnostico[]
     */
    protected $diagnosticos;

    /**
     * 
     * @since 11.2019 Modifica nombreTabla hacia la vista vwalumno.
     * @author Eder dos Santos <esantos@uarg.unpa.edu.ar>
     * 
     */

    public function __construct() {
        $this->nombreTabla = "vwalumno";
        $this->nombreAtributoId = "id";
        parent::__construct();
    }
  
    /**
     * 
     * @param Int $id
     * @return Familiar[]
     * 
     * @since 11.2019 Modifica nombreTabla hacia la vista vwfamiliar.
     * @author Eder dos Santos <esantos@uarg.unpa.edu.ar>
     * 
     */
    public function findFamiliares($id) {

        $this->query = "SELECT * "
                . "FROM vwfamiliar "
                . "WHERE id_alumno = " . $id;

        $this->resultset = $this->bdconexion->query($this->query);
        for ($x = 0; $x < $this->resultset->num_rows; $x++) {
            $this->familiares[] = new Familiar($this->resultset->fetch_assoc());
        }
        return $this->familiares;
    }


    public function findDiagnosticos($id) {

        $this->query = "SELECT D.* "
                . "FROM Diagnostico D, "
                . "Alumno_Diagnostico AD "
                . "WHERE D.id = AD.id_diagnostico "
                . "AND id_alumno =" . $id;

        $this->resultset = $this->bdconexion->query($this->query);
        for ($x = 0; $x < $this->resultset->num_rows; $x++) {
            $this->diagnosticos[] = new Diagnostico($this->resultset->fetch_assoc());
        }
        return $this->diagnosticos;
    }

    /**
     * 
     * @param Alumno $Alumno
     * @todo 28/11/2019 Toda la secuencia SQL para generar un registro en las tablas (persona, alumno)
     */
    public function insertAlumno($Alumno) {
        
    }

}
