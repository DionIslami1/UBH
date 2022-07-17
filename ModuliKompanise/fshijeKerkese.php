<?php
//including the database connection file
include("konfiguro.php");
//getting uid of the data from url
$p_ID_Kerkesa = $_GET['ID_Kerkesa'];
//deleting the row from table
//$result = mysqli_query($conn,"DELETE FROM bicikletat WHERE id_bicikleta=$id_bicikleta");
$result = mysqli_query($conn_fshije,"CALL fshijeKerkese('$p_ID_Kerkesa')");

//redirecting to the display page (index.php in our case)
header("Location:kerkesat.php");
?>

