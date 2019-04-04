<?php
  /**
   * Jugador
   */
  class Usuario
  {
    private $conexion=null;
    private $nombre;
    private $apellidos;
    private $edad;
    private $puntuacion;
    private $correo;
    private $usuario;

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
      if (!isset($_POST)||!isset($_POST["nombre"])||!isset($_POST["apellidos"])||!isset($_POST["edad"])||!isset($_POST["correo"])||!isset($_POST["usuario"])) {
        $error = "";
      }elseif ($_POST["nombre"] == "") {
        $error = "No has introducido ningún nombre.";
      }elseif ($_POST["apellidos"] == "") {
        $error = "No has introducido ningún apellidos.";
      }elseif ($_POST["edad"] == "") {
        $error = "No has introducido edad.";
      }elseif ($_POST["correo"] == "") {
        $error = "No has introducido ningúna división.";
      }elseif ($_POST["usuario"] == "") {
        $error = "No has introducido ningúna división.";
      }else{
        $error=false;
        $this->nombre=$post["nombre"];
        $this->ciudad=$post["apellidos"];
        $this->conferencia=$post["edad"];
        $this->division=$post["puntuacion"];
        $this->conferencia=$post["correo"];
        $this->division=$post["usuario"];
      }
      return $error;
    }

    public function conectar(){
    $this->conexion = new mysqli("localhost", "root", "", "juegos");
    if ($this->conexion->connect_errno) {
        echo "Fallo al conectar a MySQL: (" . $this->conexion->connect_errno . ") " . $this->conexion->connect_error;
    }
  }
      public function insertarUsuario(){

        $consulta="INSERT INTO `usuarios` (`nombre`, `apellidos`, `edad`, `puntuacion`,`correo`,`usuario`)
                    VALUES ($this->nombre, $this->apellidos, $this->edad, NULL , $this->correo, $this->usuario)";
        $this->conexion->query($consulta);
        echo $consulta;
    }

    public function listarUsuario(){

    $consulta="select * from usuarios";
    $resultado=$this->conexion->query($consulta);
    return $resultado;
      }
  }

 ?>
