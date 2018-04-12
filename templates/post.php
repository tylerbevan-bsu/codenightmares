<?php
function createPost($postid, $author, $time, $votes, $contents) {
	echo "<div class='post'>";
	echo "<div class='post-author'>$author</div>";
	echo "<div class='code-box'>";
	echo "<pre class='code-box'>";
	echo "$contents";
	echo "</pre>";
	echo "</div>";
	echo "<div class='post-time'>$time</div>";
	if (isset($_SESSION["logged_in"]) && $_SESSION["logged_in"]) {
		echo "<div class='post-vote'><div class='inline'>Score: $votes</div> <form class='inline' action='/handlers/vote.php' method='POST'><input class='hidden' type='text' id='postid' name='postid' value='$postid'><input class='login inline' type='submit' value='UPVOTE'></form></div>";
	} else {
		echo "<div class='post-score'>Score: $votes</div>";
	}
	echo "</div>";
}

?>
