<?php
require_once('header.php');
if (isset($_SESSION["logged_in"]) && $_SESSION["logged_in"]) {
} else {
	header("Location: login.php");
	die;
}
if (isset($_SESSION["error"])) {
	echo "<div class='error'>" .  $_SESSION["error"] . "</div>";
	unset($_SESSION["error"]);
}
?>
<div style="margin:10px">
	<form action="logout.php" method="GET">
		<div class='login'><input class='login' type="submit" value="Log Out"></div>
	</form>
	<form action="change-password.php" method="POST">
		<div class='login'>Change Password: </div><input class='login' type="password" id="password1" name="password1">
		<div class='login'>Confirm: </div><input class='login' type="password" id="password2" name="password2">
		<div class='login'><input class='login' type="submit" value="Change Password"></div>
	</form>
</div>

<!-- End content        -->
<?php
require_once('footer.php');
?>
