<?php
include_once 'BDColeccionGenerica.Class.php';
include_once 'ZonaDistribucion.Class.php';

class ColeccionZonas extends BDColeccionGenerica {
    
    /**
     *
     * @var ZonaDistribucion[]
     */
    private $zonasDistribucion;
   
    function __construct() {
        parent::__construct();
        $this->setColeccion("ZONA_DISTRIBUCION","ZonaDistribucion");
        $this->zonasDistribucion = $this->coleccion;
    }
    
    /**
     * 
     * @return ZonaDistribucion[]
     */
    function getZonas() {
        return $this->zonasDistribucion;
    }


}