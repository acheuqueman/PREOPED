<?php

include_once "BDConexion.php";

class BDMapper {
    /**
     * ?
     * @param type $tabla
     * @param type $campos
     * @param type $valores
     */

    /**
     *
     * @var mysqli_result
     */
    protected $resultset;

    /**
     *
     * @var type 
     */
    protected $query;
    protected $id;
    protected $nombreTabla;
    protected $nombreAtributoId;

    /**
     *
     * @var BDconexion
     */
    protected $bdconexion;

    function __construct() {
        $this->bdconexion = new BDConexion();
    }

    /**
     * 
     * @param int $id
     * @return type
     */
    function findById($id) {
        //$this->query = "SELECT * FROM {$this->nombreTabla} WHERE {$this->nombreAtributo}=$id ";
        $this->query = "SELECT * FROM " . $this->nombreTabla . " WHERE " . $this->nombreAtributoId . "=" . $id;
        $this->resultset = $this->bdconexion->query($this->query);
        return $this->resultset->fetch_assoc();
    }
  
    
   

}
