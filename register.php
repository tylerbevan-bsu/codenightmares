<?php
	require_once('header.php');
?>
<!-- Content goes here  -->
<div class='login'>
     <form action="register-handler.php" method="POST">
       <div class='login'>Username: </div><input class='login' type="text" id="username" name="username">
       <div class='login'>Email: </div><input class='login' type="text" id="email" name="email">
       <div class='login'>Password: </div><input class='login' type="password" id="password1" name="password1">
       <div class='login'>Confirm Password: </div><input class='login' type="password" id="password2" name="password2">
       <div class='login'><input class='login' type="submit" value="Register"></div>
     </form>
</div>
<!-- End content        -->
<?php
	require_once('footer.php');
?>
