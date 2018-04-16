<?php
  session_start();
  require_once('../templates/Dao.php');
  $dao = new Dao();
  unset($_SESSION["error1"]);
  unset($_SESSION["error2"]);
  unset($_SESSION["error3"]);
  $username = $_POST["username"];
  $_SESSION["username"] = $username;
  setcookie("username", $username, 0, "/");
  $email = $_POST["email"];
  $_SESSION["email"] = $email;
  setcookie("email", $email, 0, "/");
  $regex = '/.+@.+\..+/';
  $is_email = preg_match($regex, $email, $matches);
  if ($is_email == false) {
    $_SESSION["error2"] = "Username should be an email address";
  }
  $password1 = $_POST["password1"];
  $password2 = $_POST["password2"];
  if ($dao->checkUsernameExists($username)) {
    $_SESSION["error1"] = "Username already taken!";
  } 
  if ($dao->checkEmailExists($email)) {
    $_SESSION["error2"] = "Email already taken!";
  } 
  if ($password1 != $password2) {
    $_SESSION["error3"] = "Passwords didn't match!";
  }
  if (isset($_SESSION["error1"]) || isset($_SESSION["error2"]) || isset($_SESSION["error3"])){
    header("Location: /pages/register.php");
  } else {
    echo "Account Created.";
    $dao->createUser($username, $email, $password1, 0);
    header("Location: /pages/login.php");
  }
  exit;
