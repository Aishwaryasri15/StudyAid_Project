<?php
require 'connection.php';

$query ="SELECT * FROM tutorsprofile";
$data5 = mysqli_query($q,$query);
while($r5=mysqli_fetch_assoc($data5))
{
    $name = $r5['tutor_name'];


?>

<h4><?php echo "$name"; ?></h4>
<?php
}
?>