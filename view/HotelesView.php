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

  function verInfo(){
    $this->Smarty->display('templates/verInfo.tpl');

  }
  public function reservarHotel2(){
    $smarty = new Smarty();
    $smarty->display('templates/reservaHotel2.tpl');
  }

}

 ?>
