<?php
session_start();
if ("_POST") {
  require_once 'Dao.php';
  $dao = new Dao();
  $username = $_POST["username"];
  $_SESSION["username"] = $username;
  setcookie("username", $username);
  $password = $_POST["password"];
  if (! $dao->checkUsernameExists($username)) {
	$_SESSION["error"] = "Username/Password combo is invalid";
  } elseif (! $dao->checkPassword($username, $password)) {
	$_SESSION["error"] = "Username/Password combo is invalid";
  } else {
	unset($_SESSION["error"]);
	$_SESSION["logged_in"] = true;
  }
  header("Location: login.php");
}
exit;
