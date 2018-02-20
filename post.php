<?php
function createPost($author, $time, $votes, $contents) {
	echo "<div style='display: grid; margin: 16px 0px;'>";
	echo "<div style='grid-row:1; grid-column:1'>$author</div>";
	echo "<div style='border-style: solid; grid-row:2; grid-column-start:1; grid-column-end:4'>";
	echo "<pre style='padding: 0px 16px; font-family: ubuntu-mono, monospace; font-size: 16px; tab-size:4; -moz-tab-size:4'>";
	echo "$contents";
	echo "</pre>";
	echo "</div>";
	echo "<div style='grid-row:3; grid-column:1'>$time</div>";
	echo "<div style='grid-row:3; grid-column:3; text-align: right'>Score: $votes</div>";
	echo "</div>";
}

?>
