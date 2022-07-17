<?php
include ("kontrollo.php");
include_once("konfiguro.php");
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
					<div class="container" style="padding-bottom: 0%;">
						<?php include_once('headeradm.php');?>
						<?php include_once('menyte.php');?>
					</div>
				</section>
			<!-- Features -->
			<!-- Banner -->
				<section id="features">
					<div class="container">
						<form action="" method="post" align="center">  
	<br>
	<h2>Raporti i kerkesave te bicikletave</h2>
		<div class="col-6 col-12-medium" style="float: left; width: 40%">
			<p style="margin: 0%"> <b style="color:#F38E73">Prej </b></p>
			<input type="text" name="Prej" />
		</div>
		<div class="col-6 col-12-medium" style="float: right; width: 40%">
			<p style="margin: 0%"> <b style="color:#F38E73">Deri </b></p>
			<input type="text" name="Deri" />
		</div>
		</div>
        <div class="col-12" style="padding-top: 7%;">
			<td><input type="submit" value="Kerko" class="primary" ></td>
			<!--<a href="#" class="button icon solid fa-file">Shto</a> --->
		</div>
<!-- <input type="submit" class="primary" value="Kerko" style="padding-bottom: 20%" />   -->	
<br>
<br>
</form> 
<table width='auto' border=0 align="center" class="table table-bordered table-auto">
	<tr bgcolor='#FAB6A4'style='text-align: center'>
		<th style='text-align: center'>Emri</th>		
		<th style='text-align: left'>Mbiemri</th>
		<th style='text-align: center'>Bicikleta</th>		
		<th style='text-align: left'>Cmimi Total</th>		
	</tr> 
<?php
if (!empty($_REQUEST['Prej'])&& !empty($_REQUEST['Deri'])) {  
                    $p_Prej = mysqli_real_escape_string($conn,$_REQUEST['Prej']);   
                    $p_Deri = mysqli_real_escape_string($conn,$_REQUEST['Deri']);   	
$sql = mysqli_query($conn_raportet,"CALL zgjedhRaporte('$p_Prej','$p_Deri')"); 
while($row = mysqli_fetch_array($sql)) { 		
		echo "<tr>";
		echo "<td style='text-align: center'>".$row['Emri']."</td>";
		echo "<td style='text-align: left'>".$row['Mbiemri']."</td>";
		echo "<td style='text-align: center'>".$row['Lloji_Bicikletes']."</td>";
		echo "<td style='text-align: left'>".$row['cmimiTotal']."€</td>";	
	}
}
?>
	</table>
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
		
		