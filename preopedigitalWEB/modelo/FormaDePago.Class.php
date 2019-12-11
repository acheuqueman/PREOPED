<?php
include_once 'BDObjetoGenerico.Class.php';
class FormaDePago extends BDObjetoGenerico {
    
    protected $id;
    protected $descripcion;
    
    function __construct($id=null) {
        parent::__construct($id, "FORMA_PAGO");
      
    }
    
    function getId() {
        return $this->id;
    }

    function getDescripcion() {
        return $this->descripcion;
    }


    function setId($id) {
        $this->id = $id;
    }

    function setDescripcion($descripcion) {
        $this->descripcion = $descripcion;
    }

}
