 <?php
class SecuredController
{

  function __construct(){
        session_start();
        if(isset($_SESSION["User"])){
          if (isset($_SESSION['LAST_ACTIVITY']) && (time() - $_SESSION['LAST_ACTIVITY'] > 2000)) {
            $this->logout();
          }
          $_SESSION['LAST_ACTIVITY'] = time();
        }else{
            header('Location: '.login);
          }
  }

  function logout(){
    session_start();
    session_destroy();
    header('Location: '.logout);
  }

}

 ?>
