<?php
require "connect.php";
session_start();
error_reporting(0);
$user=$_SESSION['user'];
if(isset($user))
{
    if(isset($_POST['submitt']))
    {
        $ab=$_POST['reminder'];
  
         $queryR ="INSERT INTO NOTES VALUES('','$ab',now())";
$data4=mysqli_query($con,$queryR);
    }
    
    
?>



<html>
    <head>
    
<title>
    
   Notes Page
    
    </title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
        
        
        
        	<link rel="stylesheet" type="text/css" href="min.css">
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

        <a class="nav-item nav-link" href="admin_neworders.php"><b style=" font-size: 20px;">Received Orders</b></a>
      <a class="nav-item nav-link" href="admin_completedorders.php"><b style=" font-size: 20px;">Completed Orders</b></a>
        <a class="nav-item nav-link active" href="admin_notes.php"><b style=" font-size: 20px;">Notes</b></a>
        <a class="nav-item nav-link" href="admin_feedbacks.php"><b style=" font-size: 20px;">Customer Details</b></a>
    
    </div>
  </div>
        </nav>
    <div>
      
    

    <div class="container ">
        
         
        <center>    <h2 style="padding-top:3%;padding-bottom:3%; font-family: 'Times New Roman', Times, serif;"> NOTES</h2>
    </center>
        
<form method="POST" action="admin_notes.php">
<!--Textarea with icon prefix-->
<div class="md-form amber-textarea active-amber-textarea-2">
  <i class="fas fa-pencil-alt prefix"></i>
  <textarea name="reminder" id="form24" class="md-textarea form-control" rows="3" maxlength="300"></textarea>
  <label for="form24">Please enter your Reminders here</label>
</div>
    <input  type="submit" name="submitt" class="btn btn-primary btn-sm" id="form24" >
    </form>
        
        <center>    <h2 style="padding-top:2%;padding-bottom:2%; font-family: 'Times New Roman', Times, serif;"> Reminder's</h2>
    </center>
        

      
        <table class="table table-hover table-bordered table-striped table-responsive" style="min-width:100%;max-height:510px;margin-bottom:100px;margin-top:30px;">
  <thead>
    <tr style="padding-bottom:10px !important;">
                <th scope="col" style="min-width:240px;">Date</th>  
        <th scope="col" style="max-width:400px;min-width:740px">Reminder</th>
        <th scope="col" style="min-width:125px;">Delete</th>
       
 
    </tr>
      <?php
    
    
    
      $query ="SELECT * FROM NOTES ORDER BY DATE DESC,ID DESC";
$data5=mysqli_query($con,$query);
      while($r5=mysqli_fetch_assoc($data5))
{
	$reminder = $r5['reminder'];
    $date = $r5['date'];
  
    $id=$r5['id']
	
//	echo nl2br("'$c  .. ' .$b        ---------".$a."\n\n\n");
//	$c = $c+1;
//
//}

      
      
      ?>
  </thead>
  <tbody>
    <tr>
         <td ><?php echo $date;?></td>
        <td ><?php echo $reminder;?></td>
        <td><a href="deleted.php?id=<?php echo $id?>&pg=1"><button  type="button" class="login100-form-btn" style="padding: 6px 12px ;background:#F70F0F !important;" >
							Delete
						</button></a></td>
    </tr>
      <?php
      }
//      $query1 ="UPDATE BOOKING_TBL SET STATUS='completed' WHERE id='$id'";
//$data3=mysqli_query($con,$query1);
      

            ?>
  </tbody>
</table>        
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    </body>

</html>
      
        
      <?php
}
?>