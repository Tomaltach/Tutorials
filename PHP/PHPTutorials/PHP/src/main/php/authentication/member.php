<?php
	session_start();
	
	if($_SESSION['username']) {
		echo "Welcome ".$_SESSION['username']."!";
		echo "<br /><a href='logout.php'>Log out</a>";
	} else {
		echo "You must be logged in!";
		echo "<br /><a href='login.php'>Log in</a>";
	}
?>