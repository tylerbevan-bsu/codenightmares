<?php
  require_once 'Dao.php';
  $dao = new Dao();
  $username = $_POST["username"];
  $email = $_POST["email"];
  $password1 = $_POST["password1"];
  $password2 = $_POST["password2"];
  if ($dao->checkUsernameExists($username)) {
    echo "Username already taken.";
    #header("Location: register.php");
  } elseif ($dao->checkEmailExists($email)) {
    echo "Email already in use."; 
    #header("Location: register.php");
  } elseif ($password1 != $password2) {
    echo "Passwords don't match";
    #header("Location: register.php");
  } else {
    echo "Account Created.";
    $dao->createUser($username, $email, $password1, 0);
    #header("Location: login.php");
  }
  exit;
