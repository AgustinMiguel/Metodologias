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

  function Home(){
    $this->view->mostrarHomeBase();
  }





}
?>
