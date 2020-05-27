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
        //$smarty->assign('titulo',"Listar viajes");
        //$smarty->assign('BASE_URL',BASE_URL);

        $smarty->display('templates/listaViajes.tpl');
    }

    
    public function notificarViaje(){
      $smarty = new Smarty();
      $smarty->display('templates/notificarViaje.tpl');
    }

    public function viajesFuturos(){
    $smarty = new Smarty();
    $smarty->display('templates/viajesFuturos.tpl');
}
public function listaViajesCompleta(){
$smarty = new Smarty();
$smarty->display('templates/listaViajesCompleta.tpl');
}
public function formularioViajes(){
$smarty = new Smarty();
$smarty->display('templates/formularioViajes.tpl');
}
public function reservarHotel(){
$smarty = new Smarty();
$smarty->display('templates/reservaHotel.tpl');
}

public function informacionDetalladaViaje(){
  $smarty = new Smarty();
  $smarty->display('templates/infoViaje.tpl');
}

}


?>
