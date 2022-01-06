<?php 
	define('__APP__', TRUE);
    session_start();
	include ("dbconn.php");
    if(isset($_GET['menu'])) { $menu   = (int)$_GET['menu']; }
	if(isset($_GET['action'])) { $action   = (int)$_GET['action']; }
    if(!isset($_POST['_action_']))  { $_POST['_action_'] = FALSE;  }
	if (!isset($menu)) { $menu = 1; }
    include_once("functions.php");

print '
<!DOCTYPE html>
<html>
	<head>
		<!-- CSS -->
		<link rel="stylesheet" href="style.css">
		<!-- End CSS -->
		<!-- meta elements -->
		<meta name="viewport" content="width=device-width; initial-scale=1.0; maximum-scale=1.0; user-scalable=0;">
        <meta http-equiv="content-type" content="text/html; charset=utf-8">
        <meta name="description" content="Blendo games.">
        <meta name="keywords" content="Blendo, Blendo games, Games, Video Games">
        <meta name="author" content="apolit1@vvg.hr">
		<!-- favicon meta -->
		<link rel="icon" href="favicon.ico" type="image/x-icon"/>
		<link rel="shortcut icon" href="favicon.ico" type="image/x-icon"/>
		<!-- end favicon meta -->
		<!-- end meta elements -->
		<!-- Google Fonts -->
		<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet"> 
		<!-- End Google Fonts -->
		<title>Example page - HTML5</title>
	</head>
<body>
	<header>
		<div'; if ($menu > 1) { print ' class="hero-subimage"'; } else { print ' class="hero-image"'; }  print '></div>
		<nav>';
			include("menu.php");
		print '</nav>
	</header>
	<main>';
		if (isset($_SESSION['message'])) {
			print $_SESSION['message'];
			unset($_SESSION['message']);
		}
	# Homepage
	if (!isset($menu) || $menu == 1) { include("home.php"); }
	# News
	else if ($menu == 2) { include("news.php"); }
	# Contact
	else if ($menu == 3) { include("contact.php"); }
	# About us
	else if ($menu == 4) { include("about-us.php"); }
	# Register
	else if ($menu == 5) { include("register.php"); }
	# Signin
	else if ($menu == 6) { include("signin.php"); }
	# Admin webpage
	else if ($menu == 7) { include("admin.php"); }
	print '
	</main>
	<footer>
		<p>Copyright &copy; ' . date("Y") . ' Antonio Politeo</p>
	</footer>
</body>
</html>';
?>