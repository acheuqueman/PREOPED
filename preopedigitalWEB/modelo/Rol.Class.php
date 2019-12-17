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
        ;
    }

    function buscarPorId($id) {
        try {
            parent::buscarPorId($id, Constantes::BD_USERS . ".rol");
        } catch (Exception $ex) {
            die($ex->getMessage() . $ex->getCode());
        }
        $this->setPermisos();
    }

    /**
     * 
     * @param Array $datos
     * @throws Exception
     */
    function save($datos) {

        parent::cargarArray($datos);

        BDConexion::getInstancia()->autocommit(false);
        BDConexion::getInstancia()->begin_transaction();

        try {
            $this->query = "INSERT INTO rol "
                    . "VALUES (null,'{$this->nombre}')";
            $this->ejecutarQuery();

            $this->id = BDConexion::getInstancia()->insert_id;

            foreach ($datos["permiso"] as $idPermiso) {
                $this->query = "INSERT INTO rol_permiso "
                        . "VALUES ({$this->id}, {$idPermiso})";
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
                    . "SET nombre = '{$this->nombre}' "
                    . "WHERE id = {$this->id}";
            $this->ejecutarQuery();

            $this->query = "DELETE FROM rol_permiso "
                    . "WHERE id_rol = {$this->id}";
            $this->ejecutarQuery();

            foreach ($datos["permiso"] as $idPermiso) {
                $this->query = "INSERT INTO rol_permiso "
                        . "VALUES ({$this->id}, {$idPermiso})";
                $this->ejecutarQuery();
            }
        } catch (Exception $ex) {
            BDConexion::getInstancia()->rollback();
            throw $ex;
        }

        BDConexion::getInstancia()->commit();
        BDConexion::getInstancia()->autocommit(true);
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
    function setPermisos() {

        $this->setColeccionElementos(Constantes::BD_USERS . ".rol_permiso", Constantes::BD_USERS . ".permiso", "id_rol", "id_permiso", "Permiso");
        $this->permisos = $this->getColeccionElementos();
    }

    function buscarPermisoPorId($id) {
        foreach ($this->getPermisos() as $PermisoRol) {
            if ($id == $PermisoRol->getId()) {
                return true;
            }
        }
        return false;
    }

}
