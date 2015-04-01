<HTML>
	<HEAD>
		<TITLE>Register</TITLE>
	</HEAD>
	<BODY>
		<H1>Login</H1>
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
					<TD><INPUT type="submit" value='Register!' onclick="this.form.action='register.php'"></TD>
					<TD><INPUT type="submit" value='Log In!' onclick="this.form.action='authentication/login.php'"></TD>
				</TR>
			</TABLE>
			
		</FORM>
	</BODY>
</HTML>