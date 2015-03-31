<?php
	session_start();
	
	$username = $_POST['username'];
	$password = $_POST['password'];
	
	if($username && $password) {
		$connect = mysql_connect("localhost","root","") or die("Couldn't connect");
		mysql_select_db("phptutorials") or die("Couldn't find Database");
		$query = mysql_query("SELECT * FROM users WHERE username='$username'");
		$numrows = mysql_num_rows($query);
		if($numrows != 0) {
			$row = mysql_fetch_assoc($query);
			$dbusername = $row['username'];
			$dbpassword = $row['password'];
			// check to see that they match
			if($username == $dbusername && $password == $dbpassword) {
				echo "You're in! Click <a href='member.php'>here</a> to enter the member page.";
				$_SESSION['username']=$username;
			} else {
				die("Incorrect password!");
			}
		} else {
			die("That user doen't exist!");
		}
	} else {
		die("Please enter a username and password!");
	}	
?>