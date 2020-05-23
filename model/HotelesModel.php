<?php

class HotelesModel
{
  private $db;

  function __construct(){
    $this->db = new PDO('mysql:host=localhost;'.'dbname=agenda_viajes;charset=utf8', 'root', '');
  }
}


 ?>