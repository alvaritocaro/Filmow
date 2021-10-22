<?php

require_once './controllers/ControladorIndex.php';

class FrontController
{
    static function main(){
        include "./controllers/ControladorPelicula.php";
        include "./views/vista.php";

        if (isset($_GET["controlador"])) {
            $controlador = "Controlador".$_GET["controlador"];
        } else if (isset($_POST["controlador"])) {
            $controlador = "Controlador".$_POST["controlador"];
        }else{
            $controlador = "ControladorIndex";
        }

        if (isset($_GET["accion"])) {
            $accion = $_GET["accion"];
        } else if (isset($_POST["accion"])) {
            $accion = $_POST["accion"];
        }else{
            $accion = "index";
        }

        if (isset($_GET["id"])) {
            $id = $_GET["id"];
        } else if (isset($_POST["id"])) {
            $id = $_POST["id"];
        }else{
            $id = null;
        }

        $controladorName = new $controlador();
        if($id == null) {
            $controladorName->$accion();
        }else{
            $controladorName->$accion($id);
        }
    }
}