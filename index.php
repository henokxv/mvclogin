<?php

require_once('userController.php')
require_once('userModel.php')

@$op = $_REQUEST['op'];

$user_controller = new UserController();

switch ($op) {
  case 'login':
    $username = $_POST['user'];
    $password = $_POST['pass'];

    if ($user_controller->login($username,$password)) {
      header("Location:main.php");
    } else {
      header("Location:login.php");
    }
    break;

  default:
    // code...
    break;
}

?>
