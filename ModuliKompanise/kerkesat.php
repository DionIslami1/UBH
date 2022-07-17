<?php
/* Faqja (home.php) e cila paraqitet pasi perdoruesi te llogohet me sukses */
	include("kontrollo.php");	
?>
<?php
//including the database connection file
include_once("konfiguro.php");

//fetching data in descending order (lastest entry first)
//$result = mysqli_query($conn,
//"SELECT * FROM kerkesat ORDER BY ID_Kerkesa DESC");
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
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<style>
table {
  border-collapse: collapse;
  border-spacing: 0;
  width: 100%;
  border: 0px solid #ddd;
}
th, td {
  text-align: left;
  padding: 8px;
}
td {
    white-space: nowrap;
    overflow: hidden;
    width: 125px;
    height: 25px; 
}
tr:nth-child(even){background-color: #f2f2f2}

	td{
		color:black
		}
		p{
			color:black
		}
</style>
	</head>
	<script>
function change()
{
    document.getElementById("myButton1").value="Paguaj"; 
}
</script>
	<body class="homepage is-preload">
		<div id="page-wrapper">
			<!-- Header -->
				<section id="header">
					<div class="container">
						<?php include_once('headeradm.php');?>
						<?php include_once('menyte.php');?>
					</div>
				</section>
			<!-- Features -->
				<section style="padding-top: 0%;" id="features">
					<div class="container" style="width:100%;">
						<header>
                        <h2>Menaxhimi i të dhënave për huazime nga punëtori </h2>
						</header>
						<div class="table-wraper">
                            <form action="" method="post">
								<table class="default" width="100%">
									<tr>
									<h3>Kërko të dhënat e huazimeve </h3>
									</tr>
									<tr>
										<td> <b  style="color:#F38E73">
										   Shkruaj:</b> 
										</td>
										<td>
											<input type="text" name="term" placeholder="Emrin e klientit ose Bicikleten per huazim"/>
										</td>
										<td> 
											<input type="submit" value="Kërko" />
										</td>
									</tr>
								</table> 
							<form>
						</div>
					</div> 
					<div style="overflow-x:auto;">
					<table  border=0 >
								<div>
									<tr bgcolor='#FAB6A4' style="">
										<td><b>Lloji i bicikletes</b></td>
										<td><b>Ditet </b></td>
										<td><b>Data e huazimit </b></td>
										<td><b>Menaxhimi i Kthimit</b></td>
										<td><b>Data e Kthimi</b></td>
										<td><b>cmimiTotal</b></td>										
										<td><b>Emri</b></td>
										<td><b>Mbiemri</b></td>
										<td><b>Nr.Identifikues</b></td>
										<td><b>Email</b></td>
										<td><b>Nr_Telefonit</b></td>
										<td><b>Menaxhimi i të dhënave</b></td>
										<td><b>Kerkesa</b></td>
										<td><b>Pagesa</b></td>
										<td><b>Data e pageses</b></td>
										<td><b>Kthimi</b></td>
										<td><b>Data e Kthimit</b></td>
										<td><b>Fshije</b></td>
									</tr> 
									<?php
									if (!empty($_REQUEST['term'])) {

									$term = mysqli_real_escape_string($conn,$_REQUEST['term']);     

									$sql = mysqli_query($conn_Kerkesa2,	
									"SELECT
										k.ID_Kerkesa,
									b.Lloji_Bicikletes,
									k.ditet,
									k.Data_Huazimit,
									k.Data_Kthimit,
									k.cmimiTotal,
									k.Emri,
									k.Mbiemri,
									k.Nr_Identifikues,
									k.Email,
									k.Nr_Telefonit,
									k.Kerkesa,
									k.Pagesa,
									k.Kthimi

									FROM
									kerkesat k
									INNER JOIN
									bicikletat b ON k.id_bicikleta = b.id_bicikleta
									WHERE
									k.Emri LIKE '%".$term."%' OR k.Mbiemri LIKE '%".$term."%'"
										); 

									while($row = mysqli_fetch_array($sql)) { 		
											echo "<tr>";
											echo "<td>".$row['Lloji_Bicikletes']."</td>";
											echo "<td>".$row['ditet']."</td>";
											echo "<td>".$row['Data_Huazimit']."</td>";
											echo "<td><a href=\"dataKthimitHuazimit.php?ID_Kerkesa=$row[ID_Kerkesa]\" class='fa fa-check' class='button primary'>Data Kthimit</a></td>";
											echo "<td>".$row['Data_Kthimit']."</td>";		
											echo "<td>".$row['cmimiTotal']."</td>";											
											echo "<td>".$row['Emri']."</td>";	
											echo "<td>".$row['Mbiemri']."</td>";
											echo "<td>".$row['Nr_Identifikues']."</td>";
											echo "<td>".$row['Email']."</td>";
											echo "<td>".$row['Nr_Telefonit']."</td>";
											echo "<td><a href=\"shtoArsyjeRef.php?ID_Kerkesa=$row[ID_Kerkesa]\" class='fa fa-check' class='button primary'>Aprovo</a><br>

												<a href=\"shtoArsyjeRef.php?ID_Kerkesa=$row[ID_Kerkesa]\" class='fa fa-remove' class='button primary'>Refuzo</a>  </td>";
											echo "<td>".$row['Kerkesa']."</td>";

											 echo "<td><a href=\"shtoPagese.php?ID_Kerkesa=$row[ID_Kerkesa]\" class='fa fa-check' class='button primary'>E Paguar</a><br>

												<a href=\"shtoPagese.php?ID_Kerkesa=$row[ID_Kerkesa]\" class='fa fa-remove' class='button primary'>Jo e Paguar</a>  </td>";

												echo "<td>".$row['Pagesa']."</td>";

												 echo "<td><a href=\"shtoKthim.php?ID_Kerkesa=$row[ID_Kerkesa]\" class='fa fa-check' class='button primary'>E Kthyer</a><br>

												<a href=\"shtoKthim.php?ID_Kerkesa=$row[ID_Kerkesa]\" class='fa fa-remove' class='button primary'>Jo e Kthyer</a>  </td>";

												echo "<td>".$row['Kthimi']."</td>";

												 echo "<td><a href=\"fshijeKerkese.php?ID_Kerkesa=$row[ID_Kerkesa]\" onClick=\"return confirm('A jeni te sigurt se deshironi te fshini Kerkesen?')\" class='fa fa-check' class='button primary'>Fshije</a> </td>";	
											
										}
									}
									?>
		  						</div>
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