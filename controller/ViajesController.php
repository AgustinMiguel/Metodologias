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

  public function listarViajes(){ //GRUPO 77 - Los datos son enviados a la vista para poder mostrarlos al usuario.
    // $viajes = $this->model->listarViajes($usuario);
    $this->view->displayListarViajes();
}

public function notificarViaje(){
  // $viajes = $this->model->listarViajes($usuario);
  $this->view->notificarViaje();
}

public function viajesFuturos(){  //GRUPO 77 - Los datos son enviados a la vista para poder mostrarlos al usuario.
  // $viajes = $this->model->viajesFuturos($usuario, $email);
  $this->view->viajesFuturos();
}

public function listaViajesAltaAgendaViajes(){ //GRUPO 77 - Los datos son enviados a la vista para poder mostrarlos al usuario.
  $this->view->listaViajesAltaAgendaViajes();
}
public function formularioViajes(){
  $this->view->formularioViajes();
}

public function agregarViaje(){
  $this->view->agendarViaje();
}

public function informacionViaje(){  //GRUPO 75- Accedemos a la vista para mostrar la informacion de los viajes obtenidos de la base.
  $this->view->informacionDetalladaViaje();
}

public function listaViajesAgregaReservaHotel(){
  $this->view->listaViajesAgregaReservaHotel();
}
public function infoViaje2(){
  $this->view->infoViaje2();
}
public function agendarViajeViaEmail(){
  $this->view->agendarViajeViaEmail();
}
public function altaPorReservaHotelEmail(){
  $this->view->altaPorReservaHotelEmail();
}
public function altaPorReservaVueloEmail(){
  $this->view->altaPorReservaVueloEmail();
}
public function verInfoViaje2(){
  $this->view->verInfoViaje2();
}



}
?>
