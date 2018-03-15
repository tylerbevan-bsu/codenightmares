<?php
  session_start();
  require_once 'Dao.php';
  $dao = new Dao();
  $username = $_POST["username"];
  $_SESSION["username"] = $username;
  $email = $_POST["email"];
  $_SESSION["email"] = $email;
  $password1 = $_POST["password1"];
  $password2 = $_POST["password2"];
  if ($dao->checkUsernameExists($username)) {
    $_SESSION["error1"] = "Username already taken!";
  } elseif ($dao->checkEmailExists($email)) {
    $_SESSION["error2"] = "Email already taken!";
  } elseif ($password1 != $password2) {
    $_SESSION["error3"] = "Passwords didn't match!";
  } else {
    echo "Account Created.";
    $dao->createUser($username, $email, $password1, 0);
    unset($_SESSION["error1"]);
    unset($_SESSION["error2"]);
    unset($_SESSION["error3"]);
    header("Location: login.php");
  }
  header("Location: register.php");
  exit;
