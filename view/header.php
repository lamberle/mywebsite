<!DOCTYPE html> 
<html>
<head>
	<!--<link href="css/bootstrap.min.css" rel="stylesheet">-->
	 <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <!--<script src="js/bootstrap.min.js"></script>-->
	<meta charset="UTF-8">
	<link rel="shortcut icon" href="ressources/leo_logo.png" type="image/x-icon"/>
	<title>Léo Lambert</title>
	<link rel="stylesheet" type="text/css" href="./css/style.css" />
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
</head>
<body>	
	<nav>
		<div class="logo">
			<a class='navbar-brand' href='./'><h4>Léo Lambert</h4></a>
		</div>
		<ul class="nav-links">
			<li><a href='?r=album'>Albums</a></li>
			<li><a href='?r=image'>Images</a></li>
		</ul>
		</div>
		<div class="login">
			<?php
				if(isset($_SESSION["user"])) {
					echo '<p>Hello '.$_SESSION["user"]->user_pseudo.' !</p>';
					echo '<a href="?r=site/logout" style="color:rgb(255,0,0);margin-left:10px;font-weight:bold;">Logout</a>';
				} else {
					echo '<a href="?r=site/login" style="margin-right:10px;">Login</a>';
					echo ' | ';
					echo '<a href="?r=site/register" style="margin-left:10px;">Register</a>';
				}
			?>
		</div>
	</nav>
	<div class='container theme-showcase' role='main'>