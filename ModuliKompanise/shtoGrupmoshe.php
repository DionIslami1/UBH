<html>
	<head>
		<title>Moduli Kompanise</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<meta name="description" content="" />
		<meta name="keywords" content="" />
		<link rel="stylesheet" href="assets/css/main.css" />	 
	</head>
<body>
<?php
//including the database connection file
include_once("konfiguro.php");
if(isset($_POST['shtoGrupmoshe'])) {	
	$mosha = $_POST['mosha'];	
	// checking empty fields
	if(empty($mosha)) {			
		if(empty($mosha)) {echo "<font color='red'>mosha field is empty.</font><br/>";}
		//link to the previous programi
		echo "<br/><a href='javascript:self.history.back();'>Go Back</a>";
	} else { 
		// if all the fields are filled (not empty) 
		//insert data to database	
		$result = mysqli_query($conn, "CALL shtoGrupmoshe ('$mosha')");
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
