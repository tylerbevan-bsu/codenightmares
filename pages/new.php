<?php
require_once('../templates/header.php');
if (isset($_SESSION["logged_in"]) && $_SESSION["logged_in"]) {
} else {
	$_SESSION["error"] = "Login to create a post";
	header("Location: /pages/login.php");
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
	<div class='postform'>Post Contents: </div><textarea class='postform' type="text" id="content" name="content" form='newform' cols=81 rows=25 maxlength=1600 required autofocus><?php echo $content;?></textarea >
	<form action="/handlers/new-handler.php" id="newform" method="POST">
		<div class='postform'><input class='login' type="submit" value="Post"></div>
	</form>
</div>

<!-- End content        -->
<?php
require_once('../templates/footer.php');
?>
