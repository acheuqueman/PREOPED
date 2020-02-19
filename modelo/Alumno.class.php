<?php

include_once 'Persona.class.php';
include_once 'Alumno_Diagnostico.class.php';
include_once 'Alumno_Familiar.class.php';
include_once 'Cursa.class.php';
include_once 'Aprueba.class.php';
include_once 'Entrevista_Alumno.class.php';

class Alumno extends Persona {

    protected $anio_ingreso;
    protected $cud;
    
    /**
     *
     * @var Diagnostico[] 
     */
    protected $Diagnosticos;
    
    /**
     * 
     * @param Array $array
     */
    function __construct($array) {
        parent::mapeoArrayAtributos($array);
    }
    function getAnio_ingreso() {
        return $this->anio_ingreso;
    }

    function getCud() {
        return $this->cud;
    }

    function setAnio_ingreso($anio_ingreso) {
        $this->anio_ingreso = $anio_ingreso;
    }

    function setCud($cud) {
        $this->cud = $cud;
    }
    

    /**
     * 
     * @return Alumno_Diagnostico[]
     */
    function getDiagnosticos() {
        return $this->Diagnosticos;
    }

    /**
     * 
     * @param Alumno_Diagnostico[] $Diagnosticos
     */
    function setDiagnosticos($Diagnosticos) {
        $this->Diagnosticos = $Diagnosticos;
    }
    
    /**
     * 
     * @param Alumno_Diagnostico $Diagnostico
     */
    function addDiagnostico($Diagnostico) {
        $this->Diagnosticos[] = $Diagnostico;
    }

    

}



