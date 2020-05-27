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

  public function listarViajes(){
    // $viajes = $this->model->listarViajes($usuario);
    $this->view->displayListarViajes();
}

public function notificarViaje(){
  // $viajes = $this->model->listarViajes($usuario);
  $this->view->notificarViaje();
}

public function viajesFuturos(){
  // $viajes = $this->model->viajesFuturos($usuario, $email);
  $this->view->viajesFuturos();
}

public function listaViajesCompleta(){
  $this->view->listaViajesCompleta();
}
public function formularioViajes(){
  $this->view->formularioViajes();
}

public function informacionViaje(){  //GRUPO 75- Accedemos a la vista para mostrar la informacion de los viajes obtenidos de la base.
  $this->view->informacionDetalladaViaje();
}

}
?>
