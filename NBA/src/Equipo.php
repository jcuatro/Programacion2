<?php
  /**
   * Jugador
   */
  class Equipo
  {
    private $conexion=null;
    private $nombre;
    private $ciudad;
    private $conferencia;
    private $division;

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
      if (!isset($_POST)||!isset($_POST["Nombre"])||!isset($_POST["Ciudad"])||!isset($_POST["Conferencia"])||!isset($_POST["Division"])) {
        $error = "";
      }elseif ($_POST["Nombre"] == "") {
        $error = "No has introducido ningún nombre.";
      }elseif ($_POST["Ciudad"] == "") {
        $error = "No has introducido ningúna ciudad.";
      }elseif ($_POST["Conferencia"] == "") {
        $error = "No has introducido ningúna conferencia.";
      }elseif ($_POST["Division"] == "") {
        $error = "No has introducido ningúna división.";
      }else{
        $error=false;
        $this->nombre=$post["Nombre"];
        $this->ciudad=$post["Ciudad"];
        $this->conferencia=$post["Conferencia"];
        $this->division=$post["Division"];
      }
      return $error;
    }

    public function conectar(){
    $this->conexion = new mysqli("localhost", "root", "", "nba");
    if ($this->conexion->connect_errno) {
        echo "Fallo al conectar a MySQL: (" . $this->conexion->connect_errno . ") " . $this->conexion->connect_error;
    }
  }
      public function insertarEquipo($post){

        $consulta="INSERT INTO `equipos` (`Nombre`, `Ciudad`, `Conferencia`, `Division`)
                      VALUES ('$this->nombre', '$this->ciudad', '$this->conferencia', '$this->division')";
        $this->conexion->query($consulta);
        /* echo $consulta; */
    }

    public function listarE(){

    $consulta="select * from equipos";
    $resultado=$this->conexion->query($consulta);
    return $resultado;
      }
  }

 ?>
