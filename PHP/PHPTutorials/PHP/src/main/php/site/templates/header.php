<?php
	error_reporting(E_ALL);
	ini_set("display_errors", TRUE);
	
	session_start();
?>

<div id="header">
	<img src="../../../resource/images/templates/library-logo.png"/>
	 
	<div style="float:right;">
		<a href="?lang=en"><img src="../../../resource/images/templates/flagGb.png" alt="GB"/></a>
		<a href="?lang=fr"><img src="../../../resource/images/templates/flagFr.png" alt="FR"/></a>
		<a href="?lang=de"><img src="../../../resource/images/templates/flagDe.png" alt="DE"/></a>
		
		<?php if($_SESSION['username']): ?>
			<a href="../authentication/logout"/>Logout</a>
		<?php else: ?>
			<a href="../index.php"/>Login</a>
		<?php endif ?>
	</div>
</div>