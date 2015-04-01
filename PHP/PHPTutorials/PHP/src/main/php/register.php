<HTML>
	<HEAD>
		<TITLE>Register</TITLE>
	</HEAD>
	<BODY>
		<H1>Register</H1>
		<p>Please fill in <b>all</b> fields!</p>
		<FORM method='POST'>
			<TABLE>
				<TR>
					<TD>Your full name:</TD>
					<TD>
						<INPUT type='text' name='fullname'>
					</TD>
				</TR>
				<TR>
					<TD>Choose a username:</TD>
					<TD>
						<INPUT type='text' name='username'>
					</TD>
				</TR>
				<TR>
					<TD>Choose a password:</TD>
					<TD><INPUT type='password' name='password'></TD>
				</TR>
				<TR>
					<TD>Repeat your password:</TD>
					<TD><INPUT type='password' name='retype_password'></TD>
				</TR>
				<TR>
					<TD><INPUT type="submit" value='Log In!' name='login' onclick="this.form.action='index.php'"></TD>
					<TD><INPUT type="submit" value='Register!' name='register' onclick="this.form.action='authentication/register.php'"></TD>
				</TR>
			</TABLE>
		</FORM>
	</BODY>
</HTML>