<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">

	<title>InstaSell - O modo mais fácil para realizar a sua venda.</title>
	
	<!-- Main CSS file -->
	<link rel="stylesheet" href="css/bootstrap.min.css" />
	<link rel="stylesheet" href="css/owl.carousel.css" />
	<link rel="stylesheet" href="css/magnific-popup.css" />
	<link rel="stylesheet" href="css/font-awesome.css" />
	<link rel="stylesheet" href="css/style.css" />
	<link rel="stylesheet" href="css/responsive.css" />

	
	<!-- Favicon -->
	<link rel="shortcut icon" href="images/icon/favicon.png">
	<link rel="apple-touch-icon-precomposed" sizes="144x144" href="images/icon/apple-touch-icon-144-precomposed.png">
	<link rel="apple-touch-icon-precomposed" sizes="114x114" href="images/icon/apple-touch-icon-114-precomposed.png">
	<link rel="apple-touch-icon-precomposed" sizes="72x72" href="images/icon/apple-touch-icon-72-precomposed.png">
	<link rel="apple-touch-icon-precomposed" href="images/icon/apple-touch-icon-57-precomposed.png">
	
	<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
	  <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
	  <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
	<![endif]-->
	
</head>
<body>

	<!-- PRELOADER -->
	<div id="st-preloader">
		<div id="pre-status">
			<div class="preload-placeholder"></div>
		</div>
	</div>
	<!-- /PRELOADER -->

	
	<!-- HEADER -->
	<header id="header">
		<nav class="navbar st-navbar navbar-fixed-top">
			<div class="container">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#st-navbar-collapse">
						<span class="sr-only">Toggle navigation</span>
				    	<span class="icon-bar"></span>
				    	<span class="icon-bar"></span>
				    	<span class="icon-bar"></span>
					</button>
					<a class="logo" href="index.php"><img src="images/logo.png" alt=""></a>
				</div>

				<div class="collapse navbar-collapse" id="st-navbar-collapse">
					<ul class="nav navbar-nav navbar-right">
				    	<li><a href="#header">Home</a></li>
				    	<li><a href="#services">Quem Somos</a></li>
				    	<li><a href="#our-team">Nosso Clientes</a></li>
				    	<li><a href="#testimonial">O que Dizem?</a></li>
				    	<li><a href="#pricing">Planos</a></li>
				    	<li><a href="#contact">Contato</a></li>
				    	<li><a href="" data-toggle="modal" data-target="#modallogin"><i class="fa fa-sign-in"></i> Login</a></li>
					</ul>
				</div><!-- /.navbar-collapse -->
			</div><!-- /.container -->
		</nav>
	</header>
	<!-- /HEADER -->

	<!-- Modal -->
	<div id="modallogin" class="modal fade" role="dialog">
	 	<div class="modal-dialog modal-sm">
	    	<div class="modal-content">
	      		<div class="modal-header">
	        		<button type="button" class="close" data-dismiss="modal">&times;</button>
	        		<h4 class="modal-title">Login</h4>
	      		</div>
	      		<div class="modal-body">
	        		<a href="cliente/" class="btn btn-primary btn-block"><b><i class="fa fa-sign-in"></i> Login Cliente</b></a>
	        		<a href="loja/" class="btn btn-default btn-block"><b><i class="fa fa-sign-in"></i> Login Lojista</b></a>
	        		<a href="admin/" class="btn btn-success btn-block"><b><i class="fa fa-sign-in"></i> Login Admin</b></a>
	      		</div>
	    	</div>
	  	</div>
	</div>

	<!-- SLIDER -->
	<section id="slider">
		<div id="home-carousel" class="carousel slide" data-ride="carousel">			
			<div class="carousel-inner">
				<div class="item active" style="background-image: url(images/slider/01.jpg)">
					<div class="carousel-caption container">
						<div class="row">
							<div class="col-sm-7">
								<h1>You are entire </h1>
								<h2>creative world</h2>
								<p>This is Photoshop's version  of Lorem Ipsum. Proin gravida nibh vel velit auctor. Aenean sollicitudin, lorem quis bibendum auctor.</p>
							</div>
						</div>
					</div>					
				</div>
				<div class="item" style="background-image: url(images/slider/02.jpg)">
					<div class="carousel-caption container">
						<div class="row">
							<div class="col-sm-7">
								<h1>You are entire </h1>
								<h2>creative world</h2>
								<p>This is Photoshop's version  of Lorem Ipsum. Proin gravida nibh vel velit auctor. Aenean sollicitudin, lorem quis bibendum auctor.</p>
							</div>
						</div>
					</div>					
				</div>
				<div class="item" style="background-image: url(images/slider/03.jpg)">
					<div class="carousel-caption container">
						<div class="row">
							<div class="col-sm-7">
								<h1>You are entire </h1>
								<h2>creative world</h2>
								<p>This is Photoshop's version  of Lorem Ipsum. Proin gravida nibh vel velit auctor. Aenean sollicitudin, lorem quis bibendum auctor.</p>
							</div>
						</div>
					</div>					
				</div>
				<div class="item" style="background-image: url(images/slider/04.jpg)">
					<div class="carousel-caption container">
						<div class="row">
							<div class="col-sm-7">
								<h1>You are entire </h1>
								<h2>creative world</h2>
								<p>This is Photoshop's version  of Lorem Ipsum. Proin gravida nibh vel velit auctor. Aenean sollicitudin, lorem quis bibendum auctor.</p>
							</div>
						</div>
					</div>					
				</div>
				<a class="home-carousel-left" href="#home-carousel" data-slide="prev"><i class="fa fa-angle-left"></i></a>
				<a class="home-carousel-right" href="#home-carousel" data-slide="next"><i class="fa fa-angle-right"></i></a>
			</div>		
		</div> <!--/#home-carousel--> 
    </section>
	<!-- /SLIDER -->

	
	<!-- SERVICES -->
	<section id="services">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="section-title">
						<h1>Quem Somos?</h1>
						<span class="st-border"></span>
					</div>
				</div>

				<div class="col-md-4 col-sm-6 st-service">
					<h2><i class="fa fa-desktop"></i> Web Design</h2>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dicta libero autem, magni veritatis, optio dolor.</p>
				</div>

				<div class="col-md-4 col-sm-6 st-service">
					<h2><i class="fa fa-cogs"></i> Web Developement</h2>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dicta libero autem, magni veritatis, optio dolor.</p>
				</div>

				<div class="col-md-4 col-sm-6 st-service">
					<h2><i class="fa fa-code"></i> Custom Development</h2>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dicta libero autem, magni veritatis, optio dolor.</p>
				</div>

				<div class="col-md-4 col-sm-6 st-service">
					<h2><i class="fa fa-dashboard"></i> Super Fast Web</h2>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dicta libero autem, magni veritatis, optio dolor.</p>
				</div>

				<div class="col-md-4 col-sm-6 st-service">
					<h2><i class="fa fa-life-ring"></i> Friendly Support</h2>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dicta libero autem, magni veritatis, optio dolor.</p>
				</div>

				<div class="col-md-4 col-sm-6 st-service">
					<h2><i class="fa fa-weixin"></i> Live Support</h2>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dicta libero autem, magni veritatis, optio dolor.</p>
				</div>
			</div>
		</div>
	</section>
	<!-- /SERVICES -->
	
	<!-- OUR TEAM -->
	<section id="our-team">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="section-title">
						<h1>Nossos Clientes</h1>
						<span class="st-border"></span>
					</div>
				</div>

				<div class="col-md-3 col-sm-6">
					<div class="team-member">
						<div class="member-image">
							<img class="img-responsive" src="images/members/team1.jpg" alt="">
							<div class="member-social">
								<a href=""><i class="fa fa-facebook"></i></a>
								<a href=""><i class="fa fa-twitter"></i></a>
								<a href=""><i class="fa fa-google-plus"></i></a>
								<a href=""><i class="fa fa-linkedin"></i></a>
							</div>
						</div>
						<div class="member-info">
							<h4>Khalil Uddin</h4>
							<span>Designer</span>
						</div>
					</div>
				</div>

				<div class="col-md-3 col-sm-6">
					<div class="team-member">
						<div class="member-image">
							<img class="img-responsive" src="images/members/team2.jpg" alt="">
							<div class="member-social">
								<a href=""><i class="fa fa-facebook"></i></a>
								<a href=""><i class="fa fa-twitter"></i></a>
								<a href=""><i class="fa fa-google-plus"></i></a>
								<a href=""><i class="fa fa-linkedin"></i></a>
							</div>
						</div>
						<div class="member-info">
							<h4>Rubel Miah</h4>
							<span>Lead Developer</span>
						</div>
					</div>
				</div>

				<div class="col-md-3 col-sm-6">
					<div class="team-member">
						<div class="member-image">
							<img class="img-responsive" src="images/members/team1.jpg" alt="">
							<div class="member-social">
								<a href=""><i class="fa fa-facebook"></i></a>
								<a href=""><i class="fa fa-twitter"></i></a>
								<a href=""><i class="fa fa-google-plus"></i></a>
								<a href=""><i class="fa fa-linkedin"></i></a>
							</div>
						</div>
						<div class="member-info">
							<h4>Shamim Shohag</h4>
							<span>Developer</span>
						</div>
					</div>
				</div>

				<div class="col-md-3 col-sm-6">
					<div class="team-member">
						<div class="member-image">
							<img class="img-responsive" src="images/members/team2.jpg" alt="">
							<div class="member-social">
								<a href=""><i class="fa fa-facebook"></i></a>
								<a href=""><i class="fa fa-twitter"></i></a>
								<a href=""><i class="fa fa-google-plus"></i></a>
								<a href=""><i class="fa fa-linkedin"></i></a>
							</div>
						</div>
						<div class="member-info">
							<h4>Zubayer Rahman</h4>
							<span>Marketer</span>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- /OUR TEAM -->

	<!-- TESTIMONIAL -->
	<section id="testimonial">
		<div class="container">
			<div class="row">
				<div class="overlay"></div>
				<div class="col-md-8 col-md-offset-2 col-sm-12">
					<div class="st-testimonials">

						<div class="item active text-center">
							<p>"Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet dolore nesciunt natus ullam possimus quas obcaecati suscipit voluptate facilis cum"</p>
							<div class="st-border"></div>
							<div class="client-info">
								<h5>Tom Roof</h5>
								<span>CEO of Domain.com</span>
							</div>
						</div>

						<div class="item text-center">
							<p>"Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet dolore nesciunt natus ullam possimus quas obcaecati suscipit voluptate facilis cumconsectetur adipisicing elit. Amet dolore"</p>
							<div class="st-border"></div>
							<div class="client-info">
								<h5>Mustafiz</h5>
								<span>CEO of Domain.com</span>
							</div>
						</div>

						<div class="item text-center">
							<p>"Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quidem autem possimus laborum, ducimus vel rerum asperiores delectus, suscipit voluptate mollitia, ullam perspiciatis voluptates!"</p>
							<div class="st-border"></div>
							<div class="client-info">
								<h5>Sean Hynes</h5>
								<span>CEO of Domain.com</span>
							</div>
						</div>

					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- /TESTIMONIAL -->

	
	<!-- PRICING -->
	<section id="pricing">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="section-title">
						<h1>Pricing</h1>
						<span class="st-border"></span>
					</div>
				</div>

				<div class="col-sm-4">
					<div class="st-pricing text-center">
						<h5>Basic</h5>
						<h3>$39</h3>
						<div class="st-border"></div>
						<ul>
							<li>Free Download</li>
							<li>1000+ Softwear</li>
							<li>Full Access</li>
							<li>Free Update</li>
							<li>Live Support</li>
						</ul>
						<a href="" class="btn btn-send">Sign Up</a>
					</div>
				</div>

				<div class="col-sm-4">
					<div class="st-pricing text-center">
						<h5>Silver</h5>
						<h3>$89</h3>
						<div class="st-border"></div>
						<ul>
							<li>Free Download</li>
							<li>1000+ Softwear</li>
							<li>Full Access</li>
							<li>Free Update</li>
							<li>Live Support</li>
						</ul>
						<a href="" class="btn btn-send">Sign Up</a>
					</div>
				</div>

				<div class="col-sm-4">
					<div class="st-pricing text-center">
						<h5>Gold</h5>
						<h3>$209</h3>
						<div class="st-border"></div>
						<ul>
							<li>Free Download</li>
							<li>1000+ Softwear</li>
							<li>Full Access</li>
							<li>Free Update</li>
							<li>Live Support</li>
						</ul>
						<a href="" class="btn btn-send">Sign Up</a>
					</div>
				</div>
				
			</div>
		</div>
	</section>
	<!-- /PRICING -->

	<!-- CONTACT -->
	<section id="contact">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="section-title">
						<h1>Contato</h1>
						<span class="st-border"></span>
					</div>
				</div>
				<div class="col-sm-4 contact-info">
					<p class="contact-content">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quae voluptatum dolorum, possimus tenetur pariatur officia, quo commodi autem doloribus vero rerum aspernatur quidem temporibus.</p>
					<p class="st-address"><i class="fa fa-map-marker"></i> <strong>E71 8th Ave, New York NY 21001, US</strong></p>
					<p class="st-phone"><i class="fa fa-mobile"></i> <strong>+00 123-456-789</strong></p>
					<p class="st-email"><i class="fa fa-envelope-o"></i> <strong>email@yourdomain.com</strong></p>
					<p class="st-website"><i class="fa fa-globe"></i> <strong>www.yourdomain.com</strong></p>
				
				</div>
				<div class="col-sm-7 col-sm-offset-1">
					<form action="php/send-contact.php" class="contact-form" name="contact-form" method="post">
						<div class="row">
							<div class="col-sm-6">
								<input type="text" name="name" required="required" placeholder="Name*">
							</div>
							<div class="col-sm-6">
								<input type="email" name="email" required="required" placeholder="Email*">
							</div>
							<div class="col-sm-6">
								<input type="text" name="subject" placeholder="Subject">
							</div>
							<div class="col-sm-6">
								<input type="text" name="website" placeholder="Website">
							</div>
							<div class="col-sm-12">
								<textarea name="message" required="required" cols="30" rows="7" placeholder="Message*"></textarea>
							</div>
							<div class="col-sm-12">
								<input type="submit" name="submit" value="Enviar Mensagem" class="btn btn-send">
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</section>
	<!-- /CONTACT -->

	<!-- FOOTER -->
	<footer id="footer" style="padding-top: 25px; padding-bottom: 15px;">
		<div class="container">
			<div class="row">
				<!-- SOCIAL ICONS -->
				<div class="col-sm-6 col-sm-push-6 text-right">
					<span style="font-weight: normal;">Follow us:</span>
					<a href=""><i class="fa fa-facebook"></i></a>
					<a href=""><i class="fa fa-twitter"></i></a>
					<a href=""><i class="fa fa-google-plus"></i></a>
					<a href=""><i class="fa fa-pinterest-p"></i></a>
				</div>
				<!-- /SOCIAL ICONS -->
				<div class="col-sm-6 col-sm-pull-6 copyright">
					<p style="font-weight: normal">&copy; 2018 <a href="">InstaSell</a>. Todos os direitos reservados.</p>
				</div>
			</div>
		</div>
	</footer>
	<!-- /FOOTER -->


	<!-- Scroll-up -->
	<div class="scroll-up">
		<ul><li><a href="#header"><i class="fa fa-angle-up"></i></a></li></ul>
	</div>

	
	<!-- JS -->
	<script type="text/javascript" src="js/jquery.min.js"></script><!-- jQuery -->
	<script type="text/javascript" src="js/bootstrap.min.js"></script><!-- Bootstrap -->
	<script type="text/javascript" src="js/jquery.parallax.js"></script><!-- Parallax -->
	<script type="text/javascript" src="js/smoothscroll.js"></script><!-- Smooth Scroll -->
	<script type="text/javascript" src="js/masonry.pkgd.min.js"></script><!-- masonry -->
	<script type="text/javascript" src="js/jquery.fitvids.js"></script><!-- fitvids -->
	<script type="text/javascript" src="js/owl.carousel.min.js"></script><!-- Owl-Carousel -->
	<script type="text/javascript" src="js/jquery.counterup.min.js"></script><!-- CounterUp -->
	<script type="text/javascript" src="js/waypoints.min.js"></script><!-- CounterUp -->
	<script type="text/javascript" src="js/jquery.isotope.min.js"></script><!-- isotope -->
	<script type="text/javascript" src="js/jquery.magnific-popup.min.js"></script><!-- magnific-popup -->
	<script type="text/javascript" src="js/scripts.js"></script><!-- Scripts -->


</body>
</html>