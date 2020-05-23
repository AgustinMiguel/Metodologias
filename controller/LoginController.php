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

  function chekedLogin() {
    session_start();
    if(!issset($_SESSION['ID_USER'])) {
      header('Location'. LOGIN);
      die();
    }
  }

  function verifyUser() {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $user = this->model->getByUsername($username);
    if(!empty($user) && password_verify($password, $user->password)) {
      session_start();
      $_SESSION['ID_USER'] = $user->id;
      $_SESSION['USERNAME'] = $user->username;
      
      header('Location ver');
     } else {
       $this->view->showLogin("Login incorrecto");
     }
  }

}
?>
