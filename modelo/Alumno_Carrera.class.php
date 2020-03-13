<<<<<<< HEAD
<?php

include_once 'ModeloDatosGenerico.php';

class Alumno_Carrera extends ModeloDatosGenerico{
    
    protected $id;
    protected $id_alumno;
    protected $id_carrera;
    protected $nombre;
    
            
    function __construct($array) {
        parent::mapeoArrayAtributos($array);
    }

    function getId() {
        return $this->id;
    }

    function getId_alumno() {
        return $this->id_alumno;
    }

    function getId_carrera() {
        return $this->id_carrera;
    }

    function getNombreCarrera() {
        return $this->nombre;
    }

    function setId($id) {
        $this->id = $id;
    }

    function setId_alumno($id_alumno) {
        $this->id_alumno = $id_alumno;
    }

    function setId_carrera($id_carrera) {
        $this->id_carrera = $id_carrera;
    }

    function setNombreCarrera($nombre) {
        $this->nombre = $nombre;
    }


    
}

=======
<?php

include_once 'ModeloDatosGenerico.php';

class Alumno_Carrera extends ModeloDatosGenerico{
    
    protected $id;
    protected $id_alumno;
    protected $id_carrera;
    protected $nombre;
    
    
            
    function __construct($array) {
        parent::mapeoArrayAtributos($array);
    }
    
    function getId() {
        return $this->id;
    }

    function getId_alumno() {
        return $this->id_alumno;
    }

    function getId_carrera() {
        return $this->id_carrera;
    }

    function getNombre() {
        return $this->nombre;
    }

    function setId($id) {
        $this->id = $id;
    }

    function setId_alumno($id_alumno) {
        $this->id_alumno = $id_alumno;
    }

    function setId_carrera($id_carrera) {
        $this->id_carrera = $id_carrera;
    }

    function setNombre($nombre) {
        $this->nombre = $nombre;
    }


}

>>>>>>> fcd1d68393d08a3d61b26d151e54ca05c4c6c8b4
