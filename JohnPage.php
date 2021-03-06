﻿<!doctype html>
<html>
<head>
	<meta charset="utf-8">

<title>JohnsPage</title>
</head>
	
<style>
	html, body{
		height: 200%;
		width: 100%;
		max-height: 100%;
		margin:0;
		padding:0;
		background-image: url("Images/vinyl.jpg");
		background-size: 100% 5000%;
		background-repeat: no-repeat;
		
	}
	.bgMargin{
		margin-left: -5%;
		margin-right: -5%;
		padding: 25px;
	}
	.resizeImg {
		width: 100%;
		height: auto;
		display:block;
		margin-left: auto;
		margin-right:auto;
		margin-top:50%;
		margin-bottom:50%;
		border-radius: 25px;
		border-width: 5px;
		border-color: lavender;
	}
	
	.resizeImg2 {
		width: 50%;
		height: auto;
		display:block;
		margin-left: auto;
		margin-right:auto;
		border-radius: 20px;
	}
	
	.textColor {
		text-align: center;
		word-wrap: break-word;
		color:aliceblue;
		
	}
	.positioning{
		align-content: center;
		margin-bottom: 50px;
		margin-top: 50px;
	}

	
</style>
<body>
	<?php require_once ('Navbar.php'); ?>
	<div class="container-fluid textColor">
  	<h1 class = "bgMargin" style = "background-color: black">John Kiser<br>Hello and welcome!</h1>
	
		<br>
	

  	<div class="row">
   		 <div class="col-xs-5 col-sm-5">
			 <h2>Bio:</h2>
			 <p>
                I studied music for years at the university of Idaho and while studying music education I discovered a fascination with the development of video games and how music plays a part in the gaming experience. This eventually led me to the GIMM program at BSU where I am currently studying game development and design. I am a nerd through and though and spend most of my free time either playing video games or playing dungeons and dragons. I was a founding member of the Dungeons and Broncos club at BSU and enjoy bringing a game I love so much to so many different people.
			</p> 
			 <br>
			 
			 <h5>Check out some games I have helped make here.<br><a href = "https://play.google.com/store/search?q=sineglitch&c=apps"><img src="Images/SineGlitch.png" class = "resizeImg2" alt = "SineGlitch Logo"></a></h5>
		</div>
		
    	<div class="col-xs-2 col-sm-2">
			<img src="Images/JohnPicture.jpg" class="resizeImg" alt="Johnny Boi">
		</div>
		
    	<div class="col-xs-5 col-sm-5">
			<h2>Skills:</h2>
			<p>
                    I am a classically trained musician and composer. I have taught elementary music and private lessons. I have a basic understanding of a couple coding languages, C# and Action Script. I am an accomplished dungeon master and have taught many people to play many differing tabletop roll playing games.
				<br>
				<br>
				<b>Here is a playlist of some gameboy style chip tunes.</b>
        	</p>
			<iframe width="75%" height="300" scrolling="no" frameborder="no" allow="autoplay" src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/playlists/207716434&amp;color=%23ff5500&amp;auto_play=false&amp;hide_related=false&amp;show_comments=true&amp;show_user=true&amp;show_reposts=false&amp;show_teaser=true&amp;visual=true">Where does this show up?</iframe>
		</div>
 	 </div>		
	</div>
</body>
</html>
