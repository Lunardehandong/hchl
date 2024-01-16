<!DOCTYPE HTML>
<html>
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Familia HC</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">

  	<!-- Facebook and Twitter integration -->
	<meta property="og:title" content=""/>
	<meta property="og:image" content=""/>
	<meta property="og:url" content=""/>
	<meta property="og:site_name" content=""/>
	<meta property="og:description" content=""/>
	<meta name="twitter:title" content="" />
	<meta name="twitter:image" content="" />
	<meta name="twitter:url" content="" />
	<meta name="twitter:card" content="" />

	<link href="https://fonts.googleapis.com/css?family=Oxygen:300,400" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,600,700" rel="stylesheet">

	<!-- site icons -->
<link rel="icon" href="images/logos/it-logito.png" type="image/gif" />
	
	<!-- Animate.css -->
	<link rel="stylesheet" href="css/animate.css">
	<!-- Icomoon Icon Fonts-->
	<link rel="stylesheet" href="css/icomoon.css">
	<!-- Bootstrap  -->
	<link rel="stylesheet" href="css/bootstrap.css">

	<!-- Magnific Popup -->
	<link rel="stylesheet" href="css/magnific-popup.css">

	<!-- Flexslider  -->
	<link rel="stylesheet" href="css/flexslider.css">

	<!-- Theme style  -->
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
	<!-- Modernizr JS -->
	<script src="js/modernizr-2.6.2.min.js"></script>
	<!-- FOR IE9 below -->
	<!--[if lt IE 9]>
	<script src="js/respond.min.js"></script>
	<![endif]-->

	</head>
	<body id="default_theme" class="it_service">
<!-- loader 
<div class="bg_load"> <img class="loader_animation" src="images/loaders/loader_1.png" alt="#" /> </div>
 end loader -->

<!-- header -->
<header id="default_header" class="header_style_1">
  <?php
    include ('./barra_navegacion/header_adc.php');
  ?>
</header>
<!-- end header -->

<style type="text/css">
.stroke {
		margin: 20px;
		padding: 20px;
		text-align:center;
		color: #FDFEFE;
		font-family: arial;
		font-size: 27px;
		letter-spacing: 8px;
		text-shadow: -2px -2px 1px #000, 2px 2px 1px #000, -2px 2px 1px #000, 2px -2px 1px #000;
		}
</style>

	<div class="container-wrap">
		<aside id="fh5co-hero">
			<div class="flexslider">
				<ul class="slides">
			   	<li style="background-image: url(images/productos/prueba.jpg);">
			   		<div class="overlay-gradient"></div>
			   		<div class="container-fluids">
			   			<div class="row">
				   			<div class="col-md-6 col-md-offset-3 slider-text slider-text-bg">
				   				<div class="slider-text-inner text-center">
				   					<p class="stroke">Productos</p>
				   				</div>
				   			</div>
				   		</div>
			   		</div>
			   	</li>		   	
			  	</ul>
		  	</div>
		</aside>
		
		<div id="fh5co-blog">
			<div class="row">
				<div class="col-md-4">
					<div class="fh5co-blog animate-box">
						<img src="images/productos/stockPots12qts.jpg"  class="img-responsive">
						<div class="blog-text">
							<h3><a href="images/productos/stockPots12qts.jpg">12 QT. STOCK POT</a></h3>
							<p>Pongase en contacto con familia HC para una descripción del producto.</p>
							<ul class="stuff">
							<h3><a href="serviciocliente.php">Contactenos para una mayor descripcion y ofertas</a></h3>
							</ul>
						</div> 
					</div>
				</div>
				<div class="col-md-4">
					<div class="fh5co-blog animate-box">
						<img src="images/productos/stockPots16qt.jpg"  class="img-responsive">
						<div class="blog-text">
							<h3><a href="images/productos/stockPots16qt.jpg">16 QT. STOCK POT</a></h3>
							<p>Pongase en contacto con familia HC para una descripción del producto.</p>
							<ul class="stuff">
							<h3><a href="serviciocliente.php">Contactenos para una mayor descripcion y ofertas</a></h3>
							</ul>
						</div> 
					</div>
				</div>
				<div class="col-md-4">
					<div class="fh5co-blog animate-box">
						<img src="images/productos/stockPots22qt.jpg"  class="img-responsive">
						<div class="blog-text">
							<h3><a href="images/productos/stockPots22qt.jpg" >22 QT. STOCK POT</a></h3>
							<p>Pongase en contacto con familia HC para una descripción del producto. </p>
							<ul class="stuff">
							<h3><a href="serviciocliente.php">Contactenos para una mayor descripcion y ofertas</a></h3>
							</ul>
						</div> 
					</div>
				</div>

			</div>

<?php

include ('./botones/botones_productos.php');

?>

    </div>


		</div>
		</div><!-- END container-wrap -->


		<!-- se inserta el pie de pagina -->
<?php

include ('./pie_pagina/footer.php');

?>

<!-- se acaba la insersión del pie de pagina -->

	<div class="gototop js-top">
		<a href="#" class="js-gotop"><i class="icon-arrow-up2"></i></a>
	</div>
	
	<!-- jQuery -->
	<script src="js/jquery.min.js"></script>
	<!-- jQuery Easing -->
	<script src="js/jquery.easing.1.3.js"></script>
	<!-- Bootstrap -->
	<script src="js/bootstrap.min.js"></script>
	<!-- Waypoints -->
	<script src="js/jquery.waypoints.min.js"></script>
	<!-- Flexslider -->
	<script src="js/jquery.flexslider-min.js"></script>
	<!-- Magnific Popup -->
	<script src="js/jquery.magnific-popup.min.js"></script>
	<script src="js/magnific-popup-options.js"></script>
	<!-- Counters -->
	<script src="js/jquery.countTo.js"></script>
	<!-- Main -->
	<script src="js/main.js"></script>

	</body>
</html>

