<?php
	require_once('header.php');
?>
<!-- Content goes here  -->
<div style="margin:10px">
     <form action="login-handler.php" method="POST">
       <div class='login'>Name: </div><input class='login' type="text" id="username" name="username">
       <div class='login'>Password: </div><input class='login' type="password" id="password" name="password">
       <div class='login'><input class='login' type="submit" value="Login"></div>
     </form>
     <form action="register.php" method="GET">
       <div class='login'><input class='login' type="submit" value="Regsiter"></div>
     </form>
</div>
<!-- End content        -->
<?php
	require_once('footer.php');
?>
