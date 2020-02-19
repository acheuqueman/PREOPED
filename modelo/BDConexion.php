<?php

include_once 'BDConfig.php';

Class BDConexion extends mysqli {
    
    public function __construct() {
        parent::__construct(BDConfig::HOST, BDConfig::USUARIO, BDConfig::PASS, BDConfig::SCHEMA);   
        if ($this->connect_error) {
            echo "Error de Conexion a la base de datos. Esto se trata con excepciones y mensajes amigables <br />";
        }
        
    }
}


