<?php
	require_once('header.php');

$username = "";
$email = "";

if (isset($_SESSION["username"])) {
	$username = $_SESSION["username"];
}
if (isset($_SESSION["email"])) {
	$email = $_SESSION["email"];
}
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
<!-- Content goes here  -->
<div class='login'>
     <form action="register-handler.php" method="POST">
       <div class='login'>Username: </div><input class='login<?php if (isset($_SESSION["error1"])) { echo " inputError"; } ?>' type="text" id="username" name="username" <?php echo $username ; ?> required >
       <div class='login'>Email: </div><input class='login<?php if (isset($_SESSION["error2"])) { echo " inputError"; } ?>' type="text" id="email" name="email" <?php echo $email ; ?>  required>
       <div class='login'>Password: </div><input class='login<?php if (isset($_SESSION["error3"])) { echo " inputError"; } ?>' type="password" id="password1" name="password1" required>
       <div class='login'>Confirm Password: </div><input class='login<?php if (isset($_SESSION["error3"])) { echo " inputError"; } ?>' type="password" id="password2" name="password2" required>
       <div class='login'><input class='login' type="submit" value="Register"></div>
     </form>
</div>
<!-- End content        -->
<?php
	unset($_SESSION["error1"]);
	unset($_SESSION["error2"]);
	unset($_SESSION["error3"]);
	require_once('footer.php');
?>
