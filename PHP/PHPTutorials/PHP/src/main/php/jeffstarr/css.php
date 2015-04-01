<!-- Custom Login/Register/Password Code @ http://digwp.com/2010/12/login-register-password-code/ -->
<!-- CSS -->

<style type="text/css">
/* tabbed list */
ul.tabs_login {
	padding: 0; margin: 20px 0 0 0;
	position: relative;
	list-style: none;
	font-size: 14px;
	z-index: 1000;
	float: left;
	}
ul.tabs_login li {
	border: 1px solid #E7E9F6;
	 -webkit-border-top-right-radius: 10px;
	 -khtml-border-radius-topright: 10px;	
	 -moz-border-radius-topright: 10px;
	border-top-right-radius: 10px;
	 -webkit-border-top-left-radius: 10px;
	 -khtml-border-radius-topleft: 10px;	
	 -moz-border-radius-topleft: 10px;
	border-top-left-radius: 10px;
	line-height: 28px; /* = */ height: 28px;
	padding: 0; margin: 0 5px 0 0;
	position: relative;
	background: #fff;
	overflow: hidden;
	float: left;
	}
ul.tabs_login li a {
	text-decoration: none;
	padding: 0 10px;
	display: block;
	outline: none;
	}
html ul.tabs_login li.active_login {
	border-left: 1px solid #E7E9F6;
	border-bottom: 1px solid #fff;
	 -webkit-border-top-right-radius: 10px;
	 -khtml-border-radius-topright: 10px;	
	 -moz-border-radius-topright: 10px;
	border-top-right-radius: 10px;
	 -webkit-border-top-left-radius: 10px;
	 -khtml-border-radius-topleft: 10px;	
	 -moz-border-radius-topleft: 10px;
	border-top-left-radius: 10px;
	background: #fff;
	color: #333;
	}
html body ul.tabs_login li.active_login a { font-weight: bold; }
.tab_container_login {
	background: #fff;
	position: relative;
	margin: 0 0 20px 0;
	border: 1px solid #E7E9F6;
	 -webkit-border-bottom-left-radius: 10px;
	 -khtml-border-radius-bottomleft: 10px;	
	 -moz-border-radius-bottomleft: 10px;
	border-bottom-left-radius: 10px;
	 -webkit-border-bottom-right-radius: 10px;
	 -khtml-border-radius-bottomright: 10px;	
	 -moz-border-radius-bottomright: 10px;
	border-bottom-right-radius: 10px;
	 -webkit-border-top-right-radius: 10px;
	 -khtml-border-radius-topright: 10px;	
	 -moz-border-radius-topright: 10px;
	border-top-right-radius: 10px;
	z-index: 999;
	float: left;
	width: 100%;
	top: -1px;
	}
.tab_content_login {
	padding: 7px 15px 15px 15px;
	padding-top: 10px;
	}
	.tab_content_login ul {
		padding: 0; margin: 0 0 0 15px;
		}
		.tab_content_login li { margin: 5px 0; }
/* global styles */
#login-register-password {}
	#login-register-password h3 {
		border: 0 none;
		margin: 10px 0;
		padding: 0;
		}
	#login-register-password p {
		margin: 0 0 15px 0;
		padding: 0;
		}
/* form elements */
.wp-user-form {}
	.username, .password, .login_fields {
		margin: 7px 0 0 0;
		overflow: hidden;
		width: 100%;
		}
		.username label, .password label { float: left; clear: none; width: 25%; }
		.username input, .password input { 
			font: 12px/1.5 "Lucida Grande", "Lucida Sans Unicode", Verdana, sans-serif;
			float: left; clear: none; width: 200px; padding: 2px 3px; color: #777;
			}
.rememberme { overflow: hidden; width: 100%; margin-bottom: 7px; }
#rememberme { float: left; clear: none; margin: 4px 4px -4px 0; }
.user-submit { padding: 5px 10px; margin: 5px 0; }
.userinfo { float: left; clear: none; width: 75%; margin-bottom: 10px; }
	.userinfo p { 
		margin-left: 10px; 
		}
.usericon { float: left; clear: none; width: 15%; margin: 0 0 10px 22px; }
	.usericon img {
		border: 1px solid #F4950E;
		padding: 1px;
		}

<!-- Custom Login/Register/Password Code @ http://digwp.com/2010/12/login-register-password-code/ -->