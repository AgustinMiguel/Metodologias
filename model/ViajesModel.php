<?php

class ViajesModel
{
  private $db;

  function __construct(){
    $this->db = new PDO('mysql:host=localhost;'.'dbname=agenda_viajes;charset=utf8', 'root', '');
  }
  
  public function listarViajes($usuario){ //Trae los viajes con sus datos desde la base.
    $consulta = $this->db->prepare( "SELECT * FROM viaje v JOIN vuelo v1 in(v.id_viaje = v1.id_viaje) WHERE v1.fecha_inicio > NOW() AND nombre_usuario = ? AND email = ? ");
    $consulta->execute(array($usuario));
    $viajes = $viajes->fetchAll(PDO::FETCH_OBJ);  
    return $viajes;
  }
  public function us101(){
    $nada =0;
  }

  public function us87(){
    //La us 87 se encargaria de traer los datos de los viaje futuros de la BD
    $nada = 0;
  }
} 
?>