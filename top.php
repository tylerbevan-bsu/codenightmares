<?php
	require_once('header.php');
	require_once('post.php');
?>
<!-- Content goes here  -->

<?php createPost("Tyler", "Feb 20, 2018", 10, "This\n\tIs some code:\n\t\tYup") ?>
<?php createPost("Tyler", "Feb 19, 2018", 8, "This\n\tIs some code:\n\t\tYup") ?>
<?php createPost("Tyler", "Feb 18, 2018", 11, "This\n\tIs some code:\n\t\tYup") ?>
<?php createPost("Tyler", "Feb 17, 2018", 20, "This\n\tIs some code:\n\t\tYup") ?>

<!-- End content        -->
<?php
	require_once('footer.php');
?>
