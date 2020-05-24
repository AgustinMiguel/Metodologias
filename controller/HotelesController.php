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
    /*Esta funcion llama al mostrarReservaHotel de HotelesView.*/
    $this->view->mostrarReservaHotel();
  }

  function reservarPorEmail(){
    /*Esta funcion llama al reservarMedianteUnEmail de HotelesView*/
    $this->view->reservarMedianteUnEmail();
  }

  function confirmaViaEmail(){
    /*Esta funcion llama al confimacionViaEmail de HotelesView*/
    $this->view->confirmacionViaEmail();
  }

  function logout(){
    session_start();
    session_destroy();
    header('Location: '.login);
  }
  function verInfo(){
    $this->view->verInfo();

  }

}
?>
