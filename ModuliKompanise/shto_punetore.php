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
						<!-- Logo -->
						<?php include_once('headeradm.php');?>
						<!-- Nav -->
						<?php include_once('menyte.php');?>
							<nav id="nav">
					</div>
				</section>
			<!-- Banner -->
				<section style="padding-top: 0%;" id="features">
					<div class="container">
						<header>
						<h2>Shto te dhenat e puntorit/menaxherit</h2>
						</header>
						<form method="post" action="shtoPunetore.php">
										<div class="row">
											<div class="col-6 col-12-medium">
											<p style="margin: 0%"><b style="color:#F38E73">Nr.Identifikues</b></p>
												<input type="text" name="Nr_Identifikues" id="demo-name" value="" placeholder="" />
											</div>
											<div class="col-6 col-12-medium">
											<p style="margin: 0%" ><b style="color:#F38E73">Fjalekalimi</b></p>
												<input type="password" name="Fjalekalimi" id="demo-name" value="" placeholder="" />
											</div>
											<div class="col-6 col-12-medium">
											<p style="margin: 0%"><b style="color:#F38E73">Emri</b></p>
												<input type="text" name="Emri" id="demo-name" value="" placeholder="" />
											</div>
											<div class="col-6 col-12-medium">
											<p style="margin: 0%"><b style="color:#F38E73">Mbiemri</b></p>
												<input type="text" name="Mbiemri" id="demo-name" value="" placeholder="" />
											</div>
											<div class="col-6 col-12-medium">
											<p style="margin: 0%"><b style="color:#F38E73">Email</b></p>
												<input type="email" name="emaili" id="demo-email" value="" placeholder="" />
											</div>
											<div class="col-6 col-12-medium">
											<p style="margin: 0%"><b style="color:#F38E73">Nr.Telefonit</b></p>
												<input type="text" name="Nr_Telefonit" id="demo-name" value="" placeholder="" />
											</div>
											<div class="col-12">
											<td><input type="submit" name="shtoPunetore" value="Shto"></td>
											</div>
										</div>
									</form>
						</div>
					</div>
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
		
		