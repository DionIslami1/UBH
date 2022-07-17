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
				<section id="features">
					<div class="container">
						<header>
						<h2>Shto te dhenat</h2>
						</header>
									<form method="post" action="shtoTedhena.php">
										<div class="row">
											<div class="col-6 col-12-medium">
											<p style="margin: 0%"><b style="color:#F38E73">Titulli</b></p>
												<input type="text" name="Titulli" id="demo-name" value="" placeholder="" />
											</div>
											<div class="col-6 col-12-medium">
											<p style="margin: 0%"><b style="color:#F38E73">Pershkrimi</b></p>
												<input type="text" name="Pershkrimi" id="demo-name" value="" placeholder="" />
											</div>
											<div class="col-6 col-12-medium">
											<p style="margin: 0%"><b style="color:#F38E73">Emri i file-s</b></p>
												<input type="text" name="File" id="demo-name" value="" placeholder="" />
											</div>
											<div class="col-6 col-12-medium">
											<p style="margin: 0%"><b style="color:#F38E73">Pamja e faqes</b></p>
												<input type="text" name="PageLayout" id="demo-email" value="" placeholder="" />
											</div>
											<div class="col-12">
											<td><input type="submit" name="shtoTedhena" value="Shto"></td>
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
		
		