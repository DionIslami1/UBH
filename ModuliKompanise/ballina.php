<?php
include ("kontrollo.php");
?>
 <!DOCTYPE HTML>
<!--
	Strongly Typed by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<title>Moduli Kompanise</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/css/main.css" />
		<link rel="stylesheet" href="https://fontawesome.com/icons/bicycle?style=solid">
	</head>
	<style>
	td{
		color:black
		}
		p{
			color:black
		}
	</style>
	<body class="homepage is-preload">
		<div id="page-wrapper">
			<!-- Header -->
				<section id="header">
					<div class="container">
						<?php include_once('headeradm.php');?>
						<?php include_once('menyte.php');?>
					</div>
				</section>
			<!-- Features -->				
			<!-- Banner -->
				<section  id="banner">
					<header style="color: white;">
							<h2 style="color: white;">Menaxhimi i <strong>Punetoreve</strong></h2>
						</header>
					<div class="container">             			
					<div class="col-12">
				<p style="text-align:center; font-size:15px; color:white;">
				<a href="shto_punetore.php" class="button icon solid fa-file" style="margin-right: 10%" >Shto Punetore</a> 
				<a href="modifiko_punetore.php" class="button icon solid fa-file" style="margin-right: 10%">Modifiko Punetore</a>
				<a href="Fshije_punetore.php" class="button icon solid fa-file">Fshije Punetore</a>
							</ul>
					</div>
					<br><br>
                </section>
				<section id="features">
					<header>
							<h2>Menaxhimi i <strong>Bicikletave</strong></h2>
						</header>
					<div class="container">
						<div class="col-12" >
				<p style="text-align:center; font-size:15px; color:white;">
				<a href="shto_biciklete.php" class="button icon solid fa-file" style="margin-right: 10%" >Shto Biciklete</a>
				<a href="modifiko_bicikletat.php" class="button icon solid fa-file" style="margin-right: 10%">Modifiko Biciklete</a>
				<a href="fshije_biciklete.php" class="button icon solid fa-file">Fshije Biciklete</a>
						</div>
						<br>
						</section>


						<section  id="banner">
					<header style="color: white;">
							<h2 style="color: white;">Menaxhimi i <strong>Nomenklaturave</strong></h2>
						</header>
					<div class="container">
					<div class="col-12">
				<p style="text-align:center; font-size:15px; color:white;">
				<a href="shto_grupmoshe.php" class="button icon solid fa-file" style="margin-right: 10%" >Shto Grupmoshe</a> 
				<a href="modifiko_grupmoshe.php" class="button icon solid fa-file" style="margin-right: 10%">Modifiko Grupmoshe</a>
				<a href="fshije_grupmoshe.php" class="button icon solid fa-file">Fshije Grupmoshe</a>								
							</ul>
					</div>
					<br>
                </section>


				<section id="features">
					<header>
							<h2>Modifikimi i <strong>Te dhenave</strong></h2>
						</header>
					<div class="container">
						<div class="col-12">
				<p style="text-align:center; font-size:15px; color:white;">
				
				<a href="modifiko_tedhena.php" class="button icon solid fa-file" style="margin-right: 1%">Modifiko te dhena</a>
								
						</div>
					</div>
					<br>
				</section>

				
				<section  id="banner">
					<header style="color: white;">
							<h2 style="color: white;">Modifikimi i <strong>Menyve</strong></h2>
						</header>
					<div class="container">             				
					<div class="col-12">
				<p style="text-align:center; font-size:15px; color:white;">			
				<a href="modifiko_meny.php" class="button icon solid fa-file" style="margin-right: 1%">Modifiko Meny</a>				
							</ul>
					</div>
					<br><br>
                </section>
			<!-- Footer -->
			<?php include_once("fundi.php"); ?>
		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.dropotron.min.js"></script>
			<script src="assets/js/browser.min.js"></script>
			<script src="assets/js/breakpoints.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>
	</body>
</html>
		
		