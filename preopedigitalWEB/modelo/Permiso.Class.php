<?php

include_once 'BDObjetoGenerico.Class.php';

class Permiso extends BDObjetoGenerico {

    function __construct($id = null) {
        ;
    }

    function buscarPorId($id) {
        try {
            parent::buscarPorId($id, Constantes::BD_USERS . ".permiso");
        } catch (Exception $ex) {
            die($ex->getMessage() . $ex->getCode());
        }
    }

}
