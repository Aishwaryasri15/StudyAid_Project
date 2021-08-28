<?php

require "connect.php";      
$ident = $_GET['id'];
$a=$_GET['pg'];
if($a==2)
{
$queryA ="delete from contact_tbl where id=$ident";
$dataA=mysqli_query($con,$queryA);
if(isset($dataA))
{
    
header("Location:admin_feedbacks.php");
}
    }
else
{
$queryA ="delete from notes where id=$ident";
$dataA=mysqli_query($con,$queryA);
if(isset($dataA))
{
    
header("Location:admin_notes.php");
}
    }
?>