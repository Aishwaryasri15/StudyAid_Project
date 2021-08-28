<?php

require "connect.php";      
$ident = $_GET['id'];

$queryA ="UPDATE booking_tbl SET status='completed' WHERE id='$ident'";
$dataA=mysqli_query($con,$queryA);
if(isset($dataA))
{
header("Location:admin_neworders.php");
}
 
?>