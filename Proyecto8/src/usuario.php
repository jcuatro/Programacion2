<?php
  /**
   * Jugador
   */
  class Usuario
  {
    private $conexion=null;
    private $nombre;
    private $apellidos;
    private $correo;
    private $edad;
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
        $error = "No has introducido ningúna dirección de correo.";
      }elseif ($_POST["Usuario"] == "") {
        $error = "Es necesario un nombre de usuario.";
      }else{
        $error=false;
        $this->nombre=$post["Nombre"];
        $this->apellidos=$post["Apellidos"];
        $this->correo=$post["Correo"];
        $this->edad=$post["Edad"];
        $this->usuario=$post["Usuario"];
      }
      return $error;
    }

    public function conectar(){
    $this->conexion = new mysqli("localhost", "root", "", "juegos");
    if ($this->conexion->connect_errno) {
        echo "Fallo al conectar a MySQL: (" . $this->conexion->connect_errno . ") " . $this->conexion->connect_error;
    }
  }
      public function insertarUsuario($post){
        $consulta="INSERT INTO `usuarios` (`Nombre`, `Apellidos`, `Correo`,`Edad`,`Usuario`)
                    VALUES ('$this->nombre', '$this->apellidos', '$this->correo', $this->edad, '$this->usuario')";
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
