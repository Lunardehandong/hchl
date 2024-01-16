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


 <style type="text/css">
   .boton_4{
    text-decoration: none;
    padding: 3px;
    padding-left: 10px;
    padding-right: 10px;
    font-family: helvetica;
    font-weight: 250;
    color: white;
    font-size: 15px;
    font-style: italic;
    background-color: #F5B041;
    border-radius: 20px;
    border: 3px double #85929E;
  }
  .boton_4:hover{
    opacity: 1.0;
    text-decoration: none;
  }
</style>

<!-- header -->
<header id="default_header" class="header_style_1">
  <?php
    include ('./barra_navegacion/header_adc.php');
  ?>
</header>
<!-- end header -->

<body> 
<form action="./correos/correo.php" method="POST">
<div class="container-wrap">

<div class="row">
				<div class="col-md-3 col-md-push-1 animate-box">
					<h3>Nuestra dirección</h3>
					<ul class="contact-info">
						<li><i class="icon-location4"></i>Primo Feliciano Velázquez 3264, Jardines de Los Arcos, Guadalajara, Jalisco</li>
						<li><i class="icon-phone3"></i>+52 33 31 21 44 85</li>
						<li><i class="bi bi-whatsapp"></i>+52 33 10 08 28 80</li>
						<li><i class="icon-location3"></i><a href="#">ventas@hchlware.mx</a></li>
					</ul>
				</div>

				<div class="col-md-7 col-md-push-1 animate-box">
						<div class="col-md-6">
						
							<div class="form-group">
								<input type="text"name="Nombre" class="form-control" placeholder="Nombre completo" required>
							</div>
						</div>

				<div class="col-md-6">
						<div class="form-group">
								<input type="text"  name="Telefono" required="required" class="form-control" placeholder="Telefono" required>
							</div>
						</div>
						
				<div class="col-md-6">
						<div class="form-group">
								<input type="text"  name="Correo" required="required" class="form-control" placeholder="Correo" required>
							</div>
						</div>

						<div class="col-md-6">
						<div class="form-group">
								<input type="text"  name="Asunto" required="required" class="form-control" placeholder="Asunto" required>
							</div>
						</div>

				<div class="col-md-6">
						<div class="form-group">
						Fecha de nacimiento:
								<input type="date"  name="Fecha" required="required" class="form-control" placeholder="fecha de nacimiento" required>
							</div>
						</div>
				<div class="col-md-6">
				<div class="form-group">
                    	¿Cuenta con experiencia directa en venta?
                            	<select id="inputState"  name="Opcion" required="required" class="form-control" required>
						<option>Si</option>
						<option>No</option>
					</select>
						</div>
						</div>
	
						<div class="form-group">
							<button class="boton_4" type="submit" id="submit" name="submit" class="btn btn-success">Enviar </button>
							</div>

							<div class="form-group">
							<a type="button" class="boton_4 btn btn-secondary" href="index.php">Volver</a>

						</div>
				</div>
			</div>



		</div>							
</div>
</form>

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
