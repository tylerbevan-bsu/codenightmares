<?php
	require_once('header.php');
?>
<!-- Content goes here  -->
<div style="margin:10px">
     <form action="register-handler.php" method="POST">
       <div style="margin:10px; font-family: ubuntu, sans-serif; font-size: 18px">Username: </div><input style="margin:10px" type="text" id="username" name="username">
       <div style="margin:10px; font-family: ubuntu, sans-serif; font-size: 18px">Email: </div><input style="margin:10px" type="text" id="email" name="email">
       <div style="margin:10px; font-family: ubuntu, sans-serif; font-size: 18px">Password: </div><input style="margin:10px" type="password" id="password1" name="password1">
       <div style="margin:10px; font-family: ubuntu, sans-serif; font-size: 18px">Confirm Password: </div><input style="margin:10px" type="password" id="password2" name="password2">
       <div style="margin:10px; font-family: ubuntu, sans-serif; font-size: 18px"><input style="margin:10px" type="submit" value="Register"></div>
     </form>
</div>
<!-- End content        -->
<?php
	require_once('footer.php');
?>
