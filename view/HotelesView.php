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

  function reservarMedianteUnEmail($message = ''){
    $this->Smarty->display('templates/reservarPorEmail.tpl');
  }

  function confirmacionViaEmail(){
    $this->Smarty->display('templates/confirmacionViaEmail.tpl');
  }
  function verInfo(){
    $this->Smarty->display('templates/verInfo.tpl');

  }

}

 ?>
