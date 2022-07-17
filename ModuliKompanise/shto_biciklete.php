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
			<!-- Banner -->	
				<section style="padding-top: 0%" id="features">
					<div class="container">
						<header>
						<h2>Shto te dhenat e bicikletes</h2>
						</header>
                        <form enctype="multipart/form-data" method="post" action="shtoBiciklete.php" name="form1">
										<div class="row">
										<div class="col-6 col-12-medium">
											<p style="margin: 0%"><b style="color:#F38E73">Lloji i bicikletes</b></p>
											<input type="text" name="Lloji_Bicikletes" id="" value="" placeholder="" />
										</div>
										<div class="col-6 col-12-medium">
											<p style="margin: 0%"><b style="color:#F38E73">Bicikleta: </b> </p>
												<select name="id_m">
													<option selected="selected"></option>
														<?php
														$res=mysqli_query($conn,"CALL ZgjedhMoshen()");
														while($row=$res->fetch_array())
														{
															?>
															<option value="<?php echo $row['id_m']; ?>"><?php echo $row['mosha']; ?></option>
															<?php
														}
														?>
												</select>
											</div>
											<div class="col-6 col-12-medium">
											<p style="margin: 0%"><b style="color:#F38E73">Pershkrimi</b></p>
												<input type="text" name="Pershkrimi" id="" value="" placeholder="" />
											</div>
											<div class="col-6 col-12-medium">
											<p style="margin: 0%"><b style="color:#F38E73">Cmimi</b></p>
												<input type="text" name="Cmimi" id="" value="" placeholder="" />
											</div>
											<br>
											<div class="col-6 col-12-medium">
											<tr>
											<td><input type="hidden" name="MAX_FILE_SIZE" value="10000000" /></td>
													<td><input name="userfile" type="file" /></td>
											</tr>	
                                              </div>
                                                <div class="col-12">
												<td><input type="submit" name="shtoBiciklete" value="Shto" class="primary" ></td>
												<!--<a href="#" class="button icon solid fa-file">Shto</a> --->
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
		
		