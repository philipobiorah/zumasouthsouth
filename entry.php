<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->

<?php session_start()?>
<!DOCTYPE html>
<html>
<head>
	<title>Zuma Film Festival: South South Zone</title>
	<!--fonts-->
		<link href='http://fonts.googleapis.com/css?family=Fredericka+the+Great' rel='stylesheet' type='text/css'>
		<link href='http://fonts.googleapis.com/css?family=Lato:100,300,400,700,900,100italic,300italic,400italic,700italic,900italic' rel='stylesheet' type='text/css'>
	<!--//fonts-->
			<link href="css/bootstrap.css" rel="stylesheet">
			<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
	<!-- for-mobile-apps -->
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<meta name="keywords" content="ZUMA SOUTH SOUTH FESTIVAL 2017" />
		<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
	<!-- //for-mobile-apps -->	
	<!-- js -->
		<script type="text/javascript" src="js/jquery.min.js"></script>
	<!-- js -->
	<!-- start-smoth-scrolling -->
		<script type="text/javascript" src="js/move-top.js"></script>
		<script type="text/javascript" src="js/easing.js"></script>
		<script type="text/javascript">
			jQuery(document).ready(function($) {
				$(".scroll").click(function(event){		
					event.preventDefault();
					$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
				});
			});
		</script>
	<!-- start-smoth-scrolling -->
</head>
<body>
<!-- header -->
<div class="header">
	<div class="container">
		<div><a href="index.html"><img src="images/zuma-logo.png"/></a></div>
		<div class="header-left"><a href="index.html">South South Zone</a></div>
		<div class="navigation">
			<nav class="navbar navbar-default">
					<div class="navbar-header">
						  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"> </span>
							<span class="icon-bar"> </span>
							<span class="icon-bar"> </span>
						  </button>
					</div>
					<div class="collapse navbar-collapse nav-wil" id="bs-example-navbar-collapse-1">
						  <ul class="nav navbar-nav">
							<li class="hvr-bounce-to-bottom"><a href="index.html">HOME <span class="sr-only">(current)</span></a></li>
							<li class="hvr-bounce-to-bottom"><a href="about.html">ABOUT</a></li>
							<li class="hvr-bounce-to-bottom"><a href="http://zumafilmfest.com/tour/" target="_blank">EVENT</a></li>
							<li class="hvr-bounce-to-bottom active"><a href="entry.php">ENTRY</a></li>
						  </ul>
						<div class="clearfix"> </div>
					</div><!-- /.navbar-collapse -->
			</nav>
		</div>
		<div class="clearfix"></div>
	</div>
</div>
<!-- //header -->
<!-- banner -->
<div class="banner2 page-head">
</div>
<!-- //banner -->
<!--start-about-->
<div class="about two">
		<div class="container">
		 <h3 class="tittle">Call for Submission</h3>
				<div class="about-top">
					<div class="col-md-12 about-top-right">
						
						<p>ZUMA Film Festival (1st to 5th December) Call for film Film entry for ZUMA Film Festival 2017. Films from South-South Zone are invited for entry in ZUMA Film Festival. 3 copies of the DVD in various category are to be submitted to the Dean's Office, Faculty of Humanities, University of Port Harcourt. Info: www.FemiShaka.com or call Prof. Femi Shaka +2348064421567 or Dr. Charles Okwuowulu +2348036446689. </p>
						<p>Alternatively, those faraway can submit films online via the online entry below. Film size should not be more than 700MB. Entry is free. Multiple films can be submitted by one person in the form of multiple entries. Allowed film types: mp4, webm and ogg formats. For further information on Zuma film festival, please click <a href="http://zumafilmfest.com">here</a></p>
					</div>
					<div class="clearfix"></div>
					</br>
					<form method="post" action="php/entry.php" enctype="multipart/form-data">
						<div class="col-md-6 col-md-offset-3">
							<h3 style="text-align:center;">Online Entry</h3>
							<p>Preferred browser: Google Chrome</p>
							<div id="Message">
								<?php 
									if(!empty($_SESSION['Message'])) {echo $_SESSION['Message'];}
										unset($_SESSION['Message']);		
										
								?>
							</div>
							</br>
							<div class="form-group">
								<label>First Name</label>
								<input type="text" class="form-control" name="firstName" required="">
							</div>
							<div class="clearfix"> </div>
							</br>
							<div class="form-group">
								<label>Last Name</label>
								<input type="text" class="form-control" name="lastName" required="">
							</div>
							<div class="clearfix"> </div>
							</br>
							<div class="form-group">
								<label>Title of film</label>
								<input type="text" class="form-control" name="filmTitle" required="">
							</div>
							<div class="clearfix"> </div>
							</br>
							<div class="form-group">
								<label>Date of Production</label>
								<input type="date" class="form-control" value="17-08-2017" min="01-12-2016" name="date" required="">
							</div>
							<div class="clearfix"> </div>
							</br>
							<div class="form-group">
								<label>Director's Name</label>
								<input type="text" class="form-control" name="directorsName" required="">
							</div>
							<div class="clearfix"> </div>
							</br>
							<div class="form-group">
								<label>Producer's Name</label>
								<input type="text" class="form-control" name="producersName" required="">
							</div>
							<div class="clearfix"> </div>
							</br>
							<div class="form-group">
								<label>Bio of Director</label>
								<textarea type="text" class="form-control" rows="7" name="directorsBio" required=""></textarea>
							</div>
							<div class="clearfix"> </div>
							</br>
							<div class="form-group">
								<label>Movie Synopsis</label>
								<textarea type="text" class="form-control" rows="7" name="movieSynopsis" required=""></textarea>
							</div>
							<div class="clearfix"> </div>
							</br>
							<h3>Upload Director's Photo</h3>
							</br>
							<p id="imageError"></p>
							</br>
							<input type="file" name="photo" id="photo" required="" onchange="validateImage('photo')">
							<div class="clearfix"> </div>
							</br>
							<h3>Upload Producer's Photo</h3>
							</br>
							<input type="file" name="photo2" id="photo2" required="" onchange="validateImage('photo2')">
							<div class="clearfix"> </div>
							</br>
							<h3>Upload Film</h3>
							</br>
							<input type="file" name="film" id="film" required="" onchange="validateVideo()">
							<p id="videoError"></p>
							<div class="clearfix"> </div>
							</br>
							<div class="col-md-6 col-md-offset-5">
								<input type="submit" value="Submit" style="color:#000000;" class="btn btn-default">
							</div>
							
						</div>
					</form>
				</div>
		</div>	 
</div>

<!-- copy -->
<div class="copy-right">
	<div class="container">
		<p> &copy; 2017 ZUFF SOUTH SOUTH ZONE. All Rights Reserved</p>
	</div>
</div>
<!-- copy -->
<!-- smooth scrolling -->
	<script type="text/javascript">
		$(document).ready(function() {
		/*
			var defaults = {
			containerID: 'toTop', // fading element id
			containerHoverID: 'toTopHover', // fading element hover id
			scrollSpeed: 1200,
			easingType: 'linear' 
			};
		*/								
		$().UItoTop({ easingType: 'easeOutQuart' });
		});
	</script>
	<a href="#" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>
<!-- //smooth scrolling -->


<!-- for bootstrap working -->
		<script src="js/bootstrap.js"></script>
<!-- //for bootstrap working -->
<script type="text/javascript" src="js/script.js"></script><!-- validation code for form -->
</body>
</html>