<?php
	error_reporting(E_ALL);
	ini_set("display_errors", TRUE);
?>

<HTML>
	<HEAD>
		<TITLE>Member</TITLE>
		<LINK rel="stylesheet" type="text/css" href="../../../css/accordion-style.css">
		<SCRIPT>
			$(document).ready(function () {
	  			$('#nav > li > a').click(function(){
	    			if ($(this).attr('class') != 'active'){
	      				$('#nav li ul').slideUp();
	      				$(this).next().slideToggle();
	      				$('#nav li a').removeClass('active');
	      				$(this).addClass('active');
	    			}
	  			});
			});
		</SCRIPT>
		<STYLE>
			#nav {
			    float: left;
			    width: 280px;
			    border-top: 1px solid #999;
			    border-right: 1px solid #999;
			    border-left: 1px solid #999;
			}
			#nav li a {
			    display: block;
			    padding: 10px 15px;
			    background: #ccc;
			    border-top: 1px solid #eee;
			    border-bottom: 1px solid #999;
			    text-decoration: none;
			    color: #000;
			}
			#nav li a:hover, #nav li a.active {
			    background: #999;
			    color: #fff;
			}
			#nav li ul {
			    display: none; // used to hide sub-menus
			}
			#nav li ul li a {
			    padding: 10px 25px;
			    background: #ececec;
			    border-bottom: 1px dotted #ccc;
			}
		</STYLE>
	</HEAD>
	<BODY>
		<?php
			session_start();
			
			if($_SESSION['username']) {
				echo "Welcome ".$_SESSION['username']."!";
				printinfo();
				echo "<br /><a href='logout.php'>Log out</a>";
			} else {
				echo "You must be logged in!";
				echo "<br /><a href='../index.php'>Log in</a>";
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
					$dbusername = $row['username'];
					echo "<BR /><BR />".$dbusername;
					?>
					<ul id="nav">
					  	<li><a href="#">Item 1</a>
					    	<ul>
					      		<li><a href="#">Sub-Item 1 a</a></li>
					      		<li><a href="#">Sub-Item 1 b</a></li>
					      		<li><a href="#">Sub-Item 1 c</a></li>
					    	</ul>
					  	</li>
					  	<li><a href="#">Item 2</a>
					    	<ul>
					      		<li><a href="#">Sub-Item 2 a</a></li>
					      		<li><a href="#">Sub-Item 2 b</a></li>
					    	</ul>
					  	</li>
					  	<li><a href="#">Item 3</a>
						    <ul>
					      		<li><a href="#">Sub-Item 3 a</a></li>
					      		<li><a href="#">Sub-Item 3 b</a></li>
					      		<li><a href="#">Sub-Item 3 c</a></li>
					      		<li><a href="#">Sub-Item 3 d</a></li>
					    	</ul>
					  	</li>
					  	<li><a href="#">Item 4</a>
						    <ul>
					      		<li><a href="#">Sub-Item 4 a</a></li>
					      		<li><a href="#">Sub-Item 4 b</a></li>
					      		<li><a href="#">Sub-Item 4 c</a></li>
					    	</ul>
					  	</li>
					</ul>
					
					<DIV>
						<SELECT name="myOptions">
						  	<OPTGROUP label="Category 1">
							    <OPTION value="1">First Choice</OPTION>
						    	<OPTION value="2">Second Choice</OPTION>
						    	<OPTION value="3">Third Choice</OPTION>
						  	</OPTGROUP>
						  	<OPTGROUP label="Category 2">
						    	<OPTION value="4">Fourth Choice</OPTION>
						    	<OPTION value="5">Fifth Choice</OPTION>
						  	</OPTGROUP>
						  	<OPTGROUP label="Category 3">
							    <OPTION value="6">Sixth Choice</OPTION>
						    	<OPTION value="7">Seventh Choice</OPTION>
						  	</OPTGROUP>
						</SELECT>
					</DIV>
					<?php			
					
					if($dbusername == "admin") {
						echo "<BR />Dynamic websites - <a href='../../dynamicwebsites/fakegoogle.php'>My Google</a><BR />";
					}
					
				} else {
					die("ERROR!");
				}
			}
		?>
	</BODY>
</HTML>