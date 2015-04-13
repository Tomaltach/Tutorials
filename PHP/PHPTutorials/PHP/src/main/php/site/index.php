<?php
	error_reporting(E_ALL);
	ini_set("display_errors", TRUE);
?>

<HTML>
	<HEAD>
		<TITLE>Assets Login</TITLE>
	</HEAD>
	<BODY>
		<H1>Assets Login</H1>
		<FORM method='POST'>
			<TABLE>
				<TR>
					<TD>Choose a username:</TD>
					<TD><INPUT type='text' name='username'></TD>
				</TR>
				<TR>
					<TD>Choose a password:</TD>
					<TD><INPUT type='password' name='password'></TD>
				</TR>
				<TR>
					<TD></TD>
					<TD><INPUT type="submit" value='Log In!' onclick="this.form.action='authentication/login.php'"></TD>
				</TR>
			</TABLE>
		</FORM>
	</BODY>
</HTML>