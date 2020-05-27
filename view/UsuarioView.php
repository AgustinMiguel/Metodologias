<?php
require_once('libs/Smarty.class.php');

class UsuarioView
{

    private  $Smarty;

    function __construct()
    {
      $this->Smarty = new Smarty();
    }



  //  function MostrarHome($Titulo){
  //     $this->Smarty->assign('Titulo',"$Titulo");
  //    $this->Smarty->display('templates/HomePublico.tpl');

    function MostrarFormulario($Titulo){
      $this->Smarty->assign('Titulo',"$Titulo");
      $this->Smarty->display('templates/formulario.tpl');
    }

    function mostrarHomeNotificacion(){
       $this->Smarty->display('templates/home_notificacion.tpl');
    }


    function MostrarMapa( $usuario,$denuncias){
      $this->Smarty->assign('usuario',$usuario);
     $this->Smarty->assign('denuncias',$denuncias);
     $this->Smarty->display('templates/HomePublico.tpl');


    }


    function mostrarHomeBase($message = '')
    {
      $this->Smarty->display('templates/home.tpl');
    }

}


?>
