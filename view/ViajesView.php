<?php
require_once('libs/Smarty.class.php');

class ViajesView
{

    private  $Smarty;

    function __construct()
    {
      $this->Smarty = new Smarty();
    }

    function mostrarHomeBase($message = '')
    {
      $this->Smarty->display('templates/home.tpl');
    }

    public function displayListarViajes(){
        $smarty = new Smarty();      
        $smarty->display('templates/listaViajes.tpl');
    }

    public function viajesFuturos(){
    $smarty = new Smarty();
    $smarty->display('templates/viajesFuturos.tpl');
    }

    public function notificarViaje(){
      $smarty = new Smarty();
      $smarty->display('templates/notificarViaje.tpl');
      }


}
?>
