<?php
/* Faqja (home.php) e cila paraqitet pasi perdoruesi te llogohet me sukses */
	include("kontrollo.php");	
?>
<?php
// including the database connection file
include_once("konfiguro.php");
if(isset($_POST['modifikoBicikletat'])) {	
	$id_bicikleta = $_POST['id_bicikleta'];
	$Lloji_Bicikletes = $_POST['Lloji_Bicikletes'];
	$id_m = $_POST['id_m'];
	$Pershkrimi1 = $_POST['Pershkrimi'];
	$Cmimi = $_POST['Cmimi'];
	
	$imgData = addslashes (file_get_contents($_FILES['userfile']['tmp_name']));
	$name = $_FILES['userfile']['name'];
	 $maxsize = 10000000; //set to approx 10 MB
	// checking empty fields
	if(empty($Lloji_Bicikletes) || empty($Pershkrimi1) || empty($Cmimi)) {
				
		if(empty($Lloji_Bicikletes)) {
			echo "<font color='red'>Fusha Lloji_Bicikletes eshte jo e mbushur.</font><br/>";
		}
		
		if(empty($Pershkrimi1)) {
			echo "<font color='red'>Pershkrimi field is empty.</font><br/>";
		}
		
		if(empty($Cmimi)) {
			echo "<font color='red'>Cmimi field is empty.</font><br/>";
		}
		//link to the previous pMbiemri
		echo "<br/><a href='javascript:self.history.back();'>Kthehu Mbrapa</a>";
	} else {	
		//updating the table
		//$result = mysqli_query($conn,"UPDATE puntoret SET Nr_Identifikues='$Nr_Identifikues',Fjalekalimi='$Fjalekalimi',Emri='$Emri',Mbiemri='$Mbiemri',emaili='$emaili',Nr_Telefonit='$Nr_Telefonit' WHERE id_p=$id_p");		
		//redirectig to the display ppassword. In our case, it is admin.php
		//header("Location: modifiko_punetore.php");
		mysqli_query($conn, "SET @p_id_bicikleta=${id_bicikleta}");
		mysqli_query($conn, "SET @p_Lloji_Bicikletes='${Lloji_Bicikletes}'");
		mysqli_query($conn, "SET @p_id_m='${id_m}'");
		mysqli_query($conn, "SET @p_Pershkrimi='${Pershkrimi1}'");
		mysqli_query($conn, "SET @p_Cmimi='${Cmimi}'");
		mysqli_query($conn, "SET @p_file='${imgData}'");
		mysqli_query($conn, "SET @p_name='${name}'");
		$result=mysqli_query($conn,"CALL modifikoBicikletat(@p_id_bicikleta,@p_Lloji_Bicikletes,@p_id_m,@p_Pershkrimi,@p_Cmimi,@p_file,@p_name)");
		//redirectig to the display ppassword. In our case, it is admin.php
		if($result)
		{
		//redirectig to the display pProgrami. In our case, it is admin.php
		header("Location:modifiko_bicikletat.php");
		}
		else{
		die("Coudn't execute update procedure!");
		}
		
		}
		}
		?>
<?php
//getting ID_Studenti from url
$id_bicikleta = $_GET['id_bicikleta'];
//selecting data associated with this particular ID_Studenti
$result = mysqli_query($conn_bicikleta,"CALL ZgjedhID_bicikletat('$id_bicikleta')");
while($res = mysqli_fetch_array($result))
{
	$Lloji_Bicikletes = $res['Lloji_Bicikletes'];
	$id_m = $res['id_m'];
	$Pershkrimi1 = $res['Pershkrimi'];
	$Cmimi = $res['Cmimi'];	
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
			<!-- Features -->
				<section id="features">
					<div class="container">
						<header>
                        <h2>Modifiko bicikletat</h2>
						</header>
					<!-- Text -->
					<form enctype="multipart/form-data" method="post" action="modifikoBicikletat.php" name="form1">
										<div class="row">
										<div class="col-6 col-12-medium">
											<p style="margin: 0%"><b style="color:#F38E73">Lloji i bicikletes</b></p>
											<input type="text" name="Lloji_Bicikletes" id="" value='<?php echo $Lloji_Bicikletes;?>' required />
										</div>
										<div class="col-6 col-12-medium">
											<p style="margin: 0%"><b style="color:#F38E73">Bicikleta:</b> </p>
												<select name="id_m">
													<option selected="selected"></option>
														<?php
														$res=mysqli_query($conn,"CALL ZgjedhMoshen()");
														while($row=$res->fetch_array())
														{
															?>
															<option value="<?php echo $row['id_m']; ?>"><?php echo $row['mosha']; ?></option>
															<?php
														}
														?>
												</select>
											</div>
											<div class="col-6 col-12-medium">
											<p style="margin: 0%"><b style="color:#F38E73">Pershkrimi</b></p>
												<input type="text" name="Pershkrimi" id="" value='<?php echo $Pershkrimi1;?>' required />
											</div>
											<div class="col-6 col-12-medium">
											<p style="margin: 0%"><b style="color:#F38E73">Cmimi</b></p>
												<input type="text" name="Cmimi" id=""value='<?php echo $Cmimi;?>' required />
											</div>
											<br>
											<div class="col-6 col-12-medium">
											<tr>
											<td><input type="hidden" name="MAX_FILE_SIZE" value="10000000" /></td>
													<td><input name="userfile" type="file" /></td>
											</tr>												
                                              </div>
                                                <div class="col-12">
                                                <td><input type="hidden" name="id_bicikleta" value='<?php echo $_GET['id_bicikleta'];?>' /></td>
												<td><input type="submit" name="modifikoBicikletat" value="Modifiko" class="primary" ></td>
												<!--<a href="#" class="button icon solid fa-file">Shto</a> --->
											</div>
										</div>
									</form>						
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