<?php
/* Faqja (home.php) e cila paraqitet pasi perdoruesi te llogohet me sukses */
	include("kontrollo.php");	
?>
<?php
// including the database connection file
include_once("konfiguro.php");

if(isset($_POST['modifikoTedhena']))
{	
	$ID_Data = $_POST['ID_Data'];
	
	$Titullii=$_POST['Titulli'];
	$Pershkrimii=$_POST['Pershkrimi'];
	$Filee=$_POST['File'];	
	$PageLayoutt=$_POST['PageLayout'];	
	// checking empty fields
	if(empty($Titullii) || empty($Pershkrimii) || empty($Filee) || empty($PageLayoutt)){	
			
		if(empty($Titullii)) {
			echo "<font color='red'>Titullii field is empty.</font><br/>";
		}
		
		if(empty($Pershkrimii)) {
			echo "<font color='red'>Pershkrimii field is empty.</font><br/>";
		}
		
		if(empty($Filee)) {
			echo "<font color='red'>File field is empty.</font><br/>";
		}	
	if(empty($PageLayoutt)) {
			echo "<font color='red'>PageLayout field is empty.</font><br/>";
		}		
	} else {	
		//updating the table
		mysqli_query($conn_tdh, "SET @p_ID_Data=${ID_Data}");
		mysqli_query($conn_tdh, "SET @p_Titulli='${Titullii}'");
		mysqli_query($conn_tdh, "SET @p_Pershkrimi='${Pershkrimii}'");
		mysqli_query($conn_tdh, "SET @p_File='${Filee}'");
		mysqli_query($conn_tdh, "SET @p_PageLayout='${PageLayoutt}'");
		$result=mysqli_query($conn_tdh,"CALL modifiko_tedhenat(@p_ID_Data,@p_Titulli,@p_Pershkrimi,@p_File,@p_PageLayout)");
		//redirectig to the display ppassword. In our case, it is admin.php
		if($result)
		{
		//redirectig to the display pProgrami. In our case, it is admin.php
		header("Location:modifiko_tedhena.php");
		}
		else{
		die("Coudn't execute update procedure!");
		}
		
		}
		}
		?>
<?php
//getting ID_Dep from url
$ID_Data = $_GET['ID_Data'];
//selecting data associated with this particular ID_Dep
$result = mysqli_query($conn_tmodifiko, "CALL ZgjedhID_tedhenat('$ID_Data')");
while($res = mysqli_fetch_array($result))
{
	$Titullii = $res['Titulli'];
	$Pershkrimii = $res['Pershkrimi'];
	$Filee = $res['File'];
		$PageLayoutt = $res['PageLayout'];
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
			<!-- Features -->
			<!-- Banner -->
				<section style="padding-top: 0%;" id="features">
					<div class="container">
						<header>
						<h2>Modifiko te dhenat </h2>
						</header>
						<form method="post" action="modifikoTedhena.php">
							<div class="row">
							<div class="col-6 col-12-medium">
							<p style="margin: 0%"><b style="color:#F38E73">Titulli</b></p>
							<input type="text" name="Titulli" id="demo-name" value="<?php echo $Titullii;?>" />
							</div>
							<div class="col-6 col-12-medium">
							<p style="margin: 0%" ><b style="color:#F38E73">Pershkrimi</b></p>
							<input type="text" name="Pershkrimi" id="demo-name" value="<?php echo $Pershkrimii;?>"/>
							</div>
							<div class="col-6 col-12-medium">
							<p style="margin: 0%"><b style="color:#F38E73">File-i</b></p>
							<input type="text" name="File" id="demo-name" value="<?php echo $Filee;?>"/>
							</div>
							<div class="col-6 col-12-medium">
							<p style="margin: 0%"><b style="color:#F38E73">Pamja Faqes</b></p>
							<input type="text" name="PageLayout" id="demo-name" value="<?php echo $PageLayoutt;?>" />
							</div>							
							<div class="col-12">
							<input type="hidden" name="ID_Data" value='<?php echo $_GET['ID_Data'];?>' />
							<td><input type="submit" name="modifikoTedhena" value="Modifiko"></td>
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