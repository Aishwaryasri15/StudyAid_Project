<?php
require "connection.php";
$id = $_GET['id'];

$query = "DELETE FROM tutorsubjects WHERE id=$id ";
$data= mysqli_query($q,$query);

if($data)
{
    header("Location: tutorsprofile.php");
    
}
else
{
    echo "error";
}
?>