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
if(isset($_POST['shtoKontakt'])) {	
	$Emri = $_POST['Emri'];
	$Mesazhi = $_POST['Mesazhi'];
    $Email = $_POST['Email'];
    
	// checking empty fields
	if(empty($Emri) || empty($Mesazhi) || empty($Email)) {			
		if(empty($Emri)) {echo "<font color='red'>Subjekti field is empty.</font><br/>";}
		if(empty($Mesazhi)) {echo "<font color='red'>Mesazhi field is empty.</font><br/>";}
		if(empty($Email)) {echo "<font color='red'>Email field is empty.</font><br/>";}
		//link to the previous Mesazhi
		echo "<br/><a href='javascript:self.history.back();'>Go Back</a>";
	} else { 
		// if all the fields are filled (not empty) 
		//insert data to database	
        //$result = mysqli_query($conn, "INSERT INTO kontakti(Emri,Mesazhi,Email) VALUES('$Emri','$Mesazhi','$Email')");
        $result = mysqli_query($conn, "CALL shtoKontakt ('$Emri','$Mesazhi','$Email')");
		//display success messMesazhi
	//	echo "<font color='green'>Data added successfully.";
		//echo "<br/><a href='contact.php'>View Result</a>";
		echo "<script>
         setTimeout(function(){
            window.location.href = 'index.php';
         }, 5000);
      </script>";
		 echo"<p><b>   E dhena eshte duke u regjistruar ne sistem. Ju lutem pritni 5 sekonda. <b></p>";
	
	}
}
?>
</body>
</html>
