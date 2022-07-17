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
include_once("konfiguro.php");
if(isset($_POST['shtoPunetore'])) {	
	$Nr_Identifikues = $_POST['Nr_Identifikues'];
	$Fjalekalimi = $_POST['Fjalekalimi'];
    $Emri = $_POST['Emri'];
    $Mbiemri = $_POST['Mbiemri'];
    $emaili = $_POST['emaili'];
    $Nr_Telefonit = $_POST['Nr_Telefonit'];	
	// checking empty fields
	if(empty($Nr_Identifikues) || empty($Fjalekalimi)|| empty($Emri) || empty($Mbiemri) || empty($emaili) || empty($Nr_Telefonit) ) {
				
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
			echo "<font color='red'>emaili field is empty.</font><br/>";
        }
        if(empty($Nr_Telefonit)) {
			echo "<font color='red'>Nr_Telefonit field is empty.</font><br/>";
		}
		
		//link to the previous pMbiemri
		echo "<br/><a href='javascript:self.history.back();'>Go Back</a>";
	} else { 
		// if all the fields are filled (not empty) 	
		//insert data to database	
		$result = mysqli_query($conn, "CALL shtoPuntoret ('$Nr_Identifikues','$Fjalekalimi','$Emri' ,'$Mbiemri' ,'$emaili' ,'$Nr_Telefonit')");
		//display success message
			echo "<script>
         setTimeout(function(){
            window.location.href = 'ballina.php';
         }, 5000);
      </script>";
		 echo"<p><b>   E dhena eshte duke u regjistruar ne sistem. Ju lutem pritni 5 sekonda. <b></p>"; 
		//echo "<font color='green'>Data added successfully.";
		//echo "<br/><a href='ballina.php'>View Result</a>";
	}
}
?>
</body>
</html>
