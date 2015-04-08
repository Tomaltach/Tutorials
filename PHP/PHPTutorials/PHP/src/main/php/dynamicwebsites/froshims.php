<HTML>
	<HEAD>
		<TITLE>Frosh IMs</TITLE>
	</HEAD>
	<BODY>
		<BR />
		<DIV align="center">
			<H1>Register for Frosh IMs</H1>
			<FORM action="froshimsregistered.php" method="get">
				Name: <INPUT name="name" type="text" />
				<BR />
				Email: <INPUT name="email" type="text" />
				<BR />
				Captain: <INPUT name="captain" type="checkbox" />
				<BR />
      			<INPUT class="radio" type="radio" name="gender" value="Male" /><SPAN>M</SPAN>
      			<INPUT class="radio" type="radio" name="gender" value="Female" /><SPAN>F</SPAN>
				<BR />
				<SELECT name="teams" >
					<OPTION value="?">Select Team</OPTION>
					<OPTION value="Cork">Cork</OPTION>
					<OPTION value="Dublin">Dublin</OPTION>
					<OPTION value="Kerry">Kerry</OPTION>
					<OPTION value="Mayo">Mayo</OPTION>
				</SELECT>
				<BR /><BR />
    			<INPUT name="register" type="submit" value="Register" />
			</FORM>
		</DIV>
	</BODY>
</HTML>