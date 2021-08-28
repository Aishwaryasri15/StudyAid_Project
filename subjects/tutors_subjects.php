<?php
require '../connection.php';
$query1 = "SELECT DISTINCT subject_name FROM tutorsubjects";
$data1=mysqli_query($q,$query1); 
while($r2 = mysqli_fetch_array($data1))
  { 
       echo $r2['subject_name']."<br>";
       
        
}
?>
