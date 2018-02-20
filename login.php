<?php
	require_once('header.php');
?>
<!-- Content goes here  -->
<div style="margin:10px">
     <form action="login-handler.php" method="POST">
       <div style="margin:10px; font-family: ubuntu, sans-serif; font-size: 18px">Name: </div><input style="margin:10px" type="text" id="username" name="username">
       <div style="margin:10px; font-family: ubuntu, sans-serif; font-size: 18px">Password: </div><input style="margin:10px" type="password" id="password" name="password">
       <div style="margin:10px; font-family: ubuntu, sans-serif; font-size: 18px"><input style="margin:10px" type="submit" value="Login"></div>
     </form>
</div>
<!-- End content        -->
<?php
	require_once('footer.php');
?>
