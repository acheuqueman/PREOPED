<?php
class Cliente {
    
   protected $id;
   protected $tipoPersona;
   protected $razonSocial;
   protected $direccion;
   protected $telefono;
   protected $localidad;
   protected $cuit;
   protected $tipoFactura;
   protected $nombreComercial;
   protected $personasDeContacto;
           
   function __construct($id, $tipoPersona, $razonSocial, $direccion, $telefono, $localidad, $cuit, $tipoFactura, $nombreComercial, $personasDeContacto) {
       $this->id = $id;
       $this->tipoPersona = $tipoPersona;
       $this->razonSocial = $razonSocial;
       $this->direccion = $direccion;
       $this->telefono = $telefono;
       $this->localidad = $localidad;
       $this->cuit = $cuit;
       $this->tipoFactura = $tipoFactura;
       $this->nombreComercial = $nombreComercial;
       $this->personasDeContacto = $personasDeContacto;
   }

   
   function getId() {
       return $this->id;
   }

   function getTipoPersona() {
       return $this->tipoPersona;
   }

   function getRazonSocial() {
       return $this->razonSocial;
   }

   function getDireccion() {
       return $this->direccion;
   }

   function getTelefono() {
       return $this->telefono;
   }

   function getLocalidad() {
       return $this->localidad;
   }

   function getCuit() {
       return $this->cuit;
   }

   function getTipoFactura() {
       return $this->tipoFactura;
   }

   function getNombreComercial() {
       return $this->nombreComercial;
   }

   function getPersonasDeContacto() {
       return $this->personasDeContacto;
   }

   function setId($id) {
       $this->id = $id;
   }

   function setTipoPersona($tipoPersona) {
       $this->tipoPersona = $tipoPersona;
   }

   function setRazonSocial($razonSocial) {
       $this->razonSocial = $razonSocial;
   }

   function setDireccion($direccion) {
       $this->direccion = $direccion;
   }

   function setTelefono($telefono) {
       $this->telefono = $telefono;
   }

   function setLocalidad($localidad) {
       $this->localidad = $localidad;
   }

   function setCuit($cuit) {
       $this->cuit = $cuit;
   }

   function setTipoFactura($tipoFactura) {
       $this->tipoFactura = $tipoFactura;
   }

   function setNombreComercial($nombreComercial) {
       $this->nombreComercial = $nombreComercial;
   }

   function setPersonasDeContacto($personasDeContacto) {
       $this->personasDeContacto = $personasDeContacto;
   }

   function obtenerObjetoORM($id, $tabla) {
       
   }

   
}