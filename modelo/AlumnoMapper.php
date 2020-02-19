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
     */
    public function insert($Alumno) {

        $this->bdconexion->autocommit("false");

        $this->query = "INSERT INTO persona VALUES ("
                . "NULL, '{$Alumno->getNombre()}', '{$Alumno->getDni()}', '{$Alumno->getEmail()}', '{$Alumno->getTelefono()}'"
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
        $this->bdconexion->autocommit("true");

        return $this->id;
    }

    /**
     * 
     * @todo 2020.02 Método Mapper::insertDiagnosticos(Alumno->getDiagnosticos());
     * @uses Alumno_DiagnosticoMapper::insert
     * 
     * @param Alumno_Diagnostico[] $Diagnosticos
     * 
     */
    public function insertDiagnosticos($Diagnosticos) {
        
        // 1. foreach
        // 2. Alumno_DiagnosticoMapper::insert
        // 3. return
    }

}
