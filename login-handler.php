<?php
  require_once '../Dao.php';
  $dao = new Dao();
  $name = $_POST["username"];
  $comment = $_POST["password"];
  if ($dao->checkUsernameExists($username)) {
    echo "Username Does Not Exist" ;
  } elseif ($dao->checkPassword($username, $password)) {
    echo "Incorrect Password" ;
  } else {
    echo "Login Success" ;
  }
  ##header("Location: login.php");
  exit;
