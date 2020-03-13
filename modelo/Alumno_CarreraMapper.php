<?php

include_once 'BDMapper.php';

class Alumno_CarreraMapper extends BDMapper {
<<<<<<< HEAD
    
    const NOMBRE_TABLA = "alumno_carrera";
    const NOMBRE_VIEW = "vwalumno_carrera";
    
    protected $nombreView;
=======

    const NOMBRE_TABLA = "alumno_carrera";
    const NOMBRE_VIEW = "vwalumno_carrera";

    protected $nombreview;
>>>>>>> fcd1d68393d08a3d61b26d151e54ca05c4c6c8b4

    public function __construct() {

        $this->nombreTabla = self::NOMBRE_TABLA;
        $this->nombreAtributoId = "id";
        parent::__construct();
    }

    public function findById($id) {
        $this->nombreTabla = self::NOMBRE_VIEW;
        return parent::findById($id);
    }

    /**
     * 
     * @param Alumno_Carrera $Alumno_Carrera
     */
    public function insert($Alumno_Carrera) {
        
        $this->query = "INSERT INTO {$this->nombreTabla} VALUES ("
                . "NULL, "
                . "'{$Alumno_Carrera->getId_alumno()}', "
                . "'{$Alumno_Carrera->getId_carrera()}'"
                . ")";
<<<<<<< HEAD
                
        $this->resultset = $this->bdconexion->query($this->query);
=======

        $this->resultset = $this->bdconexion->query($this->query);

>>>>>>> fcd1d68393d08a3d61b26d151e54ca05c4c6c8b4
        return $this->resultset;
    }

    /**
     * 
     * @param Int $id
     * @return Int Numero de filas eliminadas.
     */
    public function delete($id_) {
<<<<<<< HEAD
        
        $this->query = "DELETE FROM {$this->nombreTabla} "
        . "WHERE {$this->nombreAtributoId} = {$id_}";
                
=======

        $this->query = "DELETE FROM {$this->nombreTabla} "
                . "WHERE {$this->nombreAtributoId} = {$id_}";

        $this->resultset = $this->bdconexion->query($this->query);
        return $this->resultset;
    }

    /**
     * 
     * @param type $id_alumno
     * @return type
     */
    public function deleteAll($id_alumno) {
        $this->query = "DELETE FROM {$this->nombreTabla} "
                . "WHERE id_alumno = {$id_alumno}";

>>>>>>> fcd1d68393d08a3d61b26d151e54ca05c4c6c8b4
        $this->resultset = $this->bdconexion->query($this->query);
        return $this->resultset;
    }

}
