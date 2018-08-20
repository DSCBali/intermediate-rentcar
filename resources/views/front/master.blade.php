
	<!DOCTYPE html>
	<html lang="zxx" class="no-js">
	<head>
		<!-- Mobile Specific Meta -->
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<!-- Favicon-->
		<link rel="shortcut icon" href="img/fav.png">
		<!-- Author Meta -->
		<meta name="author" content="codepixer">
		<!-- Meta Description -->
		<meta name="description" content="">
		<!-- Meta Keyword -->
		<meta name="keywords" content="">
		<!-- meta character set -->
		<meta charset="UTF-8">
		<!-- Site Title -->
		<title>Car Rentals</title>

		<link href="https://fonts.googleapis.com/css?family=Poppins:100,200,400,300,500,600,700" rel="stylesheet"> 
			<!--
			CSS
			============================================= -->
			<link rel="stylesheet" href="{{asset('css/linearicons.css')}}">
			<link rel="stylesheet" href="{{asset('css/font-awesome.min.css')}}">
			<link rel="stylesheet" href="{{asset('css/bootstrap.css')}}">
			<link rel="stylesheet" href="{{asset('css/magnific-popup.css')}}">
			<link rel="stylesheet" href="{{asset('css/nice-select.css')}}">					
			<link rel="stylesheet" href="{{asset('css/animate.min.css')}}">
			<link rel="stylesheet" href="{{asset('https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css')}}">			
			<link rel="stylesheet" href="{{asset('css/owl.carousel.css')}}">
			<link rel="stylesheet" href="{{asset('css/main.css')}}">
		</head>
		<body>

			  <header id="header" id="home">
			    <div class="container">
			    	<div class="row align-items-center justify-content-between d-flex">
				      <div id="logo">
				        <a href="index.html"><img src="img/logo.png" alt="" title="" /></a>
				      </div>
				      <nav id="nav-menu-container">
				        <ul class="nav-menu">
				          <li class="menu-active"><a href="index.html">Home</a></li>
				          <li><a href="about.html">About</a></li>
				          <li><a href="cars.html">Cars</a></li>
				          <li><a href="service.html">Service</a></li>
				          <li><a href="team.html">Team</a></li>	
				          <li><a href="contact.html">Contact</a></li>		          
				        </ul>
				      </nav><!-- #nav-menu-container -->		    		
			    	</div>
			    </div>
			  </header><!-- #header -->


			<!-- start banner Area -->
			<section class="banner-area relative" id="home">
				<div class="overlay overlay-bg"></div>	
				<div class="container">
					<div class="row fullscreen d-flex align-items-center justify-content-center">
						<div class="banner-content col-lg-7 col-md-6 ">
							<h6 class="text-white ">the Royal Essence of Journey</h6>
							<h1 class="text-white text-uppercase">
								Relaxed Journey Ever				
							</h1>
							<p class="pt-20 pb-20 text-white">
								Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
							</p>
							<a href="{{route('login')}}" class="primary-btn text-uppercase">Login</a>
							<a href="{{route('register')}}" class="primary-btn text-uppercase">Register Now</a>
						</div>
						<div class="col-lg-5  col-md-6 header-right">
							<h4 class="text-white pb-30">Book Your Car Today!</h4>
							<form class="form" role="form" autocomplete="off" action="{{route('booking.store')}}" action="POST">
							    <div class="form-group">
							       	<div class="default-select" id="default-select">
							       		<select name="car_id" class="form-control">
		                                    @foreach($cars as $car)
		                                    	<option value="" disabled selected hidden>Select Your Car</option>
		                                        <option value="{{$car->id}}"> {{$car->name}} </option>
		                                    @endforeach
		                                   </select>
                                    </select>
									</div>
							    </div>
							    <div class="form-group row">
							        <div class="col-md-6 wrap-left">
								       	<div class="default-select" id="default-select">
											   <label class="form-control">Pickup</label>
										</div>
							        </div>
							        <div class="col-md-6 wrap-right">
										<div class="input-group dates-wrap">                                          
											<input name="rental_date" id="datepicker" class="dates form-control" id="exampleAmount" placeholder="Date & time" type="text">                        
											<div class="input-group-prepend">
												<span  class="input-group-text"><span class="lnr lnr-calendar-full"></span></span>
											</div>											
										</div>
							        </div>
							    </div>
							    <div class="form-group row">
							        <div class="col-md-6 wrap-left">
								       	<div class="default-select" id="default-select">
											<label class="form-control">Drop Off</label>
											{{-- <select>
												<option value="" disabled selected hidden>Drop off</option>
												<option value="1">Drop off One</option>
											</select> --}}
										</div>
							        </div>
							        <div class="col-md-6 wrap-right">
										<div class="input-group dates-wrap">                                              
											<input name="return_date" id="datepicker2" class="dates form-control" id="exampleAmount" placeholder="Date & time" type="text">                        
											<div class="input-group-prepend">
												<span  class="input-group-text"><span class="lnr lnr-calendar-full"></span></span>
											</div>											
										</div>
							        </div>
							    </div>							    
							    <div class="form-group row">
							        <div class="col-md-12">
							            <button type="reset" class="btn btn-default btn-lg btn-block text-center text-uppercase">Confirm Car Booking</button>
							        </div>
							    </div>
							</form>
						</div>											
					</div>
				</div>					
			</section>
			<!-- End banner Area -->	

			<!-- Start feature Area -->
			<section class="feature-area section-gap" id="service">
				<div class="container">
					<div class="row d-flex justify-content-center">
						<div class="col-md-8 pb-40 header-text">
							<h1>What Services we offer to our clients</h1>
							<p>
								Who are in extremely love with eco friendly system.
							</p>
						</div>
					</div>
					<div class="row">
						<div class="col-lg-4 col-md-6">
							<div class="single-feature">
								<h4><span class="lnr lnr-user"></span>Expert Technicians</h4>
								<p>
									Usage of the Internet is becoming more common due to rapid advancement of technology and power.
								</p>
							</div>
						</div>
						<div class="col-lg-4 col-md-6">
							<div class="single-feature">
								<h4><span class="lnr lnr-license"></span>Professional Service</h4>
								<p>
									Usage of the Internet is becoming more common due to rapid advancement of technology and power.
								</p>								
							</div>
						</div>
						<div class="col-lg-4 col-md-6">
							<div class="single-feature">
								<h4><span class="lnr lnr-phone"></span>Great Support</h4>
								<p>
									Usage of the Internet is becoming more common due to rapid advancement of technology and power.
								</p>								
							</div>
						</div>
						<div class="col-lg-4 col-md-6">
							<div class="single-feature">
								<h4><span class="lnr lnr-rocket"></span>Technical Skills</h4>
								<p>
									Usage of the Internet is becoming more common due to rapid advancement of technology and power.
								</p>				
							</div>
						</div>
						<div class="col-lg-4 col-md-6">
							<div class="single-feature">
								<h4><span class="lnr lnr-diamond"></span>Highly Recomended</h4>
								<p>
									Usage of the Internet is becoming more common due to rapid advancement of technology and power.
								</p>								
							</div>
						</div>
						<div class="col-lg-4 col-md-6">
							<div class="single-feature">
								<h4><span class="lnr lnr-bubble"></span>Positive Reviews</h4>
								<p>
									Usage of the Internet is becoming more common due to rapid advancement of technology and power.
								</p>									
							</div>
						</div>						
					</div>
				</div>	
			</section>
			<!-- End feature Area -->		

			<!-- Start home-about Area -->
			<section class="home-about-area" id="about">
				<div class="container-fluid">				
					<div class="row justify-content-center align-items-center">
						<div class="col-lg-6 no-padding home-about-left">
							<img class="img-fluid" src="img/about-img.jpg" alt="">
						</div>
						<div class="col-lg-6 no-padding home-about-right">
							<h1>Globally Connected <br>
							by Large Network</h1>
							<p>
								<span>We are here to listen from you deliver exellence</span>
							</p>
							<p>
								Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
								Ut enim ad minim. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor.
							</p>
							<a class="text-uppercase primary-btn" href="#">get details</a>
						</div>
					</div>
				</div>	
			</section>
			<!-- End home-about Area -->	

			<!-- Start model Area -->
			<section class="model-area section-gap" id="cars">
				<div class="container">
					<div class="row d-flex justify-content-center pb-40">
						<div class="col-md-8 pb-40 header-text">
							<h1 class="text-center pb-10">Choose your Desired Car Model</h1>
							<p class="text-center">
								Who are in extremely love with eco friendly system.
							</p>
						</div>
					</div>				
					<div class="active-model-carusel">
						<div class="row align-items-center single-model item">
							<div class="col-lg-6 model-left">
								<div class="title justify-content-between d-flex">
									<h4 class="mt-20">Audi 3000 msi</h4>
									<h2>$149<span>/day</span></h2>
								</div>
								<p>
									Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
								</p>
								<p>
									Capacity         : 04 Person <br>
									Doors            : 04 <br>
									Air Condition    : Dual Zone <br>
									Transmission     : Automatic
								</p>
								<a class="text-uppercase primary-btn" href="#">Book This Car Now</a>
							</div>
							<div class="col-lg-6 model-right">
								<img class="img-fluid" src="img/car.jpg" alt="">
							</div>
						</div>
						<div class="row align-items-center single-model item">
							<div class="col-lg-6 model-left">
								<div class="title justify-content-between d-flex">
									<h4 class="mt-20">Audi 3000 msi</h4>
									<h2>$149<span>/day</span></h2>
								</div>
								<p>
									Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
								</p>
								<p>
									Capacity         : 04 Person <br>
									Doors            : 04 <br>
									Air Condition    : Dual Zone <br>
									Transmission     : Automatic
								</p>
								<a class="text-uppercase primary-btn" href="#">Book This Car Now</a>
							</div>
							<div class="col-lg-6 model-right">
								<img class="img-fluid" src="img/car.jpg" alt="">
							</div>
						</div>
						<div class="row align-items-center single-model item">
							<div class="col-lg-6 model-left">
								<div class="title justify-content-between d-flex">
									<h4 class="mt-20">Audi 3000 msi</h4>
									<h2>$149<span>/day</span></h2>
								</div>
								<p>
									Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
								</p>
								<p>
									Capacity         : 04 Person <br>
									Doors            : 04 <br>
									Air Condition    : Dual Zone <br>
									Transmission     : Automatic
								</p>
								<a class="text-uppercase primary-btn" href="#">Book This Car Now</a>
							</div>
							<div class="col-lg-6 model-right">
								<img class="img-fluid" src="img/car.jpg" alt="">
							</div>
						</div>												
					</div>
				</div>	
			</section>
			<!-- End model Area -->


			<!-- Start fact Area -->
			<section class="facts-area section-gap">
				<div class="container">
					<div class="row">
						<div class="col single-fact">
							<h1 class="counter">2536</h1>
							<p>Projects Completed</p>
						</div>
						<div class="col single-fact">
							<h1 class="counter">6784</h1>
							<p>Really Happy Clients</p>
						</div>
						<div class="col single-fact">
							<h1 class="counter">1059</h1>
							<p>Total Tasks Completed</p>
						</div>
						<div class="col single-fact">
							<h1 class="counter">2239</h1>
							<p>Cups of Coffee Taken</p>
						</div>	
						<div class="col single-fact">
							<h1 class="counter">435</h1>
							<p>In House Professionals</p>
						</div>												
					</div>
				</div>	
			</section>
			<!-- end fact Area -->							

			<!-- start footer Area -->		
			<footer class="footer-area section-gap">
				<div class="container">
					<div class="row">
						<div class="col-lg-2 col-md-6 col-sm-6">
							<div class="single-footer-widget">
								<h6>Quick links</h6>
								<ul>
									<li><a href="#">Jobs</a></li>
									<li><a href="#">Brand Assets</a></li>
									<li><a href="#">Investor Relations</a></li>
									<li><a href="#">Terms of Service</a></li>
								</ul>								
							</div>
						</div>
						<div class="col-lg-2 col-md-6 col-sm-6">
							<div class="single-footer-widget">
								<h6>Features</h6>
								<ul>
									<li><a href="#">Jobs</a></li>
									<li><a href="#">Brand Assets</a></li>
									<li><a href="#">Investor Relations</a></li>
									<li><a href="#">Terms of Service</a></li>
								</ul>								
							</div>
						</div>
						<div class="col-lg-2 col-md-6 col-sm-6">
							<div class="single-footer-widget">
								<h6>Resources</h6>
								<ul>
									<li><a href="#">Jobs</a></li>
									<li><a href="#">Brand Assets</a></li>
									<li><a href="#">Investor Relations</a></li>
									<li><a href="#">Terms of Service</a></li>
								</ul>								
							</div>
						</div>												
						<div class="col-lg-2 col-md-6 col-sm-6 social-widget">
							<div class="single-footer-widget">
								<h6>Follow Us</h6>
								<p>Let us be social</p>
								<div class="footer-social d-flex align-items-center">
									<a href="#"><i class="fa fa-facebook"></i></a>
									<a href="#"><i class="fa fa-twitter"></i></a>
									<a href="#"><i class="fa fa-dribbble"></i></a>
									<a href="#"><i class="fa fa-behance"></i></a>
								</div>
							</div>
						</div>							
						<div class="col-lg-4  col-md-6 col-sm-6">
							<div class="single-footer-widget">
								<h6>Newsletter</h6>
								<p>Stay update with our latest</p>
								<div class="" id="mc_embed_signup">
									<form target="_blank" novalidate="true" action="https://spondonit.us12.list-manage.com/subscribe/post?u=1462626880ade1ac87bd9c93a&amp;id=92a4423d01" method="get" class="form-inline">
										<input class="form-control" name="EMAIL" placeholder="Enter Email" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Email '" required="" type="email">
			                            	<button class="click-btn btn btn-default"><span class="lnr lnr-arrow-right"></span></button>
			                            	<div style="position: absolute; left: -5000px;">
												<input name="b_36c4fd991d266f23781ded980_aefe40901a" tabindex="-1" value="" type="text">
											</div>

										<div class="info"></div>
									</form>
								</div>
							</div>
						</div>	
						<p class="mt-50 mx-auto footer-text col-lg-12">
							<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
						</p>											
					</div>
				</div>
			</footer>	
			<!-- End footer Area -->		

			<script src="{{asset('js/vendor/jquery-2.2.4.min.js')}}"></script>
			<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
			<script src="{{asset('js/vendor/bootstrap.min.js')}}"></script>			
			<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBhOdIF3Y9382fqJYt5I_sswSrEw5eihAA"></script>
			<script src="{{asset('https://code.jquery.com/ui/1.12.1/jquery-ui.js')}}"></script>			
  			<script src="{{asset('js/easing.min.js')}}"></script>			
			<script src="{{asset('js/hoverIntent.js')}}"></script>
			<script src="{{asset('js/superfish.min.js')}}"></script>	
			<script src="{{asset('js/jquery.ajaxchimp.min.js')}}"></script>
			<script src="{{asset('js/jquery.magnific-popup.min.js')}}"></script>	
			<script src="{{asset('js/owl.carousel.min.js')}}"></script>			
			<script src="{{asset('js/jquery.sticky.js')}}"></script>
			<script src="{{asset('js/jquery.nice-select.min.js')}}"></script>	
			<script src="{{asset('js/waypoints.min.js')}}"></script>
			<script src="{{asset('js/jquery.counterup.min.js')}}"></script>					
			<script src="{{asset('js/parallax.min.js')}}"></script>		
			<script src="{{asset('js/mail-script.js')}}"></script>	
			<script src="{{asset('js/main.js')}}"></script>	
		</body>
	</html>



