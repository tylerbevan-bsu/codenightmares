<!DOCTYPE HTML>
<html>
<head>
<link href='/style.css' rel='stylesheet'>
<link rel="shortcut icon" href="/assets/favicon.ico">
<link rel="icon" sizes="16x16 32x32 64x64" href="/assets/favicon.ico">
<link rel="icon" type="image/png" sizes="196x196" href="/assets/favicon-192.png">
<link rel="icon" type="image/png" sizes="160x160" href="/assets/favicon-160.png">
<link rel="icon" type="image/png" sizes="96x96" href="/assets/favicon-96.png">
<link rel="icon" type="image/png" sizes="64x64" href="/assets/favicon-64.png">
<link rel="icon" type="image/png" sizes="32x32" href="/assets/favicon-32.png">
<link rel="icon" type="image/png" sizes="16x16" href="/assets/favicon-16.png">
<link rel="apple-touch-icon" href="/assets/favicon-57.png">
<link rel="apple-touch-icon" sizes="114x114" href="/assets/favicon-114.png">
<link rel="apple-touch-icon" sizes="72x72" href="/assets/favicon-72.png">
<link rel="apple-touch-icon" sizes="144x144" href="/assets/favicon-144.png">
<link rel="apple-touch-icon" sizes="60x60" href="/assets/favicon-60.png">
<link rel="apple-touch-icon" sizes="120x120" href="/assets/favicon-120.png">
<link rel="apple-touch-icon" sizes="76x76" href="/assets/favicon-76.png">
<link rel="apple-touch-icon" sizes="152x152" href="/assets/favicon-152.png">
<link rel="apple-touch-icon" sizes="180x180" href="/assets/favicon-180.png">
<meta name="msapplication-TileColor" content="#FFFFFF">
<meta name="msapplication-TileImage" content="/assets/favicon-144.png">
<meta name="msapplication-config" content="/assets/browserconfig.xml">
</head>
<body >
<?php session_start();?>
<article>
	<div class='title'>
		<h1 class='title'>Code Nightmares</h1>
		<img src='/assets/logo.png' alt='Logo' class='title'>
	</div>
	<div class='navbar'>
		<a class='navbar' href='popular.php' <?php if ($_SERVER['REQUEST_URI'] == '/popular.php') echo "id='current-page'"; ?>>Popular</a>
		<a class='navbar' href='latest.php' <?php if ($_SERVER['REQUEST_URI'] == '/latest.php') echo "id='current-page'"; ?>>Latest</a>
		<a class='navbar' href='top.php' <?php if ($_SERVER['REQUEST_URI'] == '/top.php') echo "id='current-page'"; ?>>Top</a>
		<?php
		if (isset($_SESSION["logged_in"]) && $_SESSION["logged_in"]) {
			echo "<a class='navbar' href='account.php '";
			if ($_SERVER['REQUEST_URI'] == '/account.php') {
				echo "id='current-page'";
			}
			echo ">Account</a>";
		} else {
			echo "<a class='navbar' href='login.php '";
			if ($_SERVER['REQUEST_URI'] == '/login.php' || $_SERVER['REQUEST_URI'] == '/register.php') {
				echo "id='current-page'";
			}
			echo ">Login</a>";
		}
		echo "\n";
		if (isset($_SESSION["logged_in"]) && $_SESSION["logged_in"]) {
			echo "<a class='navbar' href='new.php' ";
		} else {
			echo "<a class='navbar' href='login.php' ";
		}
		if ($_SERVER['REQUEST_URI'] == '/new.php') {
			echo "id='current-page'";
		}
		echo ">New Post</a>";
		

		?>

	</div>

<main>
