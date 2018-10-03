<!--A Design by W3layouts
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html lang="en">
<head>
<title>ATBU Library</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Hosting City Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- bootstrap-css -->
<link href="<?=base_url()?>public/css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<!--// bootstrap-css -->
<!-- css -->
<link rel="stylesheet" href="<?=base_url()?>public/css/style.css" type="text/css" media="all" />
<!--// css -->
<!-- font-awesome icons -->
<link href="<?=base_url()?>public/css/font-awesome.css" rel="stylesheet"> 
<!-- //font-awesome icons -->
<!-- font -->
<link href="//fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i" rel="stylesheet">
<link href='//fonts.googleapis.com/css?family=Roboto+Condensed:400,700italic,700,400italic,300italic,300' rel='stylesheet' type='text/css'>
<!-- //font -->
<script src="<?=base_url()?>public/js/jquery-1.11.1.min.js"></script>
<script src="<?=base_url()?>public/js/bootstrap.js"></script>
<script src="<?=base_url()?>public/js/SmoothScroll.min.js"></script>
<script type="text/javascript">
	jQuery(document).ready(function($) {
		$(".scroll").click(function(event){		
			event.preventDefault();
			$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
		});
	});
</script>
<link href='<?=base_url()?>public/css/immersive-slider.css' rel='stylesheet' type='text/css'>
<!-- pricing -->
<link rel="stylesheet" href="<?=base_url()?>public/css/jquery.flipster.css">
<!-- //pricing -->
</head>
<body>
	<!-- header-top -->
	<div class="header-top">
		<div class="container">
			<div class="w3layouts-address">
				<ul>
				<li><i class="fa fa-globe" aria-hidden="true"></i> <a href="http://www.atbu.edu.ng">University Website</a></li>
					<li><i class="fa fa-question-circle" aria-hidden="true"></i> <a href="#">Ask a Librarian</a></li>
					<li><i class="fa fa-info-circle" aria-hidden="true"></i> <a href="#">FAQs </a></li>
				</ul>
			</div>
			<form class="form-inline pull-right" style="margin-top: -4px;"role="form" action="<?=site_url('collections/quick_search')?>" name="q_search" method="post">
<div class="form-group">
				<input type="search" name="topsearch" class="form-control" placeholder="Quick Search" />
			
</div>
			</form>
			<div class="clearfix"> </div>
		</div>
	</div>
	<!-- //header-top -->
	<!-- header -->
	<div class="header">
			<div class="container">
				<nav class="navbar navbar-default">
					<!-- Brand and toggle get grouped for better mobile display -->
					<div class="navbar-header">
					  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					  </button>
						<div class="w3layouts-logo">
							<h1><a href="#">ATBU <span>Library</span></a></h1>
						</div>
					</div>

					<!-- Collect the nav links, forms, and other content for toggling -->
					<div class="collapse navbar-collapse nav-wil" id="bs-example-navbar-collapse-1">
						<nav>
							<ul class="nav navbar-nav">
								<li class="active"><a href="<?=site_url('home')?>">Home</a></li>
								<li><a href="#" class="hvr-sweep-to-bottom">About</a></li>
								
								<li><a href="#" class="dropdown-toggle hvr-sweep-to-bottom" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Library Units<span class="caret"></span></a>
									<ul class="dropdown-menu">
										<li><a class="hvr-sweep-to-bottom" href="#">Collection Development</a></li>
										<li><a class="hvr-sweep-to-bottom" href="#">Acquisition and Ordering</a></li>
										<li><a class="hvr-sweep-to-bottom" href="#">Reference Section</a></li>
										<li><a class="hvr-sweep-to-bottom" href="#">Bindery</a></li>
										<!--<li><a class="hvr-sweep-to-bottom" href="icons.html">Icons</a></li>
										<li><a class="hvr-sweep-to-bottom" href="typography.html">Typography</a></li>  -->        
									</ul>
								</li>
								<li><a href="#" class="hvr-sweep-to-bottom">Collections</a></li>
								<li><a href="#" class="hvr-sweep-to-bottom">Faculty Libraries</a></li>
                                                                <li><a class="hvr-sweep-to-bottom" href="<?=site_url('home/login')?>">Login</a></li>
							</ul>
						</nav>
					</div>
					<!-- /.navbar-collapse -->
				</nav>
			</div>
	</div>
	<!-- //header -->