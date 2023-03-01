<?php
	# Stop Hacking attempt
	define('__APP__', TRUE);

	# Start session
	session_start();

	# Database connection
	include ("dbconn.php");

	# Variables MUST BE INTEGERS
	if(isset($_GET['menu'])) { $menu   = (int)$_GET['menu']; }
	if(isset($_GET['action'])) { $action   = (int)$_GET['action']; }

	# Variables MUST BE STRINGS A-Z
	if(!isset($_POST['_action_']))  { $_POST['_action_'] = FALSE;  }

	if (!isset($menu)) { $menu = 1; }

	# Classes & Functions
	include_once("functions.php");
?>



<!DOCTYPE html>
<html>
	<head>
		
		
		<link rel="stylesheet" href="style.css">
		
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
        <meta http-equiv="content-type" content="text/html; charset=utf-8">
        <meta name="description" content="some description">
        <meta name="keywords" content="keyword 1, keyword 2, keyword 3, keyword 4, ...">
		
		
		<meta itemprop="name" content="Hello Example">
		<meta itemprop="description" content="Some description">
		<meta itemprop="image" content="Your URL"> 
		
		
		<meta property="og:title" content="Hello Example">
		<meta property="og:type" content="article">
		<meta property="og:url" content="Your URL">
		<meta property="og:image" content="Your URL">
		<meta property="og:description" content="Some description">
		<meta property="article:tag" content="keyword 1, keyword 2, keyword 3, keyword 4, ...">
		
		
		<meta name="twitter:title" content="Hello Example">
		<meta name="twitter:description" content="Some description">
		
        <meta name="author" content="ttomljeno@tvz.hr">
		
		<link rel="icon" href="favicon.ico" type="image/x-icon"/>
		<link rel="shortcut icon" href="favicon.ico" type="image/x-icon"/>
		
		<title>Index Page</title>
	</head>
<body>
	<header>
		<div class="qatar-banner"></div>
		<nav>
			<ul>
			  <li><a href="index.php?menu=1">Home</a></li>
			  <li><a href="index.php?menu=2">News</a></li>
			  <li><a href="index.php?menu=3">Contact</a></li>
			  <li><a href="index.php?menu=4">About</a></li>
			  <li><a href="index.php?menu=5">Gallery</a></li>
			  <?php
			  	if (!isset($_SESSION['user']['valid']) || $_SESSION['user']['valid'] == 'false') {
					print '
						<li><a href="index.php?menu=9">Register</a></li>
						<li><a href="index.php?menu=10">Sign In</a></li>
					';
				}
				else if ($_SESSION['user']['valid'] == 'true') {
					print '
						<li><a href="index.php?menu=11">Admin</a></li>
						<li><a href="signout.php">Sign Out</a></li>
					';
				}
						 
			  ?>
			</ul>
		</nav>
	</header>
	<?php

		if (isset($_SESSION['message'])) {
			print $_SESSION['message'];
			unset($_SESSION['message']);
		}

		# Homepage
		if (!isset($_GET['menu']) || $_GET['menu'] == 1) { include("home.php"); }
		
		# News
		else if ($_GET['menu'] == 2) { include("news.php"); }
		
		else if ($_GET['menu'] == 6) { include("news1.php"); }

		else if ($_GET['menu'] == 7) { include("news2.php"); }

		else if ($_GET['menu'] == 8) { include("news3.php"); }

		# Contact
		else if ($_GET['menu'] == 3) { include("contact.php"); }
		
		# About us
		else if ($_GET['menu'] == 4) { include("aboutus.php"); }

		# Gallery
		else if ($_GET['menu'] == 5) { include("gallery.php"); }

		else if ($_GET['menu'] == 9) { include("register.php"); }

		else if ($_GET['menu'] == 10) { include("signin.php"); }

		else if ($_GET['menu'] == 11) { include("admin.php"); }

		
	
	?>
	<footer>
		<p>Copyright &copy; 2022 Tomislav Tomljenović <a href="https://github.com/TomislavTomljenovic/NTPWS_Faks"><img src="img/64439.png" title="Github" alt="Github"></a></p>
	</footer>
</body>
</html>
