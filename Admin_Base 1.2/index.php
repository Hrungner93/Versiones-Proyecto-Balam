<!DOCTYPE HTML>
<!--
	Autonomy by TEMPLATED
    templated.co @templatedco
    Released for free under the Creative Commons Attribution 3.0 license (templated.co/license)
-->

<?php 
require './process/mysqlconnector.php';
?>
<html>
	<head>
		<title>Generador de datos automatico</title>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<meta name="description" content="" />
		<meta name="keywords" content="" />
		<link href='http://fonts.googleapis.com/css?family=Raleway:400,100,200,300,500,600,700,800,900' rel='stylesheet' type='text/css'>
		<!--[if lte IE 8]><script src="js/html5shiv.js"></script><![endif]-->
		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
		<script src="js/skel.min.js"></script>
		<script src="js/skel-panels.min.js"></script>
		<script src="js/init.js"></script>
                <script src="js/process.js"></script>
		<noscript>
			<link rel="stylesheet" href="css/skel-noscript.css" />
			<link rel="stylesheet" href="css/style.css" />
			<link rel="stylesheet" href="css/style-desktop.css" />
		</noscript>
		<!--[if lte IE 8]><link rel="stylesheet" href="css/ie/v8.css" /><![endif]-->
		<!--[if lte IE 9]><link rel="stylesheet" href="css/ie/v9.css" /><![endif]-->
	</head>
	<body class="homepage">

		<!-- Header -->
		<div id="header">
			<div class="container">

				<!-- Logo -->
				<div id="logo">
					<h1><a href="#">Generador automatico de Datos</a></h1>
				</div>

				<!-- Nav -->
				<nav id="nav">
					<ul>
						<li class="active"><a href="index.php">Inicio</a></li>
					</ul>
				</nav>

			</div>
		</div>


		<div id="featured">
			<div class="container">
				<div class="row">

                                    <form method="POST" action="process/.php">
		<div id="insertar">
			<input type="text" name="dia_0">
		</div>
                                        Agregar <input type="number" id="cantidad"/> columnas<br>
		<input type="button" value="Add another text input" onClick="addInput('insertar');"><br><br>
		<input type="submit" value="Enviar datos"> 
	</form>		
			
			</div>
		</div>
		
					
		<!-- Copyright -->
		<div id="copyright">
			<div class="container">
				Design: <a href="http://templated.co">TEMPLATED</a> Images: <a href="http://unsplash.com">Unsplash</a> (<a href="http://unsplash.com/cc0">CC0</a>)
			</div>
		</div>

	</body>
</html>