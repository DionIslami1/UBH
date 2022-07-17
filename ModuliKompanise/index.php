<?php
include ('kyqu.php');
if((isset($_SESSION['Nr_Identifikues']) != ''))
{
	header ('Location: ballina_administratorit.php');
}

?>
<?php include_once('konfiguro.php') ?>


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
						<?php include_once('headerindex.php');?>
					</div>
				</section>

			<!-- Features -->
				<section id="features" style="padding: 1%;">
					<div style="float: left; width: 40%; padding:3% 0 0 1%;">
						<header>
							<blockquote style="text-align:left;"><strong>UDHEZIM:</strong> Per tu kycur ne webaplikacion ju lutem kontaktoni administratorin  per hapjen e llogarise. 	</blockquote>
						</header>
					</div>
					<div id="features" style="float:left; width:50%; padding: 0 0 0 10%;">
						<h3>Kycu ne web aplikacion</h3>
						<form method="post" action="#">
							<div class="row">
								<ul>								
									<input type="text" name="Nr_Identifikues"  value="" placeholder="Nr Identifikues" >
								</ul>
								<ul>										
									<input type="password" name="Fjalekalimi"  value="" placeholder="Fjalekalimi" >
								</ul>
								<ul style="padding-top:0%;">
									<input type="submit" name="submit" value="Kycu" class="primary" >
								</ul>
							</div>	
						</form>
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
		