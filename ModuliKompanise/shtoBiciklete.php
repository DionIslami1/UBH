<html>
<head>
		<title>Moduli Kompanise</title>
		<meta charset="utf-8"/>
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/css/main.css" />
	</head>
<body>
<?php
include_once("konfiguro.php");
if(isset($_POST['shtoBiciklete'])) {	
	$Lloji_Bicikletes = $_POST['Lloji_Bicikletes'];
	$id_m = $_POST['id_m'];
	$Pershkrimi = $_POST['Pershkrimi'];
	$Cmimi = $_POST['Cmimi'];

	$imgData =addslashes (file_get_contents($_FILES['userfile']['tmp_name']));
	$name = $_FILES['userfile']['name'];
	 $maxsize = 10000000;		

	if(empty($Lloji_Bicikletes) || empty($id_m)  || empty($Pershkrimi)|| empty($Cmimi) ) {			
		if(empty($Lloji_Bicikletes)) {echo "<font color='red'>Lloji_Bicikletes field is empty.</font><br/>";}

		if(empty($id_m)) {echo "<font color='red'>Id_m field is empty.</font><br/>";}

		if(empty($Pershkrimi)) {echo "<font color='red'>Pershkrimi field is empty.</font><br/>";}

		if(empty($Cmimi)) {echo "<font color='red'>Cmimi field is empty.</font><br/>";}

		echo "<br/><a href='javascript:self.history.back();'>Go Back</a>";
	} else { 
		$result = mysqli_query($conn, "CALL shtoBicikleta ('$Lloji_Bicikletes','$id_m','$Pershkrimi' ,'$Cmimi' ,'$imgData' ,'$name')");
		//$result = mysqli_query($conn, "INSERT INTO bicikletat(Lloji_Bicikletes, id_m,Pershkrimi, Cmimi, image, name) VALUES('$Lloji_Bicikletes', '$id_m', '$Pershkrimi', '$Cmimi', '$imgData', '$name' )");
		//display success messmessage
		//echo "<font color='green'>Data added successfully.";
		//echo "<br/><a href='contact.php'>View Result</a>";
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