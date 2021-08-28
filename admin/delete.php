<?php

require "connect.php";      
$ident = $_GET['id'];
$a=$_GET['pg'];

$queryA ="delete from booking_tbl where id=$ident";
$dataA=mysqli_query($con,$queryA);
if(isset($dataA))
{
    if($a==1)
    {
header("Location:admin_neworders.php");
}
    else
    {
       header("Location:admin_completedorders.php"); 
    }
}
?>