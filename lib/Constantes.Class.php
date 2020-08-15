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
    const APPDIR = "uargflow";
        
    const SERVER = "http://localhost";
    const APPURL = "http://localhost/preoped";
    const HOMEURL = "http://localhost/preoped/Vista/index.php";
    const HOMEAUTH = "http://localhost/preoped/Vista/inicio.php";
    
    const BD_SCHEMA = "preoped";
    const BD_USERS = "uargflowpreoped";
    
}
