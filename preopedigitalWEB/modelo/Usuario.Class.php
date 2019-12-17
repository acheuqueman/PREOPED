<?php

include_once '../lib/Constantes.Class.php';
include_once 'BDObjetoGenerico.Class.php';
include_once 'Rol.Class.php';

class Usuario extends BDObjetoGenerico {

    protected $email;

    /**
     *
     * @var Rol[]
     */
    private $roles;

    function __construct() {
        $this->tablaBd = Constantes::BD_USERS . ".usuario";
        ;
    }

    function buscarPorId($id) {
        try {
            parent::buscarPorId($id, $this->tablaBd);
        } catch (Exception $ex) {
            die($ex->getMessage() . $ex->getCode());
        }
        $this->setRoles();
    }

    /**
     * 
     * @param Array $datos
     * @throws Exception
     * @todo Prepared Statements
     */
    function save($datos) {

        parent::cargarArray($datos);

        BDConexion::getInstancia()->autocommit(false);
        BDConexion::getInstancia()->begin_transaction();

        try {
            $this->query = "INSERT INTO {$this->tablaBd} "
                    . "VALUES (null, '{$this->nombre}', '{$this->email}')";
            $this->ejecutarQuery();

            $this->id = BDConexion::getInstancia()->insert_id;

            foreach ($datos["rol"] as $idRol) {
                $this->query = "INSERT INTO usuario_rol "
                        . "VALUES ({$this->id}, {$idRol})";
                $this->ejecutarQuery();
            }
        } catch (Exception $ex) {
            BDConexion::getInstancia()->rollback();
            throw $ex;
        }

        BDConexion::getInstancia()->commit();
        BDConexion::getInstancia()->autocommit(true);
    }

    /**
     * 
     * @param Array $datos
     */
    function update($datos) {

        parent::cargarArray($datos);

        BDConexion::getInstancia()->autocommit(false);
        BDConexion::getInstancia()->begin_transaction();

        try {
            $this->query = "UPDATE {$this->tablaBd} "
                    . "SET nombre = '{$this->nombre}', email = '{$this->email}' "
                    . "WHERE id = {$this->id}";
            $this->ejecutarQuery();

            $this->query = "DELETE FROM usuario_rol "
                    . "WHERE id_usuario = {$this->id}";
            $this->ejecutarQuery();

            foreach ($datos["rol"] as $idRol) {
                $this->query = "INSERT INTO usuario_rol "
                        . "VALUES ({$this->id}, {$idRol})";
                $this->ejecutarQuery();
            }
        } catch (Exception $ex) {
            BDConexion::getInstancia()->rollback();
            throw $ex;
        }

        BDConexion::getInstancia()->commit();
        BDConexion::getInstancia()->autocommit(true);
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
    function setRoles() {
        $this->setColeccionElementos(Constantes::BD_USERS . ".usuario_rol", Constantes::BD_USERS . ".rol", "id_usuario", "id_rol", "Rol");
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
        foreach ($this->getRoles() as $RolUsuario) {
            if ($id == $RolUsuario->getId()) {
                return true;
            }
        }
        return false;
    }

}
