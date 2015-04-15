<?php
	session_start();
	
	@$username = $_POST["username"];
	@$password = $_POST["password"];
	
	if(isset($_POST["username"])&&isset($_POST["password"])) {
		$connect = mysql_connect("localhost","root","") or die("Couldn't connect");
		mysql_select_db("phptutorials") or die("Couldn't find Database");
		$query = mysql_query("SELECT * FROM users WHERE username='$username'");
		$numrows = mysql_num_rows($query);
		if($numrows != 0) {
			$row = mysql_fetch_assoc($query);
			$dbusername = $row['username'];
			$dbpassword = $row['password'];
			// check to see that they match
			if($username == $dbusername && md5($password) == $dbpassword) {
				$_SESSION['authenticated'] = TRUE;
				//redirect
				header("Location: ../site/home.php");
				exit;
			}
		}
	}
?>

<!DOCTYPE html PUBLIC "=//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<HTML xmlns="http://www.w3.org/1999/xhtml">
	<HEAD>
		<TITLE>Login - Lecture 2</TITLE>
	</HEAD>
	<BODY>
		<H1>Login - Lecture 2</H1>
		<?php if(count($_POST) > 0) echo "INVALID LOGIN"; ?>
		<FORM method='POST' action="<?php echo $_SERVER["PHP_SELF"]; ?>">
			<TABLE>
				<TR>
					<TD>Choose a username:</TD>
					<TD><INPUT type='text' name='username'></TD>
					<TD></TD>
				</TR>
				<TR>
					<TD>Choose a password:</TD>
					<TD><INPUT type='password' name='password'></TD>
					<TD></TD>
				</TR>
				<TR>
					<TD></TD>
					<TD><INPUT type="submit" value='Log In!'></TD>
					<TD></TD>
				</TR>
			</TABLE>			
		</FORM>
	</BODY>
</HTML>