<?php
session_start();
if (isset($_SESSION["logged_in"]) && $_SESSION["logged_in"]) {
} else {
	header("Location: /pages/login.php");
	die;
}
if ("_POST") {
	require_once('../templates/Dao.php');
	$dao = new Dao();
	$username = $_SESSION["username"];
	$time = date('Y-m-d H:i:s');
	$content = $_POST["content"];
	if (strlen($content) > 1600) {
		$_SESSION["error"] = "Post content can not greater than 1600 characters.";
		header("Location: /pages/new.php");
		die;
	}
	$dao->createPost($username, $time, $content);
	header("Location: /pages/new-success.php");
}
exit;
