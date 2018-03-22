<?php
require_once('header.php');
if (isset($_SESSION["logged_in"]) && $_SESSION["logged_in"]) {
	header("Location:account.php");
}

$email = "";
if (isset($_SESSION["username"])) {
	$email = $_SESSION["username"];
}

if (isset($_SESSION["error"])) {
	echo "<div class='error'>" .  $_SESSION["error"] . "</div>";
}
?>
<div style="margin:10px">
	<form action="login-handler.php" method="POST">
		<div class='login'>Name: </div><input class='login<?php if (isset($_SESSION["error"])) {echo " inputError";}?>' type="text" id="username" name="username" required <?php echo $email; ?>>
		<div class='login'>Password: </div><input class='login<?php if (isset($_SESSION["error"])) {echo " inputError";}?>' type="password" id="password" name="password" required>
		<div class='login'><input class='login' type="submit" value="Login"></div>
	</form>
	<form action="register.php" method="GET">
		<div class='login'><input class='login' type="submit" value="Register"></div>
	</form>
</div>

<!-- End content        -->
<?php
unset($_SESSION["error"]);
require_once('footer.php');
?>
