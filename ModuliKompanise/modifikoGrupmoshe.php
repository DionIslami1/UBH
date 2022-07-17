<?php
/* Faqja (home.php) e cila paraqitet pasi perdoruesi te llogohet me sukses */
	include("kontrollo.php");	
?>
<?php
// including the database connection file
include_once("konfiguro.php");

if(isset($_POST['modifikoGrupmoshe']))
{	
	$id_m = $_POST['id_m'];
	$mosha=$_POST['mosha'];
	// checking empty fields
	if(empty($mosha) ) {		
		if(empty($mosha)) {
			echo "<font color='red'>Nr_Identifikues field is empty.</font><br/>";
		}		
	} else {	
		//updating the table
		//redirectig to the display ppassword. In our case, it is admin.php
		mysqli_query($conn, "SET @p_id_m=${id_m}");
		mysqli_query($conn, "SET @p_mosha='${mosha}'");
		$result=mysqli_query($conn,"CALL modifiko_grupmoshe(@p_id_m,@p_mosha)");
		//redirectig to the display ppassword. In our case, it is admin.php
		if($result)
		{
		//redirectig to the display pProgrami. In our case, it is admin.php
		header("Location:modifiko_grupmoshe.php");
		}
		else{
		die("Coudn't execute update procedure!");
		}
		
		}
		}
		?>
		<?php
//getting uid from url
$id_m = $_GET['id_m'];
//selecting data associated with this particular uid
$result = mysqli_query($conn,"CALL ZgjedhID_mosha('$id_m')");
while($res = mysqli_fetch_array($result))
{
	$mosha = $res['mosha'];
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
						<h2>Modifiko te dhenat e grupmoshave</h2>
						</header>
						<form method="post" style="padding-left:33%" action="modifikoGrupmoshe.php">
							<div class="row">
							<div class="col-6 col-12-medium">
							<p style="margin: 0%"><b style="color:#F38E73">Grupmosha</b></p>
							<input type="text" name="mosha" id="demo-name" value="<?php echo $mosha;?>" />
							</div>
							<div class="col-12"style="padding-right:45%">
							<input type="hidden" name="id_m" value='<?php echo $_GET['id_m'];?>' />
							<td><input type="submit" name="modifikoGrupmoshe" value="Modifiko"></td>
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