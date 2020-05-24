<?php

require_once "./view/HotelesView.php";
require_once "./model/HotelesModel.php";


class HotelesController
{
  private $view;


  function __construct()
  {
  $this->view = new HotelesView();

  }

  function reservarHotel(){
    $this->view->mostrarReservaHotel();
  }

  function reservarPorEmail(){
    $this->view->reservarMedianteUnEmail();
  }

  function confirmaViaEmail(){
    $this->view->confirmacionViaEmail();
  }

  function logout(){
    session_start();
    session_destroy();
    header('Location: '.login);
  }

}
?>