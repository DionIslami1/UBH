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
							<h2 style="color: white;">Menaxhimi i <strong>kontakteve</strong></h2>
						</header>
					<div class="container">             			
					<div class="col-12">
				<p style="text-align:center; font-size:15px; color:white;">
				<a href="shto_kontakt.php" class="button icon solid fa-file" style="margin-right: 10%" >Shto Kontakt</a> 
				<a href="modifiko_kontakt.php" class="button icon solid fa-file" style="margin-right: 10%">Modifiko Kontakt</a>
				<a href="fshije_kontakt.php" class="button icon solid fa-file">Fshije Kontakt</a>
							</ul>
                            <br><br>
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
		