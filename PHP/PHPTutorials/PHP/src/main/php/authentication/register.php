<HTML>
	<HEAD>
		<TITLE>Register</TITLE>
	</HEAD>
	<BODY>
		<H1>Register</H1>
		<?php			
			$submit = $_POST['register'];
			
			//form data
			$fullname = strip_tags($_POST['fullname']);
			$username = strip_tags($_POST['username']);
			$password = strip_tags($_POST['password']);
			$retype_password = strip_tags($_POST['retype_password']);
			$date = date("Y-m-d");
			
			//form errors
			$fnerror = "";
			$unerror = "";
			$perror = "";
			$rperror = "";
			
			//check for existance
			if($submit) {
				if($fullname&&$username&&$password&&$retype_password) {
					$check = 0;
					if($check == 0) {
						//fullname
						if(strlen($fullname)<6 || strlen($fullname)>25) {
							$fnerror = "Full name must be between 6 and 25 characters!";
							$check++;
						}
						//username
						if(strlen($username)<6 || strlen($username)>25) {
							$unerror = "Username must be between 6 and 25 characters!";
							$check++;
						}
						//password
						if(strlen($password)<6 || strlen($password)>25) {
							$perror = "Password must be between 6 and 25 characters!";
							$check++;
						}
						//retype_password
						if($password != $retype_password) {
							$rperror = "Passwords do not match!";
							$check++;
						}
						if($check == 0) {
							$password = md5($password);
							$retype_password = md5($retype_password);
							//open database
							$connect = mysql_connect("localhost","root","") or die("Couldn't connect");
							mysql_select_db("phptutorials") or die("Couldn't find Database");
							$rowquery = mysql_query("SELECT * FROM users WHERE username='$username'");
							$numrows = mysql_num_rows($rowquery);					
							if($numrows != 0) {
								$unerror = "User already exists!";
							} else {
								$query = mysql_query(
									"INSERT INTO users VALUES('','$fullname','$username','$password','$date')"
								);
								die("You have been registered. Click <a href='../index.php'>here</a>!");
							}
							
						}
					}
				} else {
					echo "Must fill in ALL fields!!!";
				}
			}			
		?>
		<p>Please fill in <b>all</b> fields!</p>
		<FORM method='POST'>
			<TABLE>
				<TR>
					<TD>Your full name:</TD>
					<TD>
						<INPUT type='text' name='fullname'
							value='<?php echo $fullname; ?>'>
					</TD>
					<TD><?php echo $fnerror; ?></TD>
				</TR>
				<TR>
					<TD>Choose a username:</TD>
					<TD>
						<INPUT type='text' name='username'
							value='<?php echo $username; ?>'>
					</TD>
					<TD><?php echo $unerror; ?></TD>
				</TR>
				<TR>
					<TD>Choose a password:</TD>
					<TD><INPUT type='password' name='password'></TD>
					<TD><?php echo $perror; ?></TD>
				</TR>
				<TR>
					<TD>Repeat your password:</TD>
					<TD><INPUT type='password' name='retype_password'></TD>
					<TD><?php echo $rperror; ?></TD>
				</TR>
				<TR>
					<TD><INPUT type="submit" value='Log In!' name='login' onclick="this.form.action='../index.php'"></TD>
					<TD>
						<INPUT type="submit" value='Register!' name='register' onclick="this.form.action='register.php'"</TD>
				</TR>
			</TABLE>
		</FORM>
	</BODY>
</HTML>