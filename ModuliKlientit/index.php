
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
		
							

			<!-- Features -->
				<section id="features">
					<div class="container">
	
						<div class="row aln-center">
										<?php 
										mysqli_next_result($conn);
										$result = mysqli_query($conn,"CALL selektLeftOuterMoshaPrd");	
										while($row=mysqli_fetch_array($result)){
											extract($row);
											if($result==null)
												mysqli_free_result($result);
											?>
							<div class="col-4 col-6-medium col-12-small">																	
								<!-- Feature -->
								<section>
								<?php 
								#echo '<img src="data:image/jpeg;base64,'.base64_encode( $row['image'] ).'" width="100%" height="100%">';
								 ?>
								<?php 
								echo '<img alt="Bicikleta" width="75%" height="75%" src="data:images/jpeg;base64,'.base64_encode($row['image']).'"/>';
								?>
                                       
										<header>
										<h2 style="color:red;"><?php echo $Lloji_Bicikletes; ?></h2>
										</header>
										<p> <?php echo $Pershkrimi; ?></p>
										<p> Mosha: <?php echo $mosha; ?></p>
										<p style="color: green;"> Cmimi: <?php echo $Cmimi; ?> euro</p>
                                        <div class="col-12">
										<a href="huazo_biciklete.php?id_bicikleta=<?php echo $id_bicikleta; ?>" class="button icon solid fa-file">Huazo</a>
												
												<br><br>
											</div>
									</section>									
							</div>
							<?php } ?>							
								<!-- Feature -->							
						</div>

					</div>
					<hr>

				<div class="content">
					
						<div class="row">


	<div class="table-wrapper"style="overflow-x:auto; width: 100%;   " >

<table width='100%' border=0 >
<tr>
<h3> Kerkesat e bicikletave te aprovuara/refuzuara </h3>
</tr>
	<tr bgcolor='#FAB6A4'>
		<td><b>Lloji bicikletes</td>
		<td><b>Ditet</td>
		<td><b>Data e Huazimit</td>
		<td><b>Data e Kthimi</td>	
		<td><b>Cmimi Total </td>
		<td><b>Nr_Identifikues</td>
		<td><b>Emri</td>
		<td><b>Mbiemri</td>
		<td><b>Email</td>
		<td ><b>Kerkesa</td>

	</tr> 

<?php

     
    $sql = mysqli_query($conn_left, "CALL selektAprovimetPrd()");

    // $result_set=mysqli_query($conn, $sql)
	
	while($row = mysqli_fetch_array($sql, MYSQLI_ASSOC))
	{ 		
					
			echo "<tr>";
			echo "<td>".$row['Lloji_Bicikletes']."</td>";
			echo "<td>".$row['ditet']."</td>";
			echo "<td>".$row['Data_Huazimit']."</td>";
			echo "<td>".$row['Data_Kthimit']."</td>";
			echo "<td>".$row['cmimiTotal']."€</td>";	
			echo "<td>".$row['Nr_Identifikues']."</td>";
			echo "<td>".$row['Emri']."</td>";
			echo "<td>".$row['Mbiemri']."</td>";
			echo "<td>".$row['Email']."</td>";
			echo "<td>".$row['Kerkesa']."</td>";

				
			
			
	}
?>

	



	</table>
						</div>
				</div>
</section>
			<!-- Banner -->							
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
	