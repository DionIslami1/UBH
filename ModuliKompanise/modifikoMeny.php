<?php
/* Faqja (home.php) e cila paraqitet pasi perdoruesi te llogohet me sukses */
	include("kontrollo.php");	
?>
<?php
// including the database connection file
include_once("konfiguro.php");
if(isset($_POST['modifikoMeny']))
{	
	$ID_Meny = $_POST['ID_Meny'];
	
	$Emri=$_POST['Emri'];
	$Linku=$_POST['Linku'];
	$Modul=$_POST['Modul'];	
	if(empty($Emri) || empty($Linku) || empty($Modul)) {	
			
		if(empty($Emri)) {
			echo "<font color='red'>umuk_m_menu_name field is empty.</font><br/>";
		}
		
		if(empty($Linku)) {
			echo "<font color='red'>Linku field is empty.</font><br/>";
		}
		
		if(empty($Modul)) {
			echo "<font color='red'>Modul field is empty.</font><br/>";
		}		
	} else {	
		
		mysqli_query($conn, "SET @p_ID_Meny=${ID_Meny}");
mysqli_query($conn, "SET @p_Emri='${Emri}'");
mysqli_query($conn, "SET @p_Linku='${Linku}'");
mysqli_query($conn, "SET @p_Modul='${Modul}'");
$result=mysqli_query($conn,"CALL modifikoMenyte(@p_ID_Meny,@p_Emri,@p_Linku,@p_Modul)");
//redirectig to the display ppassword. In our case, it is admin.php
if($result)
{
//redirectig to the display pProgrami. In our case, it is admin.php
header("Location:modifiko_meny.php");
}
else{
die("Coudn't execute update procedure!");
}
}
}
?>
<?php
$ID_Meny = $_GET['ID_Meny'];
$result = mysqli_query($conn,"CALL ZgjedhID_meny('$ID_Meny')");

while($res = mysqli_fetch_array($result))
{
	$Emri_1 = $res['Emri'];
	$Linku_1 = $res['Linku'];
	$Modul_1 = $res['Modul'];
}
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
						<h2>Modifiko menyte </h2>
						</header>
						<form method="post" action="modifikoMeny.php">
							<div class="row">
							<div class="col-6 col-12-medium">
							<p style="margin: 0%"><b style="color:#F38E73">Emri</b></p>
							<input type="text" name="Emri" id="demo-name" value="<?php echo $Emri_1;?>" />
							</div>
							<div class="col-6 col-12-medium">
							<p style="margin: 0%" ><b style="color:#F38E73">Linku</b></p>
							<input type="text" name="Linku" id="demo-name" value="<?php echo $Linku_1;?>"/>
							</div>
							<div class="col-6 col-12-medium">
							<p style="margin: 0%"><b style="color:#F38E73">Modul</b></p>
							<input type="text" name="Modul" id="demo-name" value="<?php echo $Modul_1;?>"/>
							</div>
							<div class="col-12">
							<input type="hidden" name="ID_Meny" value='<?php echo $_GET['ID_Meny'];?>' />
							<td><input type="submit" name="modifikoMeny" value="Modifiko"></td>
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