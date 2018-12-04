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
		<meta name="keywords" content="" />
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
							<li class="hvr-bounce-to-bottom"><a href="entry.php">ENTRY</a></li>
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
<?php
	include 'php/db.php';
	if(isset($_GET['id']))
	{
		$Query = "SELECT * FROM entries WHERE id = '$_GET[id]' ";
		$run = mysqli_query($connection,$Query);
		while($rows = mysqli_fetch_assoc($run))
		{
			$filmTitle = $rows['filmTitle'];
			$directorsName = $rows['directorsName'];
			$directorsPhoto = $rows['photoName'];
			$directorsBio = $rows['directorsBio'];
			$producersName = $rows['producersName'];
			$producersPhoto = $rows['producersPhoto'];
			$DOP = $rows['DOP'];
			$movieSynopsis = $rows['movieSynopsis'];
			$filmName = $rows['fileName'];
		}
	}
?>
<!--start-about-->
<div class="about two">
		<div class="container">
			<h3><?php echo $filmTitle;?></h3>
			</br>
			<?php 
				echo "
					<Video width='920px' height='500px' controls>
						<source src='uploads/$filmName' type='video/mp4'>
						<source src='uploads/$filmName' type='video/webm'>
						<source src='uploads/$filmName' type='video/ogg'>
					</video>
					</br>
				";
			?>
			<h4>Date of Production: <?php echo $DOP?></h4>
			</br>
			<p><h4 style="text-align:justify">Movie Synopsis:</h4> <?php echo $movieSynopsis?></p>
			</br>
			<?php
				echo "
				<div class='col-md-3'>
					<div class='thumbnail'>
						<img src='imagesUpload/$directorsPhoto' title='' alt='' style='width:100%; height:250px'/>
					</div>
					<h4 class='title'>Director's Name: $directorsName</h4>
				</div>";
			?>	
			<?php
				echo "
				<div class='col-md-3'>
					<div class='thumbnail'>
						<img src='imagesUpload/$producersPhoto' title='' alt='' style='width:100%; height:250px'/>
					</div>
					<h4 class='title'>Producer's Name: $producersName</h4>
				</div>
				
				</br>";
			?>				
		</div>
</div>


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