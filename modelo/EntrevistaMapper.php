<?php

include_once 'BDMapper.php';
include_once '../modelo/Alumno.class.php';

class EntrevistaMapper extends BDMapper{

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
    
    public function findAlumnos($id){
        $this->query = "SELECT A.* "
                . "FROM Alumno A, "
                    . "Entrevista_Alumno EA "
                . "WHERE A.id = EA.id_alumno "
                    . "AND id_entrevista =".$id;
        $this->resultset = $this->bdconexion->query($this->query);
        for ($x = 0; $x < $this->resultset->num_rows; $x++){
            $this->alumnos[] = new Alumno($this->resultset->fetch_assoc());
        }
        return $this->alumnos;
    }
}