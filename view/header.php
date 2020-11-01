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
	<link href="https://fonts.googleapis.com/css2?family=Bowlby+One+SC&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Poor+Story" rel="stylesheet">
	<link rel="shortcut icon" href="ressources/leo_logo.png" type="image/x-icon"/>
	<title>Léo Lambert</title>
	<link rel="stylesheet" type="text/css" href="./css/style.css" />
	<link rel="stylesheet" type="text/css" href="./css/polaroid.css" />
	<?php
		if(isset(parameters()["r"]) && parameters()["r"] == "site/resume") {
			echo '<link rel="stylesheet prefetch" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">';
			echo '<link rel="stylesheet" type="text/css" href="./css/resume.css" />';
		}
	?>
	<script src="https://use.typekit.net/bkt6ydm.js"></script>
<script>try{Typekit.load({ async: true });}catch(e){}</script>
	<link href="https://fonts.googleapis.com/css2?family=Fredericka+the+Great&display=swap" rel="stylesheet">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
	<script type="text/javascript">
		function myFunction() {
		  var x = document.getElementById("myLinks");
		  if (x.style.display === "block") {
		    x.style.display = "none";
		  } else {
		    x.style.display = "block";
		  }
		}
	</script>
</head>
<body>
	<?php
		$options = [
		    "site" => "About",
		    "album" => "Albums",
		    "image" => "Images",
		    "site/resume" => "Experiences",
		];
	?>
	<div class="rzm_profile_nav">
           <div class="sticky">
	           	<div class="logo">
	            	<img src="ressources/profile5.png" alt="profile_photo" class="img-circle">
	           	</div>
             <!-- Start primary navigation -->
	          	<div class="main-menu">
	              <ul class="primary">
	           		<?php
						foreach ($options as $key => $value) {
							if(isset(parameters()["r"]) && parameters()["r"] == $key){
								$style = "color:#00bbcc";
							} else {
								$style="";
							}
							echo '<li><a href="?r='.$key.'" style="'.$style.'"">'.$value.'</a></li>';
						}
					?>
	              </ul>
	              
	              <div class="social_nav">
	               <a href="https://www.linkedin.com/in/l%C3%A9o-lambert/" target="_blank"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
	               <a href="https://www.instagram.com/leolambert6/" target="_blank"><i class="fa fa-instagram" aria-hidden="true"></i></a>
	               <a href="https://github.com/lamberle" target="_blank"><i class="fa fa-github" aria-hidden="true"></i></a>
	              </div>
	          	</div>
          <!-- End Primary navigation -->
        </div>
    
    </div>
 <!-- MOBILE MENU -->
	<div class="topnav">
	  <a href="?r=site" class="active" style="font-size: 22px;padding: 7px;">Léo LAMBERT</a>
	  <!-- Navigation links (hidden by default) -->
	  <div id="myLinks">
   		<?php
			foreach ($options as $key => $value) {
				if(isset(parameters()["r"]) && parameters()["r"] == $key){
					$style = "color:#00bbcc";
				} else {
					$style="";
				}
				echo '<a href="?r='.$key.'" style="'.$style.'"">'.$value.'</a>';
			}
		?>
	  </div>
	  <!-- "Hamburger menu" / "Bar icon" to toggle the navigation links -->
	  <a href="javascript:void(0);" class="icon" onclick="myFunction()">
	    <i class="fa fa-bars"></i>
	  </a>
	</div>

	<div class='container theme-showcase' role='main'>