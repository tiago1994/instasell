<?
	require_once('includes/conexao.php');

	$url_loja 		= (($_REQUEST['loja'])?$_REQUEST['loja']:'');
	$url_produto 	= (($_REQUEST['produto'])?$_REQUEST['produto']:'');

	if($url_loja == '' or $url_produto == ''){
		header('Location: index.php');
		exit();
	}

	$sql_loja = mysqli_query($link, 'SELECT * FROM loja WHERE url = "'.$url_loja.'" LIMIT 1');
	$loja = mysqli_fetch_array($sql_loja);

	$sql_produto = mysqli_query($link, 'SELECT * FROM loja_produto WHERE id_loja = "'.$loja['id'].'" AND ativo = 1 AND quantidade > 0 AND url = "'.$url_produto.'" LIMIT 1');
	$produto = mysqli_fetch_array($sql_produto);
?>
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
					<ul class="nav navbar-nav navbar-right text-right">
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
						<h1><?=$produto['nome']?></h1>
						<span class="st-border"></span>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-6">
					<img src="https://a-static.mlcdn.com.br/1500x1500/aspirador-de-po-mondial-1200w-ap-12-next-1500/magazineluiza/021463000/1eb1044bb350d5e6ab07b10e1d8789ba.jpg" style="width: 100%">
				</div>
				<div class="col-md-6">
					<div class="row">
						<div class="col-md-12">
							<h2 style="margin: 0px; margin-bottom: 20px;">Descrição</h2>
							<p><?=$produto['descricao']?></p>
						</div>
					</div>
					<div class="row" style="margin-top: 20px;">
						<div class="col-md-6">
							<a href="loja.php?loja=<?=$loja['url']?>" class="btn btn-block btn-warning">Voltar</a>
						</div>
						<div class="col-md-6">
							<a href="carrinho?" class="btn btn-block btn-success">Comprar</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- /SERVICES -->

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