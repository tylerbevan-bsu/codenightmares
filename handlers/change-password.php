<?php
session_start();
if ("_POST") {
	require_once('../templates/Dao.php');
	$dao = new Dao();
	$username = $_SESSION["username"];
	$password1 = $_POST["password1"];
	$password2 = $_POST["password2"];
	if ($password1 != $password2) {
		$_SESSION["error"] = "Passwords don't match.";
		header("Location: /pages/account.php");
	} else {
		$_SESSION["error"] = "Password Updated!";
		$dao->changePassword($username, $password1);
		header("Location: /pages/account.php");
	}
}
exit;
