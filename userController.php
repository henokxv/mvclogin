<?php

/**
 *
 */
class UserController
{

  function UserController()
  {
    // code...
  }

  function create($username , $password , $email)
  {

  }

  function login($username , $password)
  {
    if($this->authenticate($username , $password)) {
      session_start();
      $user = new UserModel($username);
      $_SESSION['user'] = $user;
      return true;
    } else {
      return false;
    }
  }

  static function authenticate($u , $p) {
    $authentic = false;
    if ($u == 'admin' && $p == 'admin') $authentic = true;
    return $authentic;
  }

  function logout() {
    session_start();
    session_destroy();
  }
}


?>
