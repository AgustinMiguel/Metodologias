<?php

require_once "./model/UsuarioModel.php";
require_once "./view/UsuarioView.php";
//require_once  "SecuredController.php";

class UsuarioController //extends SecuredController
{
  private $view;
  private $model;
  private $Titulo;

  function __construct()
  {
    //parent::__construct();

    $this->model = new UsuarioModel();
    $this->Titulo = "Usuario";
    $this->view = new UsuarioView();
  }

  // Home principal
  function Home(){
    $this->view->mostrarHomeBase();
  }
// Home que mustra el panel de notificaciones desplegado simulando la aceptacion de la reserva del usuario
  function HomeNotificacion(){
    $this->view->mostrarHomeNotificacion();
  }

    /*function CheckEmail($email) { // // GRUPO-72 Corrobar que el email sea de un usuario registrado.
    $username = $email->username;

    $username = $_POST['username'];
    $password = $_POST['password'];

    $user = $this->UsuarioModel->getUsuario($username);

    if(!isset($user)) {
      $db->user->mostrar();
    }*/



}

?>
