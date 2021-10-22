<?php

class PeliculaGW
{
    private $conexion = null;

    public function __construct() {
        $this->conexion = conexionDB::getInstance();
    }
    public function getPeliculas(){
        $sql = "SELECT * FROM pelicula";
        $resultados = $this->conexion->consultar($sql);
        $peliculas = $this->conexion->obtener_datos($resultados);
        return $peliculas;
    }
}