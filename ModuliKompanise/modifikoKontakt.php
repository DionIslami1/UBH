<?php
/* Faqja (home.php) e cila paraqitet pasi perdoruesi te llogohet me sukses */
	include("kontrollo.php");	
?>
<?php
// including the database connection file
include_once("konfiguro.php");

if(isset($_POST['modifikoKontakt']))
{	
	$id_kontakti = $_POST['id_kontakti'];
	
	$Emri=$_POST['Emri'];
	$Mesazhi=$_POST['Mesazhi'];
	$Email=$_POST['Email'];	
	
	// checking empty fields
	if(empty($Emri) || empty($Mesazhi) || empty($Email)) {	
			
		if(empty($Emri)) {
			echo "<font color='red'>Subjekti field is empty.</font><br/>";
		}
		
		if(empty($Mesazhi)) {
			echo "<font color='red'>Mesazhi field is empty.</font><br/>";
		}
		
		if(empty($Email)) {
			echo "<font color='red'>Email field is empty.</font><br/>";
		}		
	} else {	
		//updating the table
		//$result = mysqli_query($conn,"UPDATE puntoret SET Nr_Identifikues='$Nr_Identifikues',Fjalekalimi='$Fjalekalimi',Emri='$Emri',Mbiemri='$Mbiemri',emaili='$emaili',Nr_Telefonit='$Nr_Telefonit' WHERE id_p=$id_p");
		
		//redirectig to the display ppassword. In our case, it is admin.php
		//header("Location: modifiko_punetore.php");
		mysqli_query($conn, "SET @p_id_kontakti=${id_kontakti}");
		mysqli_query($conn, "SET @p_Emri='${Emri}'");
		mysqli_query($conn, "SET @p_Mesazhi='${Mesazhi}'");
		mysqli_query($conn, "SET @p_Email='${Email}'");
		$result=mysqli_query($conn,"CALL modifiko_kontakt(@p_id_kontakti,@p_Emri,@p_Mesazhi,@p_Email)");
		//redirectig to the display ppassword. In our case, it is admin.php
		if($result)
		{
		//redirectig to the display pProgrami. In our case, it is admin.php
		header("Location:modifiko_kontakt.php");
		}
		else{
		die("Coudn't execute update procedure!");
		}
		
		}
		}
		?>
<?php
//getting ID_Kontakti from url
$id_kontakti = $_GET['id_kontakti'];

//selecting data associated with this particular ID_Kontakti
$result = mysqli_query($conn_puntoret,"CALL ZgjedhID_kontakti('$id_kontakti')");

while($res = mysqli_fetch_array($result))
{
	$Emri_1 = $res['Emri'];
	$Mesazhi_1 = $res['Mesazhi'];
	$Email_1 = $res['Email'];
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
						<h2>Modifiko te dhenat e kontaktit</h2>
						</header>
						<form method="post"  style="padding-left:30%"  action="modifikoKontakt.php">
										<div class="row">											
											<div class="col-6 col-12-medium">
											<p style="margin: 0%"><b style="color:#F38E73">Emri</b></p>
												<input type="text" name="Emri" id="demo-name" value="<?php echo $Emri_1;?>" />
										
											<div class="col-6 col-12-medium">
											<br>
                                            <p style="margin: 0%"><b style="color:#F38E73">Mesazhi</b></p>
												<textarea   name="Mesazhi" id="Mesazhi"  rows="6" required/> <?php echo $Mesazhi_1;?></textarea>											
											<br>
											<div class="col-6 col-12-medium">
											<p style="margin: 0%"><b style="color:#F38E73">Email</b></p>
												<input type="email" name="Email" id="demo-email" value="<?php echo $Email_1;?>" />
                                                <br>
                                                <div class="col-12">
							<input type="hidden" name="id_kontakti" value='<?php echo $_GET['id_kontakti'];?>' />
							<td><input type="submit" name="modifikoKontakt" value="Modifiko"></td>
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