<?php

class HotelesModel
{
  private $db;

  function __construct(){
    /*Se conecta a la base de datos agenda_viajes*/
    $this->db = new PDO('mysql:host=localhost;'.'dbname=agenda_viajes;charset=utf8', 'root', '');
  }

public function insertHotel($usuario, $hotel, $fecha, $fechaIda, $fechaVuelta){                             //Inserta en la tabla de hotel todos los datos
  $consulta = $this->db->prepare( "INSERT * FROM viaje v JOIN hotel h in(v.id_viaje = h.id_viaje) WHERE h.fechaalta = viaje.fechainicio");
  $consulta->execute(array($usuario));
  $viajes = $viajes->fetchAll(PDO::FETCH_OBJ);
  if($viajes != null){
    //$viajes = insert
  }
  return $viajes;
}
}


 ?>
