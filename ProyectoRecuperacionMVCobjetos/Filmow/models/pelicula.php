<?php
class Pelicula
{
    public $id;
    public $titulo;
    public $fechaEstreno;
    public $descripcion;
    public $imagen;
    public $duracion;
    public $trailer;

    function __construct(){    
    }
    public function getId(){
        return $this->id;
    }
    public function setId($id){
        $this->id = $id;
    }
    public function getDuracion(){
        return $this->duracion;
    }
    public function setDuracion($duracion){
        $this->duracion = $duracion;
    }
    public function getImagen(){
        return $this->imagen;
    }
    public function setImagen($imagen){
        $this->imagen = $imagen;
    }
    public function setTitulo($titulo){
        $this->titulo = $titulo;
    }
    public function getTitulo(){
        return $this->titulo;
    }
    public function setFechaEstreno($fechaEstreno){
        $this->fechaEstreno = $fechaEstreno;
    }
    public function getFechaEstreno(){
        return $this->fechaEstreno;
    }
    public function setDescripcion($descripcion){
        $this->descripcion = $descripcion;
    }
    public function getDescripcion(){
        return $this->descripcion;
    }
    public function setTrailer($trailer){
        $this->trailer = $trailer;
    }
    public function getTrailer(){
        return $this->trailer;
    }
}