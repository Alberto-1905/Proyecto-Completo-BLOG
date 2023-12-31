<?php require "../../php/session.php"; ?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="stylesheet" href="../css/estilosP.css"> 		<link rel="stylesheet" href="/pelicula/css/stylo.css">
		<link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Open+Sans:wght@400;600&display=swap" rel="stylesheet"> 
		<title>StartMovie</title>

		<style type="text/css"> 
			#banner{
				background-image: url('https://www.themoviedb.org/t/p/original/9T1R20nsYCojyR5yJDHTYeifShP.jpg'); 
			}		
		</style>

	</head>

	<body>
		<!-- Header -->
		<main>			
			<div class="content-all">
				<header></header>
				<label>
					<p><a style="text-decoration: none; color:white" href="/pelicula/pagina.php">Películas</a></p>
				</label>

				<div class="btn">
					<p><a style="text-decoration: none; color:white" href="/php/logout.php">cerrar sesión</a></p>
				</div>
			</div>
		</main>

		<!-- Banner -->
		<div class="banner" id="banner">
			<div class="banner-contenedor">
				<center><h1 class="banner-titulo">Objetivo: la casa blanca</h1>

				<div class="botones">
					Duracion: 2h. <button class="hd"> HD</button>
				</div>

				<div class="banner-sinopsis">
					Mike Banning es un agente del Servicio Secreto estadounidense que, tras un accidente de coche en el que únicamente puede salvar la vida del presidente, decide dejar su trabajo.
				</div></center>
			</div>

			<div class="banner-fadeBottom"></div>
		</div>

		 <!--Video--> 
		<div class="video-contenedor">
			<div class="video">
				
				<center><iframe class="item-video" allowfullscreen="" frameborder="0" height="695px" id="iframe2" onload="$('.iframe-loading').css('background-image');" sandbox="allow-same-origin allow-scripts"
				scrolling="no" src="https://uqload.com/embed-c3g87nbv0vwg.html" style="background-color: black; border-color: #fff; border-radius: 10px; border-style: solid; border-width: 2px;" width="100%"></iframe></center>	
			</div>

			<div class="descarga">
					<a href="https://1fichier.com/?kgu33ry3tb8dump1cwha#Synchronization+Service"><button type="submit" class="btn-descarga"><i class="fas fa-cloud-download-alt"></i>Descargar</button></a>
			</div>
		</div>

		<script src="https://kit.fontawesome.com/2c36e9b7b1.js" crossorigin="anonymous"></script>
	</body>
</html>