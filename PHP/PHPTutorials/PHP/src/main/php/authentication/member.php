<?php
	session_start();
	
	if($_SESSION['fullname']&&$_SESSION['username']) {
		echo "Welcome ".$_SESSION['fullname']."!";
		printinfo();
		echo "<br /><a href='logout.php'>Log out</a>";
	} else {
		echo "You must be logged in!";
		echo "<br /><a href='login.php'>Log in</a>";
	}
	
	function printinfo() {
		$username = $_SESSION['username'];
		
		//open database
		$connect = mysql_connect("localhost","root","") or die("Couldn't connect");
		mysql_select_db("phptutorials") or die("Couldn't find Database");
		$query = mysql_query("SELECT * FROM users WHERE username='$username'");
		$numrows = mysql_num_rows($query);					
		if($numrows != 0) {
			$row = mysql_fetch_assoc($query);
			$dbfullname = $row['fullname'];
			$dbusername = $row['username'];
			$dbdate = $row['date'];
			echo "<BR /><BR />".$dbfullname;
			echo "<BR />".$dbusername;
			echo "<BR />".$dbdate."<BR />";
			
			if($dbusername == "admin#") {
				echo "<BR />Dynamic websites - <a href='../dynamicwebsites/home.php'>Dynamic Websites</a><BR />";
			}
			
		} else {
			die("ERROR!");
		}
	}
?>