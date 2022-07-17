<html>
<head>
		<title>Bicikleta per Huazim</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/css/main.css" />
	</head>
<body>
<?php
//including the database connection file
include_once("config.php");

if(isset($_POST['addHuazim'])) {	
	$id_bicikleta = $_POST['id_bicikleta'];
	$ditet = $_POST['ditet'];
	$Data_Huazimit = $_POST['Data_Huazimit'];
	$cmimiTotal = $_POST['cmimiTotal'];
	$Emri = $_POST['Emri'];
	$Mbiemri = $_POST['Mbiemri'];
	$Nr_Identifikues = $_POST['Nr_Identifikues'];
	$Email = $_POST['Email'];
	$Nr_Telefonit = $_POST['Nr_Telefonit'];


		
	// checking empty fields
	if(empty($ditet) || empty($Data_Huazimit) || empty($cmimiTotal) || empty($Nr_Identifikues) || empty($Emri) || empty($Mbiemri) || empty($Email) || empty($Nr_Telefonit)) {			
		if(empty($ditet)) {echo "<font color='red'>ditet field is empty.</font><br/>";}
		if(empty($Data_Huazimit)) {echo "<font color='Data_Huazimit'>Data Huazimit field is empty.</font><br/>";}
		if(empty($cmimiTotal)) {echo "<font color='red'>cmimiTotal field is empty.</font><br/>";}
		if(empty($Nr_Identifikues)) {echo "<font color='red'>Nr_Identifikues field is empty.</font><br/>";}
		if(empty($Emri)) {echo "<font color='red'>Emri field is empty.</font><br/>";}
		if(empty($Mbiemri)) {echo "<font color='red'>Mbiemri field is empty.</font><br/>";}
		if(empty($Email)) {echo "<font color='red'>Email field is empty.</font><br/>";}
		if(empty($Nr_Telefonit)) {echo "<font color='red'>Nr_Telefonit field is empty.</font><br/>";}
		//link to the previous password
		echo "<br/><a href='javascript:self.history.back();'>Go Back</a>";
	} else { 
		// if all the fields are filled (not empty) 
		//insert data to database	
		$result = mysqli_query($conn, "INSERT INTO kerkesat(id_bicikleta,ditet,Data_Huazimit,cmimiTotal,Emri,Mbiemri,Nr_Identifikues,Email,Nr_Telefonit) VALUES('$id_bicikleta','$ditet','$Data_Huazimit','$cmimiTotal','$Emri','$Mbiemri','$Nr_Identifikues','$Email','$Nr_Telefonit')");
		//display success messpassword
	echo "<script>
         setTimeout(function(){
            window.location.href = 'index.php';
         }, 5000);
      </script>";
		 echo"<p><b>   E dhena eshte duke u regjistruar ne sistem. Ju lutem pritni 5 sekonda. <b></p>";
	
		//echo "<font color='green'>Data added successfully.";
		//echo "<br/><a href='perdoruesit.php'>View Result</a>";
	}
}
?>

</body>
</html>