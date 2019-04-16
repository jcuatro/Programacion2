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

    public function comprobarCampos($post){
      $error=null;
      if (!isset($_POST)||!isset($_POST["Nombre"])||!isset($_POST["Apellidos"])||!isset($_POST["Edad"])||!isset($_POST["Correo"])||!isset($_POST["Usuario"])) {
        $error = "";
      }elseif ($_POST["Nombre"] == "") {
        $error = "No has introducido ningún nombre.";
      }elseif ($_POST["Apellidos"] == "") {
        $error = "No has introducido ningún apellidos.";
      }elseif ($_POST["Edad"] == "") {
        $error = "No has introducido edad.";
      }elseif ($_POST["Correo"] == "") {
        $error = "No has introducido ningúna división.";
      }elseif ($_POST["Usuario"] == "") {
        $error = "No has introducido ningúna división.";
      }else{
        $error=false;
        $this->nombre=$post["Nombre"];
        $this->ciudad=$post["Apellidos"];
        $this->conferencia=$post["Edad"];
        $this->division=$post["Puntuacion"];
        $this->conferencia=$post["Correo"];
        $this->division=$post["Usuario"];
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
        $consulta="INSERT INTO `usuarios` (`Nombre`, `Apellidos`, `Edad`,`Correo`,`Usuario`)
                    VALUES ('$this->nombre', '$this->apellidos', $this->edad, '$this->correo', '$this->usuario')";
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
