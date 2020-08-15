<?php

setlocale(LC_TIME, 'es_AR.utf8');

/**
 * 
 * Clase para mantener las directivas de sistema.
 * Deben coincidir con las configuraciones del proyecto.
 * 
 * @author Eder dos Santos <esantos@uarg.unpa.edu.ar>
 * 
 */
class Constantes {

    
    const NOMBRE_SISTEMA = "PREOPEDigital";
    
    const WEBROOT = "/var/www/preoped/";
    const APPDIR = "preoped";
        
    const SERVER = "http://localhost";
    // De la aplicación. Ej.: Preoped
    const APPURL = "http://localhost/preoped/uargflow";
    // De UARGFlow.
    const HOMEURL = "http://localhost/preoped/uargflow/app/index.php";
    const HOMEAUTH = "http://localhost/preoped/uargflow/app/usuarios.php";
    
    const BD_SCHEMA = "uargflowpreoped";
    const BD_USERS = "uargflowpreoped";
    
}
