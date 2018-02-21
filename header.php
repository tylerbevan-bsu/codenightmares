<!DOCTYPE HTML>
<html>
<head>
<link href='/style.css' rel='stylesheet'>
</head>
<body >
<article>
	<div class='title'>
		<h1 class='title'>Code Nightmares</h1>
		<img src='/assets/logo.png' alt='Logo' class='title'>
	</div>
	<div class='navbar'>
		<a class='navbar' href='popular.php' <?php if ($_SERVER['REQUEST_URI'] == '/popular.php') echo "id='current-page'"; ?>>Popular</a>
		<a class='navbar' href='latest.php' <?php if ($_SERVER['REQUEST_URI'] == '/latest.php') echo "id='current-page'"; ?>>Latest</a>
		<a class='navbar' href='top.php' <?php if ($_SERVER['REQUEST_URI'] == '/top.php') echo "id='current-page'"; ?>>Top</a>
		<a class='navbar' href='login.php' <?php if ($_SERVER['REQUEST_URI'] == '/login.php') echo "id='current-page'"; ?>>Login</a>
	</div>

<main>
