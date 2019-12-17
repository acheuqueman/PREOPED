<?php
include_once 'BDColeccionGenerica.Class.php';
include_once 'FormaDePago.Class.php';

class ColeccionFormasDePago extends BDColeccionGenerica {
    
    /**
     *
     * @var FormaDePago[]
     */
    private $formasDePago;
   
    function __construct() {
        parent::__construct();
        $this->setColeccion("FORMA_PAGO","FormaDePago");
        $this->formasDePago = $this->coleccion;
    }
    
    /**
     * 
     * @return FormaDePago[]
     */
    function getFormasDePago() {
        return $this->formasDePago;
    }


}