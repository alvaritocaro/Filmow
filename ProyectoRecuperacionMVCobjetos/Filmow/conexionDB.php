<?php
class conexionDB{
    private $conn;
    static $instance;
    private $host = "localhost";
    private $username = "root";
    private $password = "";
    private $database = "iw";
    private $resultado;

    private function __construct(){
        $this->conectar();
    }
    public static function getInstance(){
        if(!self::$instance)
        { 
            self::$instance = new self();
        }
        return self::$instance;
    }
    private function conectar(){
        $this->conn = new mysqli($this->host,$this->username,$this->password,$this->database);
        if ($this->conn->connect_error){
            die("Conexión fallida: ".$this->conn->connect_error);
        }
    }
    public function consultar($sql){
        $this->resultado=$this->conn->query($sql);
        return $this->resultado;
    }
    public function obtener_datos($resultado){
        $datos = [];
        $i = 0;
        if ($resultado->num_rows > 0){
            while ($fila = $resultado->fetch_assoc()) {
                $datos[$i] = $fila;
                $i = $i+1;
            }
            return $datos;
        }else{
            echo "No hay resultados";
        }
    }
}