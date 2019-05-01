<?php
/**
 * Jugador
 */
class Jugador extends DB
{

  //Ejemplo de propiedad publica
  public $codigoExterno;
  private $codigo;
  private $nombre;
  private $peso;

  function __construct()
  {
  }

  /*
  * Param entrada: array $_POST
  * Param salida: string con el $error
  *               - ""-> sin error
                  - "MSG"-> error encontrado
  */
  public function comprobarCampos($post){
    $error=null;
    if(!isset($post)||!isset($post["codigo"])||!isset($post["Nombre"])||!isset($post["Peso"])){
      $error="";
    }elseif($post["codigo"]==""){
      $error="No has introducido el codigo";
    }elseif($post["Nombre"]==""){
      $error="No has introducido el Nombre";
    }elseif($post["Peso"]==""){
      $error="No has introducido el Peso";
    }else{
      $error=false;
      $this->codigo=$post["codigo"];
      $this->nombre=$post["Nombre"];
      $this->peso=$post["Peso"];
    }
    return $error;
  }


  public function insertarJugador(){

    $consulta="INSERT INTO jugadores (codigo, Nombre, Procedencia, Altura, Peso, Posicion, Nombre_equipo)
                VALUES ($this->codigo, '$this->nombre', NULL, NULL, $this->peso, NULL, NULL)";
    $this->conexion->query($consulta);
  }

  public function setCodigo($numero){
    if($numero>0) $this->codigo=numero;
  }

  public function getCodigo(){
    return $this->codigo;
  }
}



 ?>
