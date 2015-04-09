<?php
	error_reporting(E_ALL);
	ini_set("display_errors", TRUE);
	
	session_start();
?>

<HTML>
	<HEAD>
		<TITLE>Member</TITLE>
	</HEAD>
	<BODY>
		<DIV>
			<?php checkstatus() ?>
		</DIV>
	</BODY>
</HTML>

<?php	
	function checkstatus() {
		if($_SESSION['username']) {
			echo "Welcome ".$_SESSION['username']."!";
			printinfo();
			echo "<br /><a href='logout.php'>Log out</a>";
		} else {
			echo "You must be logged in!";
			echo "<br /><a href='../index.php'>Log in</a>";
		}
	}
	function printinfo() {
		$username = $_SESSION['username'];
		
		//open database
		$connect = mysqli_connect("localhost","root","") or die("Couldn't connect");
		mysqli_select_db($connect, "test_site") or die("Couldn't find Database");
		$query = mysqli_query($connect, "SELECT * FROM users WHERE username='$username'");
		$numrows = mysqli_num_rows($query);					
		if($numrows != 0) {
			$row = mysqli_fetch_assoc($query);
			$dbid = $row['id'];
			$dbusername = $row['username'];
			echo "<BR /><BR />".$dbid;
			echo " - ".$dbusername."<BR />";
			
			if($dbusername == "admin") {
				echo "<BR />Dynamic websites - <a href='../../dynamicwebsites/fakegoogle.php'>My Google</a><BR />";
			}				
		} else {
			die("ERROR!");
		}
	}
?>