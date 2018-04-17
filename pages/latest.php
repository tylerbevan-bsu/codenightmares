<?php
require_once('../templates/header.php');
require_once('../templates/post.php');
require_once('../templates/Dao.php');
?>
<!-- Content goes here  -->
<?php
$dao = new Dao();
if (isset($_SESSION["error"])) {
	echo "<div class='error'>" .  $_SESSION["error"] . "</div>";
	unset($_SESSION["error"]);
}
if ('_GET' && isset($_GET["o"])){
	$offset = (int) $_GET["o"];
} else {
	$offset = (int) 0;
}
$query = $dao->getLatestPosts($offset, 50);
foreach ($query->fetchAll(PDO::FETCH_BOTH) as $row) {
	createPost($row[0], htmlspecialchars($row[1]), $row[2], $row[3], htmlspecialchars($row[4]));
}
?>
<form action="/pages/latest.php<?php echo "?o=" , $offset + 50  ?>" method="post">
    <input class="login" style="float: right" type="submit" value="Next Page" 
         name="nextpage" id="nextpage" />
</form>

<!-- End content        -->
<?php
require_once('../templates/footer.php');
?>
