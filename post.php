<?php
function createPost($author, $time, $votes, $contents) {
	echo "<div class='post'>";
	echo "<div class='post-author'>$author</div>";
	echo "<div class='code-box'>";
	echo "<pre class='code-box'>";
	echo "$contents";
	echo "</pre>";
	echo "</div>";
	echo "<div class='post-time'>$time</div>";
	echo "<div class='post-score'>Score: $votes</div>";
	echo "</div>";
}

?>
