<?php
	//home.php
	
	session_start();
?>

<!DOCTYPE html PUBLIC "=//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<HTML>
	<HEAD>
		<TITLE>Home - Lecture 2</TITLE>
	</HEAD>
	<BODY>
		<H1>Home</H1>
		<H3>
			<?php if(isset($_SESSION["authenticated"])) { ?>
				You are logged in!
				<BR />
				<A href="../authentication/logout.php">Log Out</A>
			<?php } else { ?>
				You are <B>not</B> logged in!
				<BR />
			<?php } ?>
		</H3>
		<ul>
			<li><A href="../authentication/loginpage.php">version 1</A></li>
			<li><A href="">version 2</A></li>
			<li><A href="">version 3</A></li>
			<li><A href="">version 4</A></li>
		</ul>
	</BODY>
</HTML>