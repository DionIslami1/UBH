<?php
include('config.php');
?>
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
		<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.9/angular.min.js"></script>
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
			<!-- Features -->
				<section id="features">
					<div class="container">
						<header>
							
						</header>
						<h2 > Te dhenat e bicikletes per huazim </h2>
						<?php 
						
										mysqli_next_result($conn);
										$id_bicikleta = $_GET['id_bicikleta'];
										$select = "CALL zgjedhBicikletatt('$id_bicikleta')";
										$result=mysqli_query($conn,$select); 
										while($row=mysqli_fetch_array($result)){
											extract($row);
											if($result==null)
												mysqli_free_result($result);
											?>	
											<div data-ng-app="" data-ng-init="quantity=1;Cmimi='<?php echo $Cmimi;?>'"> 
												<h2><?php echo $Lloji_Bicikletes; ?></h2>
												<?php echo '<img alt="" width="35%"  src="data:images/jpeg;base64,'.base64_encode($row['image']).'"/>';?></br>
				
									</br>
										</br>
									<form  enctype="multipart/form-data" method="post" action="addHuazim.php">
										<div class="row gtr-uniform">
										<div class="col-6 col-12-xsmall" >
											<p style="margin: 0%">  <b style="color:#F38E73">Lloji Bicikletes</b></p>
												<input type="text" value='<?php echo $Lloji_Bicikletes;?>' disabled/>
											<input type="hidden" name="id_bicikleta" value='<?php echo $id_bicikleta;?>'/>
											</div>
											<div class="col-6 col-12-xsmall" >
												<p style="margin: 0%" > <b style="color:#F38E73"> Cmimi per dite</b></p>
												<input type="text" ng-model="Cmimi" value='<?php echo $Cmimi;?>' disabled/>
												
											</div>
											<div class="col-6 col-12-xsmall">
												<p style="margin: 0%">  <b style="color:#F38E73">Zgjedh per sa dite deshironi ta huazoni bicikleten</b></p>
												<input style="text-align: center;" type="number" ng-model="quantity" name="ditet" placeholder="ditet" />
												
											</div>

											<div class="col-6 col-12-xsmall">
												<p style="margin: 0%; "> <b style="color:#F38E73"> Zgjedh daten per startimin e huazimit </b></p>
												<input style="color: black; text-align: center;" type="date" name="Data_Huazimit" id="Data_Huazimit" value="" placeholder="Data e Huazimit" />
											</div>
											

											<div class="col-6 col-12-xsmall">
											<p style="margin: 0%" > <b style="color:#F38E73"> Cmimi Total </b></p>
											<input type="text" name="" value="{{quantity * Cmimi}} " disabled/>
											<input type="hidden" name="cmimiTotal" value="{{quantity * Cmimi}}"/>
										</div>	
										<div class="col-6 col-12-xsmall">
												<p style="margin: 0%"> <b style="color:#F38E73"> Nr.Identifikues </b></p>
												<input type="text" name="Nr_Identifikues" id="" value="" placeholder="" />
											</div>
											<div class="col-6 col-12-xsmall">
												<p style="margin: 0%"> <b style="color:#F38E73"> Emri </b></p>
												<input type="text" name="Emri" id="" value="" placeholder="" />
											</div>
					 						<div class="col-6 col-12-xsmall">
												<p style="margin: 0%"> <b style="color:#F38E73"> Mbiemri </b></p>
												<input type="text" name="Mbiemri" id="" value="" placeholder="" />
											</div>
											
											<div class="col-6 col-12-xsmall">
												<p style="margin: 0%"> <b style="color:#F38E73"> Email </b></p>
												<input type="email" name="Email" id="" value="" placeholder="" />
											</div>		
											<div class="col-6 col-12-xsmall">
												<p style="margin: 0%"> <b style="color:#F38E73">Nr.Telefonit</b></p>
												<input type="text" name="Nr_Telefonit" id="" value="" placeholder="" />
												<input type="hidden" name="id_bicikleta" value="<?= $_GET["id_bicikleta"] ?>" />
											</div>									
											<div class="col-12">
											<input type="submit" name="addHuazim" value="Huazo" class="primary"  />
											</div>
											</div>
										</div>
									</form>
								</div>
									<?php
														}
														?>

							</div>
							
						</div>
					</div>
				</section>

			<!-- Banner -->
				

			<!-- Main -->
				

									<!-- Post -->
										
							<!-- Sidebar -->
								

									<!-- Excerpts -->
										
													<!-- Excerpt -->
														

													<!-- Excerpt -->
														

									<!-- Highlights -->
										
													<!-- Highlight -->
														
													<!-- Highlight -->
								

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
		