<?php

include_once 'BDObjetoGenerico.Class.php';
include_once 'Rol.Class.php';

class Usuario extends BDObjetoGenerico {

    protected $email;

    /**
     *
     * @var Rol[]
     */
    private $roles;

    function __construct($id = null) {
        parent::__construct($id, Constantes::BD_USERS . ".usuario");
        $this->setRoles(Constantes::BD_USERS . ".usuario_rol", Constantes::BD_USERS . ".rol", "id_usuario", "id_rol", "Rol");
    }

    function getEmail() {
        return $this->email;
    }

    function setEmail($email) {
        $this->email = $email;
    }

    /**
     * 
     * @param type $tablaVinculacion
     * @param type $tablaElementos
     * @param type $idObjetoContenedor
     * @param type $atributoFKElementoColeccion
     * @param type $claseElementoColeccion
     * 
     */
    function setRoles($tablaVinculacion, $tablaElementos, $idObjetoContenedor, $atributoFKElementoColeccion, $claseElementoColeccion) {
        $this->setColeccionElementos($tablaVinculacion, $tablaElementos, $idObjetoContenedor, $atributoFKElementoColeccion, $claseElementoColeccion);
        $this->roles = $this->getColeccionElementos();
    }

    function getRoles() {
        return $this->roles;
    }

    /**
     * 
     * @param int $id
     * @return boolean
     */
    function buscarRolPorId($id) {
        if($this->roles)
        foreach ($this->roles as $RolUsuario) {
            if ($id == $RolUsuario->getId()) {
                return true;
            }
        }
        return false;
    }

}
