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
    $this->Smarty->display('templates/reservaHotel.tpl');
  }

}

 ?>