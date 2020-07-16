<?php

include_once 'BDMapper.php';
include_once '../modelo/Alumno.class.php';

include_once 'Entrevista_Alumno.class.php';
include_once 'Entrevista_AlumnoMapper.php';

include_once 'Alumno.class.php';
include_once 'AlumnoMapper.php';


class EntrevistaMapper extends BDMapper{

    /**
     *
     * @var Alumno[]
     */
    protected $entrevistados;

    public function __construct() {
        $this->nombreTabla = "entrevista";
        $this->nombreAtributoId = "id";
        parent::__construct();
    }

    public function findById($id) {
        //$this->nombreTabla = self::NOMBRE_VIEW;
        return parent::findById($id);
    }

     /**
     * 
     * @param Entrevista $Entrevista
     *
     */
    public function insert($Entrevista) {
        
        $this->query = "INSERT INTO {$this->nombreTabla} VALUES ("
                . "NULL, "
                . "'{$Entrevista->getFecha()}', "
                . "'{$Entrevista->getEntrevistador()}',"
                . "'{$Entrevista->getConclusiones()}'" 
                . ")";
        $this->resultset = $this->bdconexion->query($this->query);

        // ** Cambiado para que devuelva id de objeto creado, nose si afectara algo
        //return $this->resultset;
        return $this->bdconexion->insert_id;
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

    public function findEntrevistados($id) {
        
        $this->query = "SELECT * FROM ".Entrevista_AlumnoMapper::NOMBRE_VIEW
                . " WHERE id_entrevista = ".$id;

        $Mapper = new AlumnoMapper();
        $this->resultset = $this->bdconexion->query($this->query);
        for ($x = 0; $x < $this->resultset->num_rows; $x++) {
            $fetchassoc = $this->resultset->fetch_assoc();
            $this->entrevistados[] = new Alumno($Mapper->findById($fetchassoc["id_alumno"]));
        }
        return $this->entrevistados;
        
    }
}