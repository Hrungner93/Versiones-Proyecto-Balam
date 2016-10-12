<!DOCTYPE HTML>
<!--
	Autonomy by TEMPLATED
    templated.co @templatedco
    Released for free under the Creative Commons Attribution 3.0 license (templated.co/license)
-->
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

			</div>
		</div>


		<div id="featured">
			<div class="container">
				<div class="row">

                                    <form method="POST" action="process/process.php">
                                        <table id="tabla1">
                                            <tr>
                                                <td align="left" >Orden
                                                </td>
                                                <th>Nombre Tabla</th> 
                                                <th>Tipo de Dato</th>
                                                <th>A.I</th>
                                                    
                                            </tr>    
                                            <tr id="row1"> 
                                                <td align="left">1</td>
                                                <td align="right"><input type="text" name="nombre_tabla"/>
                                                    
                                                </td>
                                                <td align="right">
                                                   <select  name="tipo_dato">
                                                        <option value="F">Nombres de mujer</option>
                                                        <option value="M">Nombres de hombre</option>
                                                        <option value="correo">emails</option>
                                                        <option value="numeros">Numeros Telefonicos</option>
                                                        <option value="contraseñas">Contraseñas</option>
                                                   </select>
                                                        </td> 
                                                        
                                                <td align="right"><input type="checkbox" name="auto_increment"></td>
                                            </tr>
                                           
                                          
                                            </table>
                                                                                                                                                        
                                        Agregar <input type="number" id="numero_de_campos"> campo(s) <input type="button" value="+" onclick="myCreateFunction();">    
                                        <br>
                                                                        
                                        Crear <input type="number" id="cantidad_valores" name="cantidad_valores"> valor(es)
                                        <br>
                                        <br>
                                        <input type="submit" id="enviar" value="Generar Datos">
                                    </form>         
                                    <div>
                                    </div>
			
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