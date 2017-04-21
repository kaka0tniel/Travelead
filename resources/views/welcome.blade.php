<!--
Author: Designmaz
Author URL: https://www.designmaz.net
License URL: https://www.designmaz.net/licence/
-->
<!DOCTYPE html>
<html>
<head>
<title>Home | Travelad.id</title>
<!-- Custom Theme files -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //Custom Theme files -->
<link href="css2/bootstrap.css" type="text/css" rel="stylesheet" media="all">
<link href="css2/style.css" type="text/css" rel="stylesheet" media="all">
<link rel="stylesheet" href="css2/flexslider.css" type="text/css" media="screen" />
<link type="text/css" rel="stylesheet" href="css2/JFFormStyle-1.css" />
<!-- js -->

</script>
<script src="js2/jquery.min.js"></script>
<script src="js2/modernizr.custom.js"></script>
<!-- //js -->
<!-- fonts -->
<link href='//fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,400italic,500,700,500italic,700italic,900,900italic' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
<!-- //fonts -->
<script type="text/javascript">
		$(document).ready(function () {
			$('#horizontalTab').easyResponsiveTabs({
				type: 'default', //Types: default, vertical, accordion
				width: 'auto', //auto or any width like 600px
				fit: true   // 100% fit in a container
			});
		});
	</script>
