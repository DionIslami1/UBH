<?php
include_once("config.php");?>
<!DOCTYPE HTML>
<!--
	Strongly Typed by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<title>Bicikleta per Huazim</title>
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

		<?php include_once("header.php"); ?>
		
		<?php include_once("menyte.php")?>	
		
			</section>

			<!-- Header -->
			<!-- Banner -->
				<section style="padding-top: 0%;" id="features">
						<header>
						<h2 style="padding-right:8%; margin: auto;">Kontakti</h2>
						<h4 style="padding-right:8%">Per Cfar Do Problemi gjate Huazimit, na Kontaktoni</h4>
						<br>
						
						</header>
						<div class="table-wrapper" >
									<form method="post" style="padding-left:30%"  action="shtoKontakt.php">
										<div class="table-wrapper">
										<div class="row gtr-uniform">
											<div class="col-6 col-52-xsmall">
												<input type="text" name="Emri" id="Emri" value="" placeholder="Emri" />											
											<br>
												<textarea name="Mesazhi" id="Mesazhi" placeholder="Mesazhi" rows="6"></textarea>											
											<br>											
												<input type="text" name="Email" id="Email" value="" placeholder="Email-i"/>
											</div>
											<div class="col-12">
												<ul class="actions" style="padding-right:50%">
													<li><input type="submit"   name="shtoKontakt" value="Dergo mesazh" class="primary" /></li>												
												</ul>
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
		
		