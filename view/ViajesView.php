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

    public function displayListarViajes($viajes){
        $smarty = new Smarty();
        //$smarty->assign('titulo',"Listar viajes");
        //$smarty->assign('BASE_URL',BASE_URL);
        $smarty->assign('listar_viajes',$viajes);
        $smarty->display('templates/listaViajes.tpl');
    }

}


?>
