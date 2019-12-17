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
    
    const WEBROOT = "/var/www/html/preopedigitalWEB/";
    const APPDIR = "uargflow";
        
    const SERVER = "http://localhost";
    const APPURL = "http://localhost/preopedigitalWEB";
    const HOMEURL = "http://localhost/preopedigitalWEB/uargflow/index.php";
    const HOMEAUTH = "http://localhost/preopedigitalWEB/app/index.php";
    
    const BD_SCHEMA = "aguadelcampo";
    const BD_USERS = "aguadelcampo";
    
}
