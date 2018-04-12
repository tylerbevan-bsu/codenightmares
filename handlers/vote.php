<?php
session_start();
if ("_POST") {
	require_once('../templates/Dao.php');
	$dao = new Dao();
	$username = $_SESSION["username"];
	$postid = $_POST["postid"];
	if ($dao->getVote($username, $postid)) {
		$_SESSION["error"] = "You may only vote once for a post";
	} else {
		$dao->createVote($username, $postid);
		$_SESSION["error"] = "Vote recorded";
	}
	if(isset($_SERVER["HTTP_REFERER"])){
		header("Location: {$_SERVER["HTTP_REFERER"]}");
	} else {
		header("Location: /pages/popular.php");
	}
}
exit;
