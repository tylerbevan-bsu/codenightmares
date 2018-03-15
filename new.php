<?php
require_once('header.php');
if (isset($_SESSION["logged_in"]) && $_SESSION["logged_in"]) {
} else {
	header("Location: login.php");
	die;
}
$content = "";
if (isset($_SESSION["content"])) {
	$content = $_SESSION["content"];
}
if (isset($_SESSION["error"])) {
	echo "<div class='error'>" .  $_SESSION["error"] . "</div>";
	unset($_SESSION["error"]);
}
?>
<div style="margin:10px">
	<div class='postform'>Post Contents: </div><textarea class='postform' type="text" id="content" name="content" form='newform' cols=81 rows=25 maxlength=1600 required autofocus> 
	<?php echo $content;?>
	</textarea >
	<form action="new-handler.php" id="newform" method="POST">
		<div class='postform'><input class='login' type="submit" value="Post"></div>
	</form>
</div>

<!-- End content        -->
<?php
require_once('footer.php');
?>
