<?php
$servername="localhost";
$username="u325434902_developer"; 
$password="Developer1";
$dbname="u325434902_studyaid";
$q=mysqli_connect($servername,$username,$password,$dbname);
if(isset($q))
echo  "";
else
	die("db not connected".mysqli_connect_error());
?>