<!DOCTYPE HTML>
<html>
<head>
<link href='/style.css' rel='stylesheet'>
</head>
<body style='background-color:#f0f0f0'>
	<div style='margin:auto; height:120px; width:90%;top:0px; padding:0px 0px;background-color:#4078f2'>
		<h1 style='display:inline-block; line-height:60px; margin-left:10px'>Code Nightmares</h1>
		<img src='/assets/logo.png' alt='Logo' style='float:right;height:100px;width:100px; margin-right:30px; margin-top:10px'>
	</div>
	<div style='height:80px; width:90%; margin: auto; padding:0px 0px;background-color:#4078f2'>
		<a class='navbar' href='popular.php' <?php if ($_SERVER[REQUEST_URI] == 'popular.php') echo "id='current-page'"; ?>>Popular</a>
		<a class='navbar' href='latest.php' <?php if ($_SERVER[REQUEST_URI] == 'latest.php') echo "id='current-page'"; ?>>Latest</a>
		<a class='navbar' href='top.php' <?php if ($_SERVER[REQUEST_URI] == 'top.php') echo "id='current-page'"; ?>>Top</a>
		<a class='navbar' href='login.php' <?php if ($_SERVER[REQUEST_URI] == 'login.php') echo "id='current-page'"; ?>>Login</a>
	</div>

<div style='width:90%; margin:auto; background-color:#f9f9f9;  min-height:800px'>
