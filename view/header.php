<!DOCTYPE html> 
<html>
<head>
	<meta name="viewport" content="width=device-width,initial-scale=1">
	<!--<link href="css/bootstrap.min.css" rel="stylesheet">-->
	 <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <!--<script src="js/bootstrap.min.js"></script>-->
	<meta charset="UTF-8">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="shortcut icon" href="ressources/leo_logo.png" type="image/x-icon"/>
	<title>Léo Lambert</title>
	<link rel="stylesheet" type="text/css" href="./css/style.css" />
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
	<script type="text/javascript">
		function myFunction() {
		  var x = document.getElementById("myTopnav");
		  if (x.className === "topnav") {
		    x.className += " responsive";
		  } else {
		    x.className = "topnav";
		  }
		}
	</script>
</head>
<body>
	<div class="topnav" id="myTopnav">
	  <a href='./' class="home">Léo Lambert</a>
	  <a href="?r=album">Albums</a>
	  <a href="?r=image">Images</a>
	  <a href="javascript:void(0);" class="icon" onclick="myFunction()">
	    <i class="fa fa-bars"></i>
	  </a>
	</div>
	<div class='container theme-showcase' role='main'>