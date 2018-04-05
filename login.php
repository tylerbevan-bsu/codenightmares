<?php
require_once('header.php');
if (isset($_SESSION["logged_in"]) && $_SESSION["logged_in"]) {
	header("Location:account.php");
}

if (isset($_SESSION["error"])) {
	echo "<div class='error'>" .  $_SESSION["error"] . "</div>";
}
?>

<script src="js/jquery.validate.js"></script>
<script src="js/jquery.cookie.js"></script>

<div style="margin:10px">
	<form id="login-form" action="login-handler.php" method="POST">
		<p>
		<label class='login' for="username">Name: </label>
		<input class='login<?php if (isset($_SESSION["error"])) { echo " inputError"; } ?>' type="text" minlength=4 id="username" name="username" required>
		</p>
		<p>
		<label class='login' for="password">Password: </label>
		<input class='login<?php if (isset($_SESSION["error"])) { echo " inputError"; } ?>' type="password" minlength=8 id="password" name="password" required>
		</p>
		<p>
		<input class='login' type="submit" value="Login">
		</p>
	</form>
	<form action="register.php" method="GET">
		<p>
		<input class='login' type="submit" value="Register">
		</p>
	</form>
</div>

<script>
$('#login-form').validate();
$('#username').val($.cookie("username"));
</script>

<!-- End content        -->
<?php
unset($_SESSION["error"]);
require_once('footer.php');
?>
