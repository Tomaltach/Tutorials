<?php
	error_reporting(E_ALL);
	ini_set("display_errors", TRUE);
?>

<HTML>
	<HEAD>
		<TITLE>Frosh IMs Registered</TITLE>
	</HEAD>
	<BODY>
		<BR />
		<DIV align="center">
			<H1>Thanks for registering, <?= $_GET["name"] ?></H1>
			<BR />
			<B>Gender:</B> <?= $_GET["gender"] ?>
			<BR />
			<?php if(isset($_GET["captain"])): ?>
				<B>Captain:</B> YES!
			<?php endif ?>
			<BR />
			<B>Team:</B> <?= $_GET["teams"] ?>
		</DIV>
	</BODY>
</HTML>