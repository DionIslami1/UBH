<?php
//including the database connection file
include("konfiguro.php");

//getting uid of the data from url
$p_id_p = $_GET['id_p'];

//deleting the row from table
$result = mysqli_query($conn,"CALL fshijePuntoret ('$p_id_p')");

//redirecting to the display page (index.php in our case)
header("Location:Fshije_punetore.php");
?>

