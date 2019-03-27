<?php
  /**
   * Jugador
   */
  class Jugador
  {
    private $conexion=null;
    private $codigo;
    private $nombre;
    private $peso;

    function __construct()
    {
    }

  /*
  * Parametro entrada: array $_POST
  * Parametro salida: string con el $error
  *                      -""-> sin error
                         -"MSG"-> error encontrado
  */


    public function comprobarCampos($post){
      $error=null;
      if (!isset($_POST)||!isset($_POST["codigo"])||!isset($_POST["Nombre"])||!isset($_POST["Peso"])) {
        $error = "";
      }elseif ($_POST["codigo"] == "") {
        $error = "No has introducido ningún código.";
      }elseif ($_POST["Nombre"] == "") {
        $error = "No has introducido ningún nombre.";
      }elseif ($_POST["Peso"] == "") {
        $error = "No has introducido ningún peso.";
      }else{
        $error=false;
        $this->codigo=$post["codigo"];
        $this->nombre=$post["Nombre"];
        $this->peso=$post["Peso"];
      }
      return $error;
    }

    public function conectar(){
    $this->conexion = new mysqli("localhost", "root", "", "nba");
    if ($this->conexion->connect_errno) {
        echo "Fallo al conectar a MySQL: (" . $this->conexion->connect_errno . ") " . $this->conexion->connect_error;
    }
  }
      public function insertarJugador(){

        $consulta="INSERT INTO `jugadores` (`codigo`, `Nombre`, `Procedencia`, `Altura`, `Peso`, `Posicion`, `Nombre_equipo`)
                    VALUES ($this->codigo, '$this->nombre', NULL, NULL, $this->peso, NULL, NULL)";
        $this->conexion->query($consulta);
        /*echo $consulta; */
    }

    public function listar(){

    $consulta="select * from jugadores";
    $resultado=$this->conexion->query($consulta);
    return $resultado;
      }
  }

 ?>
