<?php
/* Faqja (home.php) e cila paraqitet pasi perdoruesi te llogohet me sukses */
	include("kontrollo.php");	
?>
<?php
// including the database connection file
include_once("konfiguro.php");

if(isset($_POST['modifikoPunetore']))
{	
	$id_p = $_POST['id_p'];
	
	$Nr_Identifikues=$_POST['Nr_Identifikues'];
	$Fjalekalimi=$_POST['Fjalekalimi'];
	$Emri=$_POST['Emri'];	
	$Mbiemri=$_POST['Mbiemri'];
	$emaili=$_POST['emaili'];
	$Nr_Telefonit=$_POST['Nr_Telefonit'];
	// checking empty fields
	if(empty($Nr_Identifikues) || empty($Fjalekalimi) || empty($Emri) || empty($Mbiemri) || empty($emaili) || empty($Nr_Telefonit)) {	
			
		if(empty($Nr_Identifikues)) {
			echo "<font color='red'>Nr_Identifikues field is empty.</font><br/>";
		}
		
		if(empty($Fjalekalimi)) {
			echo "<font color='red'>Fjalekalimi field is empty.</font><br/>";
		}
		
		if(empty($Emri)) {
			echo "<font color='red'>Emri field is empty.</font><br/>";
		}

		if(empty($Mbiemri)) {
			echo "<font color='red'>Mbiemri field is empty.</font><br/>";
		}

		if(empty($emaili)) {
			echo "<font color='red'>Emaili field is empty.</font><br/>";
		}
		
		if(empty($Nr_Telefonit)) {
			echo "<font color='red'>Nr_Telefonit field is empty.</font><br/>";
		}		
	} else {	
		//updating the table
		//$result = mysqli_query($conn,"UPDATE puntoret SET Nr_Identifikues='$Nr_Identifikues',Fjalekalimi='$Fjalekalimi',Emri='$Emri',Mbiemri='$Mbiemri',emaili='$emaili',Nr_Telefonit='$Nr_Telefonit' WHERE id_p=$id_p");
		
		//redirectig to the display ppassword. In our case, it is admin.php
		//header("Location: modifiko_punetore.php");
		mysqli_query($conn, "SET @p_id_p=${id_p}");
		mysqli_query($conn, "SET @p_Nr_Identifikues='${Nr_Identifikues}'");
		mysqli_query($conn, "SET @p_Fjalekalimi='${Fjalekalimi}'");
		mysqli_query($conn, "SET @p_Emri='${Emri}'");
		mysqli_query($conn, "SET @p_Mbiemri='${Mbiemri}'");
		mysqli_query($conn, "SET @p_emaili='${emaili}'");
		mysqli_query($conn, "SET @p_Nr_Telefonit='${Nr_Telefonit}'");
		$result=mysqli_query($conn,"CALL modifikoPuntoret(@p_id_p,@p_Nr_Identifikues,@p_Fjalekalimi,@p_Emri,@p_Mbiemri,@p_emaili,@p_Nr_Telefonit)");
		//redirectig to the display ppassword. In our case, it is admin.php
		if($result)
		{
		//redirectig to the display pProgrami. In our case, it is admin.php
		header("Location:modifiko_punetore.php");
		}
		else{
		die("Coudn't execute update procedure!");
		}
		
		}
		}
		?>
		<?php
//getting uid from url
$id_p = $_GET['id_p'];
//selecting data associated with this particular uid
$result = mysqli_query($conn_puntoret,"CALL ZgjedhID_puntoret('$id_p')");
while($res = mysqli_fetch_array($result))
{
	$Nr_Identifikues_1 = $res['Nr_Identifikues'];
	$Fjalekalimi_1 = $res['Fjalekalimi'];
	$Emri_1 = $res['Emri'];
	$Mbiemri_1 = $res['Mbiemri'];
	$emaili_1 = $res['emaili'];
	$Nr_Telefonit_1 = $res['Nr_Telefonit'];
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
					<div class="container" >
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
						<h2>Modifiko te dhenat e puntorit</h2>
						</header>
						<form method="post" action="modifikoPunetore.php">
							<div class="row">
							<div class="col-6 col-12-medium">
							<p style="margin: 0%"><b style="color:#F38E73">Nr.Identifikues</b></p>
							<input type="text" name="Nr_Identifikues" id="demo-name" value="<?php echo $Nr_Identifikues_1;?>" />
							</div>
							<div class="col-6 col-12-medium">
							<p style="margin: 0%" ><b style="color:#F38E73">Fjalekalimi</b></p>
							<input type="password" name="Fjalekalimi" id="demo-name" value="<?php echo $Fjalekalimi_1;?>"/>
							</div>
							<div class="col-6 col-12-medium">
							<p style="margin: 0%"><b style="color:#F38E73">Emri</b></p>
							<input type="text" name="Emri" id="demo-name" value="<?php echo $Emri_1;?>"/>
							</div>
							<div class="col-6 col-12-medium">
							<p style="margin: 0%"><b style="color:#F38E73">Mbiemri</b></p>
							<input type="text" name="Mbiemri" id="demo-name" value="<?php echo $Mbiemri_1;?>" />
							</div>
							<div class="col-6 col-12-medium">
							<p style="margin: 0%"><b style="color:#F38E73">Email</b></p>
							<input type="email" name="emaili" id="demo-email" value="<?php echo $emaili_1;?>" />
							</div>
							<div class="col-6 col-12-medium">
							<p style="margin: 0%"><b style="color:#F38E73">Nr.Telefonit</b></p>
							<input type="text" name="Nr_Telefonit" id="demo-name" value="<?php echo $Nr_Telefonit_1;?>" />
							</div>
							<div class="col-12">
							<input type="hidden" name="id_p" value='<?php echo $_GET['id_p'];?>' />
							<td><input type="submit" name="modifikoPunetore" value="Modifiko"></td>
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