<?php
    function v_mostrar_portada(){
        echo file_get_contents("./html/portada.html");
    }
    function v_mostrar_peliculas($peliculas){
        $navbar = file_get_contents("./html/navbar.html");
        $galeria = file_get_contents("./html/galeria.html");
        $trozos = explode("##pelicula##",$galeria);
        $cuerpo = "";
        $aux="";
        for($i=0;$i<sizeof($peliculas);$i++){
            $aux = $trozos[1];
            $aux = str_replace("##id##", $peliculas[$i]->getId(), $aux);
            $aux = str_replace("##titulo##", $peliculas[$i]->getTitulo(), $aux);
            $aux = str_replace("##imagen##", $peliculas[$i]->getImagen(), $aux);
            $cuerpo .= $aux;
        }
        echo $navbar.$trozos[0].$cuerpo.$trozos[2];
    }
    function v_mostrar_info_pelicula($peliculas,$id){
        $navbar = file_get_contents("./html/navbar.html");
        $infoPelicula = file_get_contents("./html/pelicula.html");
        $infoPelicula = str_replace("##titulo##", $peliculas[$id-1]->getTitulo(), $infoPelicula);
        $infoPelicula = str_replace("##fechaEstreno##", $peliculas[$id-1]->getFechaEstreno(), $infoPelicula);
        $infoPelicula = str_replace("##Duracion##", $peliculas[$id-1]->getDuracion(), $infoPelicula);
        $infoPelicula = str_replace("##imagen##", $peliculas[$id-1]->getImagen(), $infoPelicula);
        $infoPelicula = str_replace("##Descripcion##", $peliculas[$id-1]->getDescripcion(), $infoPelicula);
        $infoPelicula = str_replace("##trailer##", $peliculas[$id-1]->getTrailer(), $infoPelicula);
        echo $navbar.$infoPelicula;
    }