<?php

class UsuarioModel
{
  private $db;

  function __construct(){
    $this->db = new PDO('mysql:host=localhost;'.'dbname=agenda_viajes;charset=utf8', 'root', '');
  }
}

/*function getUsuario($username) { // GRUPO 72- Mediante el parametro, buscamos si el usuario existe dentro de la base de datos.
  $user = $this->model->usuarios($usuario, $email);
  $this->view->viajesFuturos($user);
}*/


 ?>
