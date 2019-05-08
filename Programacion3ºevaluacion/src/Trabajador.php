<?php
/**
 *
 */
class Trabajador extends Conexion
{

  private $nombre;
  private $apellidos;
  private $precio;

  function __construct()
  {
    // code...
  }

  public function comprobarCampos($post){
     $error=null;
     if(!isset($_POST)||!isset($_POST["nombre"])||!isset($_POST["apellidos"])||!isset($_POST["precio"])) {
       $error="";
     }elseif($_POST["nombre"]==""){
       $error="Debes rellenar este campo";
     }elseif($_POST["apellidos"]==""){
       $error="No has introducido el apellido";
     }elseif($_POST["precio"]==""){
       $error="No has introducido el precio";
     }else{
       $error=false;
       $this->nombre=$post["nombre"];
       $this->apellidos=$post["apellidos"];
       $this->precio=$post["precio"];
       echo "string";
     }
     return $error;
   }
   public function insertarTrabajador()
   {
      $consulta="INSERT INTO Trabajador (nombre, apellidos, precio_hora)
      VALUES ('$this->nombre', '$this->apellidos', $this->precio)";
      $this->conexion->query($consulta);
    }

}

 ?>
