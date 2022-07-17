<?php
/* Faqja (home.php) e cila paraqitet pasi perdoruesi te llogohet me sukses */
	include("kontrollo.php");	
?>
<?php
//including the database connection file
include_once("konfiguro.php");
//fetching data in descending order (lastest entry first)
//$result = mysqli_query($conn,
//"SELECT * FROM tedhenat ORDER BY ID_Data DESC");
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
			<!-- Features -->
				<section id="features">
					<div class="container">
						<header>                      
						</header>
			<!-- Banner -->	
			<div class="table-wraper">
                                    <form action="" method="post">
									<table>
	<tr>
	<h2>Kërko të dhënat për fshirje</h2>
	</tr>
	<tr>
	<td> <b  style="color:#F38E73">
	Shkruaj:
	</td>
	<td>
	<input type="text" name="term" placeholder="Titullin"/>
</td>
<td> <input type="submit" value="Kërko" /></td>
</tr>
</table> 
</div>
</div>
</form> 
	<div class="table-wrapper">
<table width='20%' border=0>
	<div class="table-wrapper">
	<tr bgcolor='#FAB6A4'>
		<td><b>Titulli</b></td>
		<td><b>Pershkrimi</b></td>
		<td><b>Emri i file-s</b></td>
		<td><b>Pamja e faqes</b></td>
		<td><b>Fshije</b></td>	
	</tr> 
	<?php
if (!empty($_REQUEST['term'])) {
$term = mysqli_real_escape_string
($conn,$_REQUEST['term']);     
$sql= mysqli_query ($conn, "CALL zgjedhTermTedhena('$term')");
while($row = mysqli_fetch_array($sql)) { 		
		echo "<tr>";
		echo "<td>".$row['Titulli']."</td>";
		echo "<td>".$row['Pershkrimi']."</td>";
		echo "<td>".$row['File']."</td>";	
		echo "<td>".$row['PageLayout']."</td>";
	
		echo "<td><a href=\"fshijeTedhena.php?ID_Data=$row[ID_Data]\" onClick=\"return confirm('A jeni te sigurt se deshironi te fshini te dhenen?')\" class='button' class='button primary'>
		Fshije</a></td></tr>";				
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
		
		