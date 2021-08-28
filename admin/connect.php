<?php
$con = mysqli_connect("localhost","root","");
if($con)
{
//    echo "Connection Established";
    $sel = mysqli_select_db($con,"ido");
    if($sel)
    {
//        echo "Database Selected";
    }
    else
    {
      echo "Database Failed to select";
    }
}
else
{
    echo "Connection Failed";
}
?>