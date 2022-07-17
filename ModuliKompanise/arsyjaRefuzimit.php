<?php
/* Faqja (home.php) e cila paraqitet pasi perdoruesi te llogohet me sukses */
	include("kontrollo.php");	
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
		<meta charset="utf-8"/>
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
			<!-- Features -->
			<!-- Banner -->	
				<section style="padding-top: 0%" id="features">
					<div class="container">
						<header>
						<h2>Arsyja Refuzimit te Bicikletes Per Huazim</h2>
						</header>
                        <form enctype="multipart/form-data" method="post" action="shtoArsyjeRef.php" name="form1">																				
											<div class="col-6 col-12-medium" style="padding: 5%">
											<p style="margin: 0%"><strong>Shkruaj Arsyjen e Refuzimit te Bicikletes</strong></p>
												<textarea name="Arsyja_Refuzimit"  style="text-align: justify;" required /> "><?php echo $Arsyja_Refuzimit;?></textarea> </br>
												<td><input style="padding" type="submit" name="shtoArsyjeRef" value="Dergo Arsyjen" class="primary" ></td>
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
		
		