<?php

require_once "./view/LoginView.php";


class LoginController
{
  private $view;


  function __construct()
  {
  $this->view = new LoginView();

  }

  function Home(){
    $this->view->mostrarHomeBase();
  }

  function logout(){
    session_start();
    session_destroy();
    header('Location: '.login);
  }

}
?>
