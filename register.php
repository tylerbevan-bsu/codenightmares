<?php
require_once('header.php');

if (isset($_SESSION["error1"])) {
	echo "<div class='error'>" .  $_SESSION["error1"] . "</div>";
}
if (isset($_SESSION["error2"])) {
	echo "<div class='error'>" .  $_SESSION["error2"] . "</div>";
}
if (isset($_SESSION["error3"])) {
	echo "<div class='error'>" .  $_SESSION["error3"] . "</div>";
}
?>

<script src="js/jquery.validate.js"></script>
<script src="js/jquery.cookie.js"></script>

<!-- Content goes here  -->
<div class='login'>
<form id="register-form" action="register-handler.php" method="POST">
	<p>
	<label for="username" class='login'>Username: </label>
	</p>
	<p>
	<input class='login<?php if (isset($_SESSION["error1"])) { echo " inputError"; } ?>' type="text" id="username" name="username" minlength=4 required >
	</p>
	<p>
	<label for="email" class='login'>Email: </label>
	</p>
	<p>
	<input class='login<?php if (isset($_SESSION["error2"])) { echo " inputError"; } ?>' type="email" id="email" name="email" required>
	</p>
	<p>
	<label for="password1" class='login'>Password: </label>
	</p>
	<p>
	<input class='login<?php if (isset($_SESSION["error3"])) { echo " inputError"; } ?>' type="password" id="password1" name="password1" minlength=8 required>
	</p>
	<p>
	<label for="password2" class='login'>Confirm Password: </label>
	</p>
	<p>
	<input class='login<?php if (isset($_SESSION["error3"])) { echo " inputError"; } ?>' type="password" id="password2" name="password2" minlength=8 required>
	</p>
<div class='login'><input class='login' type="submit" value="Register"></div>
</form>
</div>
<!-- End content        -->

<script>
$('#register-form').validate();
$('#username').val($.cookie("username"));
$('#email').val($.cookie("email"));
</script>

<?php
unset($_SESSION["error1"]);
unset($_SESSION["error2"]);
unset($_SESSION["error3"]);
require_once('footer.php');
?>
