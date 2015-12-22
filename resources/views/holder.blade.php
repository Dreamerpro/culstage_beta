<html ng-app="cultstage">
<head>
	<title>CultStage</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="css/reset.css">
	<link rel="stylesheet" type="text/css" href="css/holder.css">
	<link rel="stylesheet" type="text/css" href="css/header.css">
	<link rel="stylesheet" type="text/css" href="css/navbar.css">
	<link rel="stylesheet" type="text/css" href="css/content.css">
	<link rel="stylesheet" type="text/css" href="css/media-control.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap-theme.min.css">
	<link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
	<!-- <link href='https://fonts.googleapis.com/css?family=Source+Sans+Pro' rel='stylesheet' type='text/css'> -->
	
	<script type="text/javascript" src="js/jquery.min.js"></script>
	<script type="text/javascript" src="js/angular.min.js"></script>
	<script type="text/javascript" src="js/angular.route.min.js"></script>
	<script type="text/javascript" src="js/underscore.js"></script>
	<script type="text/javascript" src="js/bootstrap.min.js"></script>

	<script type="text/javascript" src="js/app.js"></script>
	<script type="text/javascript" src="js/controller.js"></script>
	<script type="text/javascript" src="js/directive.js"></script>
	<script type="text/javascript" src="js/filters.js"></script>
</head>
<body>
	<sign-modal></sign-modal>
	<div ng-class="{'header-bar':true,'clearfix':true,'th':islanding}">
		<a href="#/"  class="pull-left"><i class="fa fa-modx"></i> CultStage</a>
		<div ng-hide="islanding" class="search-bar-top col-md-4"><div class="form-group"><i class="fa fa-search"></i> <input class="form-control" type="text" placeholder="What are you searching?"></input> </div></div>
		<div class="pull-right">
		<a href="#/post" class="post-header-btn">Post a Job | Event</a>
		<ul class="header-menu-bar pull-right">
			<li> <a href="" data-toggle="modal" data-target="#sign-modal" ng-click="sign=0" >Sign Up</a></li><li><a href="" data-toggle="modal" data-target="#sign-modal" ng-click="sign=1" >Log In</a></li>
		</ul>
		</div>
	</div>

	<div ng-view >

	</div>

	<footer>

			<div class="footer-contents">
				<div class="container">
					<div class="col-md-4">
						<a class="logo">CultStage</a>
						<span>Lines here</span>
					</div>
					<div class="col-md-8">
						<ul class="f-menu" class="col-md-6">
							<li><a href="">Terms of Use</a></li>
							<li><a href="">DCMA notice</a></li>
							<li><a href="">Privacy Policy</a></li>
							<li><a href="">Contact Us</a></li>
						</ul>
						<ul class="f-menu" class="col-md-6">
							<li><a href="">CultStage Team</a></li>
							<li><a href="">Mission Statement</a></li>
							<li><a href="">Advertise on CultStage</a></li>
							<li><a href="">Teach on CultStage</a></li>
						</ul>
						
					</div>
				</div>
			</div>
			<div class="footer-social">
				<div class="container">
					<span>©2010-2015 CultStage.</span>
				 	<div class="pull-right socials">
				 	<div><a href="" class="fa fa-twitter"></a> </div>
				 	<div><a href="" class="fa fa-youtube"></a> </div>
				 	<div><a href="" class="fa fa-facebook"></a> </div>
				 	<div><a href="" class="fa fa-pinterest"></a> </div>
				 	<div><a href="" class="fa fa-instagram"></a> </div>
				 </div>
				</div>
				 
			</div>
		
	</footer>

</body>
</html>