<?php

include_once 'BDObjetoGenerico.Class.php';
include_once 'Permiso.Class.php';

class Rol extends BDObjetoGenerico {

    /**
     *
     * @var Permiso[]
     */
    private $permisos;

    function __construct($id = null) {
        parent::__construct($id, Constantes::BD_USERS . ".rol");
        $this->setPermisos(Constantes::BD_USERS . ".rol_permiso", Constantes::BD_USERS . ".permiso", "id_rol", "id_permiso", "Permiso");
    }

    function getPermisos() {
        return $this->permisos;
    }

    /**
     * 
     * @param type $tablaVinculacion
     * @param type $tablaElementos
     * @param type $idObjetoContenedor
     * @param type $atributoFKElementoColeccion
     * @param type $claseElementoColeccion
     * 
     * @see BDObjetoGenerico::setColeccionElementos($tablaVinculacion, $tablaElementos, $idObjetoContenedor, $atributoFKElementoColeccion, $claseElementoColeccion) 
     */
    function setPermisos($tablaVinculacion, $tablaElementos, $idObjetoContenedor, $atributoFKElementoColeccion, $claseElementoColeccion) {

        $this->setColeccionElementos($tablaVinculacion, $tablaElementos, $idObjetoContenedor, $atributoFKElementoColeccion, $claseElementoColeccion);
        $this->permisos = $this->getColeccionElementos();
        
    }
    
    function buscarPermisoPorId($id) {
        if($this->permisos)
        foreach ($this->permisos as $PermisoRol) {
            if ($id == $PermisoRol->getId()) {
                return true;
            }
        }
        return false;
    }
}
