<?php
//including the database connection file
include("konfiguro.php");

//getting uid of the data from url
$p_id_bicikleta = $_GET['id_bicikleta'];

//deleting the row from table
//$result = mysqli_query($conn,"DELETE FROM bicikletat WHERE id_bicikleta=$id_bicikleta");
$result = mysqli_query($conn_fshije,"CALL fshijeBicikletat ('$p_id_bicikleta')");

//redirecting to the display page (index.php in our case)
header("Location:Fshije_biciklete.php");
?>

