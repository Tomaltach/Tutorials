<?php
	error_reporting(E_ALL);
	ini_set("display_errors", TRUE);
	
	session_start();
	session_destroy();
	echo "You have been logged out.";
	echo "<br /><a href='../index.php'>Log in</a>";
?>