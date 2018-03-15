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
	unset($_SESSION["error1"]);
}
if (isset($_SESSION["error2"])) {
	echo "<div class='error'>" .  $_SESSION["error2"] . "</div>";
	unset($_SESSION["error2"]);
}
if (isset($_SESSION["error3"])) {
	echo "<div class='error'>" .  $_SESSION["error3"] . "</div>";
	unset($_SESSION["error3"]);
}
?>
<!-- Content goes here  -->
<div class='login'>
     <form action="register-handler.php" method="POST">
       <div class='login'>Username: </div><input class='login' type="text" id="username" name="username" <?php echo $username ; ?> >
       <div class='login'>Email: </div><input class='login' type="text" id="email" name="email" <?php echo $email ; ?> >
       <div class='login'>Password: </div><input class='login' type="password" id="password1" name="password1">
       <div class='login'>Confirm Password: </div><input class='login' type="password" id="password2" name="password2">
       <div class='login'><input class='login' type="submit" value="Register"></div>
     </form>
</div>
<!-- End content        -->
<?php
	require_once('footer.php');
?>
