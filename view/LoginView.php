<?php

require_once ('./libs/Smarty.class.php');

class LoginView
{
  private $Smarty;

  function __construct()
  {
    $this->Smarty = new Smarty();
  }

  function mostrarHomeBase($message = '')
  {
    $this->Smarty->assign('Titulo',"Inicie sesión");
    $this->Smarty->assign('Message',$message);
    $this->Smarty->display('templates/HomeBase.tpl');
  }

}

 ?>
