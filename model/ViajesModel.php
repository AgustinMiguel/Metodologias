<?php

class ViajesModel
{
  private $db;

  function __construct(){
    $this->db = new PDO('mysql:host=localhost;'.'dbname=agenda_viajes;charset=utf8', 'root', '');
  }
  
  public function listarViajes($usuario){
    $consulta = $this->db->prepare( "SELECT * FROM viaje v JOIN vuelo v1 in(v.id_viaje = v1.id_viaje) WHERE v1.fecha_inicio > NOW() AND nombre_usuario = ? AND email = ? ");
    $consulta->execute(array($usuario));
    $viajes = $viajes->fetchAll(PDO::FETCH_OBJ);  
    return $viajes;
  }

} 
?>