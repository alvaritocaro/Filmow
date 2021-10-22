<?php

require_once './models/pelicula.php';
require_once './GateWay/PeliculaGW.php';
include "conexionDB.php"; 

class ControladorPelicula
{
    function peliculas(){

        v_mostrar_peliculas($this->m_get_peliculas());
    }
    function film($id){
        v_mostrar_info_pelicula($this->m_get_peliculas(),$id);
    }
    function m_get_peliculas(){
        $peliculaGW = new PeliculaGW();
        $peliculas = $peliculaGW->getPeliculas();
        $array_peliculas = array();
        foreach ($peliculas as $pelicula_item) {
            $pelicula = new Pelicula();
            $pelicula->setId($pelicula_item['idPelicula']);
            $pelicula->setTitulo($pelicula_item['titulo']);
            $pelicula->setDescripcion($pelicula_item['descripcion']);
            $pelicula->setFechaEstreno($pelicula_item['fechaEstreno']);
            $pelicula->setDuracion($pelicula_item['Duracion']);
            $pelicula->setImagen($pelicula_item['imagen']);
            $pelicula->setTrailer($pelicula_item['trailer']);
            array_push($array_peliculas, $pelicula);
        }
        return $array_peliculas;
    }
}