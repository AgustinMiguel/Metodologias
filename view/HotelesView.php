<?php

require_once ('./libs/Smarty.class.php');

class HotelesView
{
  private $Smarty;

  function __construct()
  {
    $this->Smarty = new Smarty();
  }

  function mostrarReservaHotel($message = '')
  {
    /*Esta funcion muestra el template del formulario para poder llenar los datos del hotel a resevar*/
    $this->Smarty->display('templates/reservaHotel.tpl');
  }

  function reservarMedianteUnEmail($message = ''){
    /*Esta funcion muestra el template para poder reservar el hotel mediante el email y el boucher con la info
    del viaje*/
    $this->Smarty->display('templates/reservarPorEmail.tpl');
  }

  function confirmacionViaEmail(){
    /*Esta funcion nos muestra el template donde se le avisa al usuario que su reserva se realizo con exito*/
    $this->Smarty->display('templates/confirmacionViaEmail.tpl');
  }
  function verInfo(){
    $this->Smarty->display('templates/verInfo.tpl');

  }

}

 ?>