<!--pop-up-->
<script src="js2/menu_jquery.js"></script>
<!--//pop-up-->
<!--Google Analytics Designmaz-->
<script>(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');ga('create', 'UA-35751449-15', 'auto');ga('send', 'pageview');</script></head>
<body>
	<!--header-->
	<div class="header">
		<div class="container">
			<div class="header-grids">
				<div class="logo">
					<h1><a  href="/"><span>Travelad.id</span></a></h1>
				</div>
				<!--navbar-header-->

				<div class="clearfix"> </div>
			</div>
			<div class="nav-top">
				<div class="top-nav">
					<span class="menu"><img src="images/menu.png" alt="" /></span>
					<ul class="nav1">
						<li class="active"><a href="/">Home</a></li>
						<li><a href="{{url('/ticket_custommer')}}">Ticket Anda</a></li>
						<li><a href="{{url('/pesanan')}}">Pesanan Anda</a></li>

					</ul>
					<div class="clearfix"> </div>
					<!-- script-for-menu -->
							 <script>
							   $( "span.menu" ).click(function() {
								 $( "ul.nav1" ).slideToggle( 300, function() {
								 // Animation complete.
								  });
								 });

							</script>
						<!-- /script-for-menu -->
				</div>
				<div class="dropdown-grids">
					@if(Auth::guest())
						<div id="loginContainer"><a href="login" id=""><span>Login</span></a></div>

            @else
							<div id="loginContainer"><a href="logout" id=""><span>Logout</span></a></div>

						@endif

				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
	<!--//header-->
	<!-- banner -->
	<div class="banner">
		<!-- container -->
		<div class="container">
			<div class="col-md-4 banner-left">
				<section class="slider2">
					<div class="flexslider">
						<ul class="slides">
							<li>
								<div class="slider-info">
									<img src="images2/1.jpg" alt="">
								</div>
							</li>
							<li>
								<div class="slider-info">
									<img src="images2/2.jpg" alt="">
								</div>
							</li>
							<li>
								<div class="slider-info">
									<img src="images2/3.jpg" alt="">
								</div>
							</li>
							<li>
								<div class="slider-info">
									<img src="images2/4.jpg" alt="">
								</div>
							</li>
						</ul>
					</div>
				</section>
				<!--FlexSlider-->
			</div>
			<div class="col-md-8 banner-right">
				<div class="sap_tabs">
					<div class="booking-info">
						<h2>Cari Tiket yang Anda Inginkan di Sini</h2>
					</div>
					 <div id="horizontalTab" style="display: block; width: 100%; margin: 0px;">
						  <ul class="resp-tabs-list">
							  <li class="resp-tab-item" aria-controls="tab_item-1" role="tab"><span>One way</span></li>
							  <div class="clearfix"></div>
						  </ul>
						  <!---->
						 <div class="resp-tabs-container">
							<div class="tab-1 resp-tab-content" aria-labelledby="tab_item-0">
									<div class="facts">
										<div class="booking-form">
											<!---strat-date-piker---->
											<script>
												$(function() {
													$( "#datepicker,#datepicker1" ).datepicker();
												});
											</script>
											<!---/End-date-piker---->
											<!-- Set here the key for your domain in order to hide the watermark on the web server -->

											<div class="online_reservation">
													<div class="b_room">
														<div class="booking_room">
															<div class="reservation">
																<form action="{{url('/custommer/menu')}}">
																<ul>

																	<li  class="span1_of_1 desti">
																		 <h5>Flying from</h5>
																		 <div class="book_date">

																				<span class="glyphicon glyphicon-map-marker" aria-hidden="true"></span>
																				<input type="text" placeholder="Type Departure City" class="typeahead1 input-md form-control tt-input" required="" name="from">

																		 </div>
																	 </li>
																	 <li  class="span1_of_1 left desti">
																		 <h5>Flying to</h5>
																		 <div class="book_date">

																			<span class="glyphicon glyphicon-map-marker" aria-hidden="true"></span>
																			<input type="text" placeholder="Type Destination City" class="typeahead1 input-md form-control tt-input" required="" name="destination">

																		 </div>
																	 </li>

																	 <div class="clearfix"></div>
																</ul>
															</div>
															<div class="reservation">
																<br><br><br><br>
															</div>
															<div class="reservation">
																<ul>
																	 <li class="span1_of_3">
																			<div class="date_btn">

																				<button type="submit" id="button-filter" class="btn btn-danger pull-right" style="margin-right: 20px">
																					<i class="fa fa-search"></i> Search
																				</button>
																			</form>
																			</div>
																	 </li>
																	 <div class="clearfix"></div>
																</ul>
																<br><br><br><br>
															</div>
														</div>
														<div class="clearfix"></div>
													</div>
											</div>
											<!---->
										</div>
									</div>
							</div>
							<div class="tab-2 resp-tab-content" aria-labelledby="tab_item-1">
								<div class="facts">
										<div class="booking-form">
											<!---strat-date-piker---->
											<link rel="stylesheet" href="css/jquery-ui.css" />
											<script src="js2/jquery-ui.js"></script>
													  <script>
															  $(function() {
																$( "#datepicker,#datepicker1" ).datepicker();
															  });
													  </script>

											<!---/End-date-piker---->

											<!---->
										</div>
								</div>
							</div>
						  </div>
					  </div>
				</div>
			</div>
			<div class="clearfix"> </div>
		</div>
		<!-- //container -->
	</div>
	<!-- //banner -->

	<!-- banner-bottom -->
	<div class="banner-bottom">
		<!-- container -->
		<div class="container">
			<div class="banner-bottom-info">
				<h3>Partner Airline Domestik & International</h3>
			</div>

		</div>
		<!-- //container -->
	</div>
	<!-- //banner-bottom -->
	<!-- popular-grids -->
	<div class="popular-grids">
		<!-- container -->
		<div class="container">
			<div class="popular-info">
				<h3>Popular Places</h3>
			</div>
			<!-- slider -->
			<div class="slider">
				<div class="arrival-grids">
					 <ul id="flexiselDemo1">
						 <li>
							 <a ><img src="images2/lion.jpg" alt=""/>
							 </a>
						 </li>
						 <li>
							 <a ><img src="images2/sriwijaya.jpg" alt=""/>
							 </a>
						 </li>
						 <li>
							 <a ><img src="images2/garuda.jpg" alt=""/>
							 </a>
						 </li>
						 <li>
							 <a ><img src="images2/airasia.jpg" alt=""/>
							 </a>
						 </li>
             <li>
							 <a ><img src="images2/citilink.png" alt=""/>
							 </a>
						 </li>
             <li>
							 <a ><img src="images2/wings.jpg" alt=""/>
							 </a>
						 </li>
						</ul>
						<script type="text/javascript">
						 $(window).load(function() {
						  $("#flexiselDemo1").flexisel({
							visibleItems: 4,
							animationSpeed: 1000,
							autoPlay: true,
							autoPlaySpeed: 3000,
							pauseOnHover:true,
							enableResponsiveBreakpoints: true,
							responsiveBreakpoints: {
								portrait: {
									changePoint:480,
									visibleItems: 1
								},
								landscape: {
									changePoint:640,
									visibleItems: 2
								},
								tablet: {
									changePoint:768,
									visibleItems: 3
								}
							}
						});
						});
						</script>
						<script type="text/javascript" src="js2/jquery.flexisel.js"></script>
				</div>
			</div>
			<!-- //slider -->
		</div>
		<!-- //container -->
	</div>
	<!-- popular-grids -->
	<!-- footer -->

	<!-- //footer -->
	<div class="footer-bottom-grids">
		<!-- container -->
		<div class="container">
				<div class="footer-bottom-top-grids">

					<div class="clearfix"> </div>
					<div class="copyright">
						<p>Copyrights © 2016 Travelad.id  </p>
					</div>
				</div>
		</div>
	</div>
	<script defer src="js2/jquery.flexslider.js"></script>
	<script src="js2/easyResponsiveTabs.js" type="text/javascript"></script>
	<script src="js2/jquery-ui.js"></script>
	<script type="text/javascript" src="js2/script.js"></script>
	<script type="text/javascript">
		$(function(){
			SyntaxHighlighter.all();
			});
			$(window).load(function(){
			$('.flexslider').flexslider({
			animation: "slide",
			start: function(slider){
			$('body').removeClass('loading');
			}
			});
		});
	</script>
</body>
</html>
