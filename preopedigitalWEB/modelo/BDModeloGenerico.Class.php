<?php

include_once 'BDConexion.Class.php';

/**
 * Descripcion de BDModeloGenerico
 * Esta clase posee los componentes para el acceso a una base de datos MySQL y la manipulacion de consultas.
 * 
 * @author Eder dos Santos
 * @author Fabricio Gonzalez
 * @author Vanina Gola
 * 
 */
class BDModeloGenerico {

    protected $query;

    /**
     *
     * @var mysqli_result
     */
    protected $datos;

    /**
     *
     * @var mysqli_stmt
     * @since v2019.1
     */
    protected $statement;
    protected $tablaBd;

    /**
     *
     * @var mixed <b>FALSE</b> on failure. For successful SELECT, SHOW, DESCRIBE or EXPLAIN queries <b>mysqli_query</b> will return a <b>mysqli_result</b> object. For other successful queries <b>mysqli_query</b> will return <b>TRUE</b>.
     */
    protected $estadoSql;

    function __construct() {
        ;
    }

    /**
     * 
     * @param Array $datos
     * @since 01/03/2019
     */
    function setDatos($datos) {
        $this->datos = $datos;
    }

    function ejecutarQuery() {
        if (!BDConexion::getInstancia()->query($this->query)) {
            throw new Exception(BDConexion::getInstancia()->error, BDConexion::getInstancia()->errno);
        }
    }

}
