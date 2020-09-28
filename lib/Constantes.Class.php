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
    
    const WEBROOT = "/var/www/preopedigital/";
    const APPDIR = "preopedigital";
        
    const SERVER = "http://localhost";
    const APPURL = "http://localhost/preopedigital";
    const HOMEURL = "http://localhost/preopedigital/Vista/index.php";
    const HOMEAUTH = "http://localhost/preopedigital/Vista/inicio.php";
    
    const BD_SCHEMA = "preoped";
    const BD_USERS = "preoped";
    
}
