<?php

class UsuarioModel
{
  private $db;

  function __construct(){
    $this->db = new PDO('mysql:host=localhost;'.'dbname=agenda_viajes;charset=utf8', 'root', '');
  }
}

/*function getUsuario($username) {
  $user = $this->model->usuarios($usuario, $email);
  $this->view->viajesFuturos($user);
}*/


 ?>
