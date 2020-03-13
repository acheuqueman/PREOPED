<?php

include_once 'Persona.class.php';
include_once 'Alumno_Diagnostico.class.php';
include_once 'Alumno_Carrera.class.php';
include_once 'Alumno_Familiar.class.php';
include_once 'Cursa.class.php';
include_once 'Aprueba.class.php';
include_once 'Entrevista_Alumno.class.php';
include_once './Familiar.class.php';

class Alumno extends Persona {

    protected $anio_ingreso;
    protected $cud;

    /**
     *
     * @var Alumno_Diagnostico[] 
     */
    protected $Diagnosticos;

    /**
     *
     * @var Alumno_Carrera[] 
     */
    protected $Carreras;

    /**
     * 
     * 
     * @todo $carreras
     * @todo $materias
     * @todo $entrevistas
     * 
     */
    
    /**
     *
     * @var Familiar[]
     */
    protected $Familiares;
    
    
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
     * @return Alumno_Carrera[]
     */
    function getCarreras() {
        return $this->Carreras;
    }

    /**
     * 
     * @param Alumno_Carrera[] $Carreras
     */
    function setCarreras($Carreras) {
        $this->Carreras = $Carreras;
    }
    function getFamiliares() {
        return $this->Familiares;
    }

    function setFamiliares(array $Familiares) {
        $this->Familiares = $Familiares;
    }

    
    /**
     * 
     * @param Int $id_carrera
     */
    function poseeCarrera($id_carrera) {
        if (!$this->Carreras)
            return FALSE;
        foreach ($this->Carreras as $carrera) {
            if ($carrera->getId_carrera() == $id_carrera)
                return true;
        }
        return false;
    }

}
