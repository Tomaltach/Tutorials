<?php
	error_reporting(E_ALL);
	ini_set("display_errors", TRUE);
	
	session_start();
	
	$username = $_POST['username'];
	$password = $_POST['password'];
	
	if($username && $password) {
		$connect = mysqli_connect("localhost","root","") or die("Couldn't connect");
		mysqli_select_db($connect, "test_site") or die("Couldn't find Database");
		$query = mysqli_query($connect, "SELECT * FROM users WHERE username='$username'");
		$numrows = mysqli_num_rows($query);
		if($numrows != 0) {
			$row = mysqli_fetch_assoc($query);
			$dbusername = $row['username'];
			$dbpassword = $row['password'];
			// check to see that they match
			if($username == $dbusername && $password == $dbpassword) {
				echo "You're in! Click <a href='member.php'>here</a> to enter the member page.";
				$_SESSION['username']=$dbusername;
			} else {
				die("Incorrect password! <a href='../index.php'><b>Login</b></a>");
			}
		} else {
			die("That user doen't exist! <a href='../index.php'><b>Login</b></a>");
		}
	} else {
		die("Please enter a username and password! <a href='../index.php'><b>Login</b></a>");
	}	
?>