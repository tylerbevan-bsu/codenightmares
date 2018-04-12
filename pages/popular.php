<?php
require_once('../templates/header.php');
require_once('../templates/post.php');
require_once('../templates/Dao.php');
?>
<!-- Content goes here  -->
<?php
if (isset($_SESSION["error"])) {
	echo "<div class='error'>" .  $_SESSION["error"] . "</div>";
	unset($_SESSION["error"]);
}
$dao = new Dao();
if ('_GET' && isset($_GET["o"])){
	$offset = (int) $_GET["o"];
} else {
	$offset = (int) 0;
}
$query = $dao->getHottestPosts($offset, 50);
foreach ($query->fetchAll(PDO::FETCH_BOTH) as $row) {
	createPost($row[0], htmlspecialchars($row[1]), $row[2], $row[3], htmlspecialchars($row[4]));
}
?>

<!-- End content        -->
<?php
require_once('../templates/footer.php');
?>
