<html>
<head>
		<title>Moduli Kompanise</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/css/main.css" />
	</head>
	<body>
<?php
//including the database connection file
include_once("konfiguro.php");
if(isset($_POST['shtoTedhena'])) {	
	$Titulli = $_POST['Titulli'];
	$Pershkrimi = $_POST['Pershkrimi'];
	$File = $_POST['File'];
	$PageLayout = $_POST['PageLayout'];	
	// checking empty fields
	if(empty($Titulli) || empty($Pershkrimi)|| empty($File) || empty($PageLayout)) {
				
		if(empty($Titulli)) {
			echo "<font color='red'>Titulli field is empty.</font><br/>";
		}
		
		if(empty($Pershkrimi)) {
			echo "<font color='red'>Pershkrimi field is empty.</font><br/>";
		}
			if(empty($File)) {
			echo "<font color='red'>File field is empty.</font><br/>";
		}
		if(empty($PageLayout)) {
			echo "<font color='red'>Vendosja field is empty.</font><br/>";
		}
		//link to the previous pMbiTitulli
		echo "<br/><a href='javascript:self.history.back();'>Go Back</a>";
	} else { 
		// if all the fields are filled (not empty) 	
		$result = mysqli_query($conn, "CALL shtoTedhena ('$Titulli','$Pershkrimi','image/$File' ,'$PageLayout' )");
			//display success message
			echo "<script>
         setTimeout(function(){
            window.location.href = 'ballina.php';
         }, 5000);
      </script>";
		 echo"<p><b>   E dhena eshte duke u regjistruar ne sistem. Ju lutem pritni 5 sekonda. <b></p>";
		}
	}
	?>
</body>
</html>
