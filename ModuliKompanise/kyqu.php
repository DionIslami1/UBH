<?php
/* Kontrollon nese logini mund te kryhet me sukses, nese username dhe passwordi qe ka shkruar useri ne Index.php gjindet ne db ne MySQL */
	session_start();
	include("konfiguro.php"); //Establishing connection with our database
	
	$error = ""; //Variable for storing our errors.
	if(isset($_POST["submit"]))
	{
		if(empty($_POST["Nr_Identifikues"]) || empty($_POST["Fjalekalimi"]))
		{
			$error = "Both fields are required.";
		}else
		{
			// Define $username and $password
			$Nr_Identifikues=$_POST['Nr_Identifikues'];
			//$Fjalekalimi=$_POST['Fjalekalimi'];
			$Fjalekalimi=MD5($_POST['Fjalekalimi']);
			//Check username and password from database
			$sql="CALL zgjedhPuntore('$Nr_Identifikues','$Fjalekalimi')";
			
			$result=mysqli_query($conn,$sql);
			$row=mysqli_fetch_array($result,MYSQLI_ASSOC);
			//If username and password exist in our database then create a session.
			//Otherwise echo error.
			if(mysqli_num_rows($result) == 1)
			{
				$_SESSION['Nr_Identifikues'] = $Nr_Identifikues; // Initializing Session
				header("location: ballina_administratorit.php"); // Redirecting To Other Page
			}else
			{
				$error = "Incorrect username or password.";
			}
		}
	}
?>