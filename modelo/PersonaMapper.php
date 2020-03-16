<?php

include_once 'BDMapper.php';

class PersonaMapper extends BDMapper {

    const NOMBRE_TABLA = "persona";

    protected $nombreview;

    public function __construct() {
        $this->nombreTabla = self::NOMBRE_TABLA;
        $this->nombreAtributoId = "id";
        parent::__construct();
    }

    public function findById($id) {
        return parent::findById($id);
    }

    public function insert($Persona) {

        $this->query = "INSERT INTO {$this->nombreTabla} VALUES ("
                . "NULL, "
                . "'{$Persona->getNombre()}', "
                . "'{$Persona->getDni()}',"
                . "'{$Persona->getEmail()}',"
                . "'{$Persona->getTelefono()}'"
                . ")";
        $this->resultset = $this->bdconexion->query($this->query);

        return $this->resultset;
    }

}
