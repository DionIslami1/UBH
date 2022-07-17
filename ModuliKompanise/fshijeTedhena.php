<?php
//including the database connection file
include("konfiguro.php");

//getting uid of the data from url
$p_ID_Data = $_GET['ID_Data'];

//deleting the row from table
$result = mysqli_query($conn,"CALL fshijeTedhena ('$p_ID_Data')");

//redirecting to the display page (index.php in our case)
header("Location:fshije_tedhena.php");
?>

