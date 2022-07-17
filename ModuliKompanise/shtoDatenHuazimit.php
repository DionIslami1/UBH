<?php
/* Faqja (home.php) e cila paraqitet pasi perdoruesi te llogohet me sukses */
	include("kontrollo.php");	
?>
<?php
// including the database connection file
include_once("konfiguro.php");
if(isset($_POST['shtoDatenHuazimit']))
{	
	$ID_Kerkesa = $_POST['ID_Kerkesa'];
	$Data_Pageses=$_POST['Data_Pageses'];
	// checking empty fields
	if(empty($Data_Pageses)) {	

		if(empty($Data_Pageses)) {
			echo "<font color='red'>Data_Pageses field is empty.</font><br/>";
		}			
	} else {	
		//updating the table
		mysqli_query ($conn_hd,"SET @id = ${ID_Kerkesa}");
		mysqli_query ($conn_hd,"SET @Data = '${Data_Pageses}'");
		$rezultat = mysqli_query($conn_hd,"CALL modifikoDatenPageses(@id,@Data)");
		if ($rezultat) {
			# code...
			header("Location: kerkesat.php");
		}else
		{
			die("Coudn't execute update procedure!");
		}
	}
}
		?>
		<?php
//getting uid from url
// $ID_Kerkesa = $_GET['ID_Kerkesa'];

//selecting data associated with this particular uid
// $result = mysqli_query($conn_Kerkesa2,"SELECT Arsyja_Refuzimit  FROM kerkesat WHERE ID_Kerkesa");

// while($res = mysqli_fetch_array($result))
// {

// 	$Arsyja_Refuzimit = $res['Arsyja_Refuzimit'];
// }
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
					</div>
				</section>
			<!-- Banner -->	
				<section style="padding-top: 0%;" id="features">
					<div class="container">
						<header>
						<h2>Shkruaj Daten e pageses </h2>
						</header>
						<form method="post" action="shtoDatenHuazimit.php">
							<div class="row">
							<div class="col-6 col-12-medium" style="margin-left: 20%; width: 50%">
							<p style="margin: 0%">Data Pageses</p>
							<input style="color: black;" type="date" name="Data_Pageses" id="Data_Pageses" value="" placeholder="Data_Pageses" />
							<!-- <input type="date" name="Data_Pageses" value=""> -->
							<!-- <textarea name="Data_Pageses" id="demo-name"></textarea> -->
							</div>
							<div class="col-12">
							<input type="hidden" name="ID_Kerkesa" value='<?php echo $_GET['ID_Kerkesa'];?>' />
							<td><input type="submit" name="shtoDatenHuazimit" value="Shto"></td>
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