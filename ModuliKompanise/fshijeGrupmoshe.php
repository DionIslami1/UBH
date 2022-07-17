<?php
//including the database connection file
include("konfiguro.php");

//getting uid of the data from url
$p_id_m = $_GET['id_m'];

//deleting the row from table
$result = mysqli_query($conn,"CALL fshijeGrupmoshe ('$p_id_m')");

//redirecting to the display page (index.php in our case)
header("Location:fshije_grupmoshe.php");
?>


