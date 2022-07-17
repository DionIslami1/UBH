<?php
/* Kontrollon sesionin */
include('konfiguro.php');
session_start();
$user_check=$_SESSION['Nr_Identifikues'];
$ses_sql = mysqli_query($conn_kontrollo,"CALL zgjedhKontrollo('$user_check')");
$row=mysqli_fetch_array($ses_sql,MYSQLI_ASSOC);
$login_user=$row['Emri'];
if(!isset($user_check))
{ header("Location: index.php");} 
?>