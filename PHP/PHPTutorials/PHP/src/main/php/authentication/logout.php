<?php
	session_start();
	session_destroy();
	echo "You have been logged out.";
	echo "<br /><a href='../index.php'>Log in</a>";
?>