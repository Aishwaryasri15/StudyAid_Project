<?php
require "connect.php";
session_start();
error_reporting(0);
$user=$_SESSION['user'];
if(isset($user))
{
    

?>



<html>
    <head>
    
<title>
    
    Orders Page
    
    </title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.0.1/jquery.min.js"></script>
<meta http-equiv="refresh" content="40"; url="<?php echo $_SERVER['PHP_SELF']; ?>">
    </head>
<body>
    
 
  
              <!--header-->

    <nav class="navbar navbar-expand-lg navbar-dark bg-primary " style="width: 100%">
  <a class="navbar-brand" href="index.php">iDO</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
    <div class="navbar-nav">

        <a class="nav-item nav-link active" href="admin_neworders.php"><b style=" font-size: 20px;" >Received Orders</b></a>
      <a class="nav-item nav-link" href="admin_completedorders.php"><b style=" font-size: 20px;">Completed Orders</b></a>
        <a class="nav-item nav-link" href="admin_notes.php"><b style=" font-size: 20px;">Notes</b></a>
        <a class="nav-item nav-link" href="admin_feedbacks.php"><b style=" font-size: 20px;">Customer Details</b></a>
      </div>
    </div>
  
</nav>
    <div class="container ">
    
        <center>    <h2 style="padding-top:3%;padding-bottom:3%; font-family: 'Times New Roman', Times, serif;">Received Orders </h2>
    </center>

        
        
        
         <table class="table table-hover table-bordered table-striped table-responsive" style="width:100%;max-height:510px;margin-bottom:100px;margin-top:30px;">
  <thead>
    <tr style="padding-bottom:10px !important;">
                <th scope="col" style="min-width:110px;">Date/Time</th>  
        <th scope="col" >Name</th>
      <th scope="col" >Category</th>
      <th scope="col">Service</th>
        <th scope="col" style="min-width:280px;">Description</th>
        <th scope="col" >Contact No</th>

        <th scope="col">Status</th>
        <th scope="col">Delete</th>
       
 
    </tr>
      <?php
      $query ="SELECT * FROM BOOKING_TBL WHERE STATUS!='completed' ORDER BY DATE DESC,ID DESC";
$data5=mysqli_query($con,$query);
      while($r5=mysqli_fetch_assoc($data5))
{
	$order_category = $r5['order_category'];
	$services = $r5['services'];
    $description = $r5['description'];
    $name = $r5['name'];
    $date = $r5['date'];
    $contact = $r5['contact'];
    $id=$r5['id']
	
//	echo nl2br("'$c  .. ' .$b        ---------".$a."\n\n\n");
//	$c = $c+1;
//
//}

      
      
      ?>
  </thead>
  <tbody>
    <tr>
         <td><?php echo $date;?></td>
      <td><?php echo $name;?></td>
      <td><?php echo $order_category;?></td>
      <td><?php echo $services;?></td>
        <td><?php echo $description;?></td>
      <td><?php echo $contact;?></td>
     
         
          <td><a href="ordered.php?id=<?php echo $id?>"><button  type="button" class="login100-form-btn" style="padding: 6px 12px  !important;" >
							Completed
						</button></a></td>
         <td><a href="delete.php?id=<?php echo $id?>&pg=1"><button  type="button" class="login100-form-btn" style="padding: 6px 12px ;background:#F70F0F !important;" >
							Delete
						</button></a></td>
    </tr>
      <?php
      }
//      $query1 ="UPDATE BOOKING_TBL SET STATUS='completed' WHERE id='$id'";
//$data3=mysqli_query($con,$query1);
      
}

            ?>
  </tbody>
</table>
    
    </div>
    
    
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    </body>


</html>

