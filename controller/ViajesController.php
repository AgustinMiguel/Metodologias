<?php

require_once "./model/ViajesModel.php";
require_once "./view/ViajesView.php";
//require_once  "SecuredController.php";

class ViajesController 
{
  private $view;
  private $model;
  private $Titulo;

  function __construct()
  {
    //parent::__construct();

    $this->model = new ViajesModel();
    $this->Titulo = "Usuario";
    $this->view = new ViajesView();
  }

  function Home(){
    $this->view->mostrarHomeBase();
  }

  public function listarViajes($usuario){
    $viajes = $this->model->listarViajes($usuario);
    $this->view->displayListarViajes($viajes);
}

}
?>
