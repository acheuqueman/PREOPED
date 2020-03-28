<?php

include_once 'BDMapper.php';
include_once 'Familiar.class.php';
include_once 'FamiliarMapper.php';

include_once 'Alumno_Diagnostico.class.php';
include_once 'Alumno_DiagnosticoMapper.php';

include_once 'Alumno_Carrera.class.php';
include_once 'Alumno_CarreraMapper.php';

include_once 'Entrevista_Alumno.class.php';
include_once 'Entrevista_AlumnoMapper.php';

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
     * @var Carrera[]
     */
    protected $carreras;

    /**
     *
     * @var Entrevista[]
     */
    protected $entrevistas;

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
     * @param Alumno $Alumno
     */
    public function insert($Alumno) {

        $this->bdconexion->autocommit(FALSE);
        $this->bdconexion->begin_transaction();

        $this->query = "INSERT INTO persona VALUES ("
                . "NULL, "
                . "'" . $this->bdconexion->escape_string($Alumno->getNombre()) . "', "
                . "'{$Alumno->getDni()}', '{$Alumno->getEmail()}', '{$Alumno->getTelefono()}'"
                . ")";
        $this->resultset = $this->bdconexion->query($this->query);

        if (!$this->resultset) {
            echo "Error.";
            $this->bdconexion->rollback();
            return false;
        }

        $this->id = $this->bdconexion->insert_id;

        $this->query = "INSERT INTO alumno VALUES ("
                . "{$this->id}, '{$Alumno->getAnio_ingreso()}', '{$Alumno->getCud()}'"
                . ")";

        $this->resultset = $this->bdconexion->query($this->query);

        if (!$this->resultset) {
            echo "Error.";
            $this->bdconexion->rollback();
            return false;
        }

        $this->bdconexion->commit();
        $this->bdconexion->autocommit(TRUE);

        return $this->id;
    }

    /**
     * 
     * @param Alumno $Alumno
     */
    function update($Alumno) {

        $this->bdconexion->autocommit(FALSE);
        $this->bdconexion->begin_transaction();

        $this->query = "UPDATE alumno "
                . "SET anio_ingreso = " . $Alumno->getAnio_ingreso() . ", "
                . "cud = '" . $this->bdconexion->escape_string($Alumno->getCud()) . "' "
                . "WHERE id = " . $Alumno->getId();

        $this->resultset = $this->bdconexion->query($this->query);
        if (!$this->resultset) {
            $this->bdconexion->rollback();
            return false;
        }

        $this->query = "UPDATE persona "
                . "SET nombre = '" . $this->bdconexion->escape_string($Alumno->getNombre()) . "', "
                . "dni = '" . $this->bdconexion->escape_string($Alumno->getDni()) . "', "
                . "email = '" . $this->bdconexion->escape_string($Alumno->getEmail()) . "', "
                . "telefono = '" . $this->bdconexion->escape_string($Alumno->getTelefono()) . "' "
                . "WHERE id = " . $Alumno->getId();

        $this->resultset = $this->bdconexion->query($this->query);
        if (!$this->resultset) {
            $this->bdconexion->rollback();
            return false;
        }

        $this->bdconexion->commit();
        $this->bdconexion->autocommit(TRUE);
        return true;
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

        $this->query = "SELECT * FROM " . FamiliarMapper::NOMBRE_VIEW
                . " WHERE id_alumno = " . $id;

        $this->resultset = $this->bdconexion->query($this->query);
        for ($x = 0; $x < $this->resultset->num_rows; $x++) {
            $this->familiares[] = new Familiar($this->resultset->fetch_assoc());
        }
        return $this->familiares;
    }

    /**
     * 
     * @param Int $id ID del alumno
     * @return Alumno_Diagnostico[]
     */
    public function findDiagnosticos($id) {

        $this->query = "SELECT * FROM " . Alumno_DiagnosticoMapper::NOMBRE_VIEW
                . " WHERE id_alumno = " . $id;

        $this->resultset = $this->bdconexion->query($this->query);
        for ($x = 0; $x < $this->resultset->num_rows; $x++) {
            $this->diagnosticos[] = new Alumno_Diagnostico($this->resultset->fetch_assoc());
        }
        return $this->diagnosticos;
    }
    
  
    
    /*
     * 
     * @param Int $id ID del alumno
     * @return Alumno_Carreras[]
     */
    public function findCarreras($id) {

        $this->query = "SELECT * FROM " . Alumno_CarreraMapper::NOMBRE_VIEW
                . " WHERE id_alumno = " . $id;

        $this->resultset = $this->bdconexion->query($this->query);
        for ($x = 0; $x < $this->resultset->num_rows; $x++) {
            $this->carreras[] = new Alumno_Carrera($this->resultset->fetch_assoc());
        }
        return $this->carreras;
    }

    /*
     * 
     * @param Int $id ID del alumno
     * @return Entrevista_Alumno[]
     */
    public function findEntrevistas($id) {

        //@todo view en la base 
        $this->query = "SELECT * FROM " .Entrevista_AlumnoMapper::NOMBRE_VIEW
                . " WHERE id_alumno = " . $id;

        $this->resultset = $this->bdconexion->query($this->query);
        for ($x = 0; $x < $this->resultset->num_rows; $x++) {
            $this->entrevistas[] = new Entrevista_Alumno($this->resultset->fetch_assoc());
        }
        return $this->entrevistas;
    }
    
}
